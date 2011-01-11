<?php
class RoutesController extends AppController {

	var $name = 'Routes';
        //var $uses = array('Path', 'Route');
        var $helpers = array('Form', 'Html', 'Session', 'Menu', 'Time', 'SimplaForm', 'SimplaTable', 'SimplaBoxes', 'Javascript', 'Ajax');

	function index() {
		$this->Route->recursive = 0;
		$this->set('routes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid route', true));
			$this->redirect(array('action' => 'index'));
		}

                $route = $this->Route->read(null, $id);
                $paths = $this->Route->__paths($route['Path']);
                $this->set(compact('paths', 'route'));
	}

        function __paths($paths){
            $next_id = $paths['next_id'];
            $this->loadModel('Station');
            $this->loadModel('Path');
            while ($next_id != null) {
                $nazev = $this->Station->query('select name from stations where id='.$paths['id']);
                $pole = $pole.array('id' => $paths['id'], 'name' => $nazev);
                $další = $this->Path->query('select next_id from paths where station_id='.$paths['id']);
                $next_id = $dalsi;
            }
            return $pole;
        }

	function add() {
		if (!empty($this->data)) {
                    $start_station_id = $this->Route->StartStation->findByName($this->data['Route']['start_station']);
                    $end_station_id = $this->Route->EndStation->findByName($this->data['Route']['end_station']);
                    $this->data['Route']['start_station_id'] = $start_station_id['StartStation']['id'];
                    $this->data['Route']['end_station_id'] = $end_station_id['EndStation']['id'];

                    if(empty($this->data['Route']['start_station_id']) || empty($this->data['Route']['end_station_id']))
                    {
                        $this->Session->setFlash(__('Neexistující stanice.', true));
                    }
                    else
                    {

                        //06.05.2010 - takový datum dostanu z formu -- potřebuju 2010-05-28
                        //$this->data['Poll']['expired'] = preg_replace('/([0-9]{2}).([0-9]{2}).([0-9]{4})/i', '$3-$2-$1', $this->data['Poll']['date_expire']);
                        $this->data['Route']['datum_cas_odjezdu'] = preg_replace('/([0-9]{2}).([0-9]{2}).([0-9]{4}) ([0-9]{2}:[0-9]{2})/i', '$3-$2-$1 $4', $this->data['Route']['datum_cas_odjezdu']);
                        $this->data['Route']['datum_cas_prijezdu'] = preg_replace('/([0-9]{2}).([0-9]{2}).([0-9]{4}) ([0-9]{2}:[0-9]{2})/i', '$3-$2-$1 $4', $this->data['Route']['datum_cas_prijezdu']);

                        $pid = $this->Route->Path->field('id', null, 'id DESC');
                        foreach($this->data['Station'] as $key => $station)
                        {
                            $name = $this->Route->Path->Station->findByName($station['name']);
                            $this->data['Path'][$key]['station_id'] = $name['Station']['id'];
                            $this->data['Path'][$key]['next_id'] = 2 + $pid + $key;
                        }

                        //pr($this->data);die();
                            $this->Route->create();
                            $this->data['Route']['path_id'] = $this->__savePath();
                            if ($this->Route->save($this->data)) {
                                    
                                    $this->Session->setFlash(__('The route has been saved', true));
                                    $this->redirect(array('action' => 'index'));
                            } else {
                                    $this->Session->setFlash(__('The route could not be saved. Please, try again.', true));
                            }
                    }
		}
		$periodicities = $this->Route->Periodicity->find('list');
		$trains = $this->Route->Train->find('list');
		//$paths = $this->Route->Path->find('list');
		//$startStations = $this->Route->StartStation->find('list');
		//$endStations = $this->Route->EndStation->find('list');
		$this->set(compact('periodicities', 'trains'));
	}

        function __savePath()
        {
            $this->Route->Path->create();
            $this->Route->Path->set($this->data['Path'][0]);
            $this->Route->Path->save();
            $path_id = $this->Route->Path->getLastInsertId();
            unset($this->data['Path'][0]);
            if(count($this->data['Path']) > 0 )
            {
                foreach($this->data['Path'] as $key => $path)
                {
                    $this->Route->Path->create();
                    $this->Route->Path->set($path);
                    $this->Route->Path->save();
                }
            }

            $last_id = $this->Route->Path->getLastInsertId();
            $this->Route->Path->read(null, $last_id);
            $this->Route->Path->set('next_id',null);
            $this->Route->Path->save();

            return $path_id;
        }

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid route', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Route->save($this->data)) {
				$this->Session->setFlash(__('The route has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The route could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Route->read(null, $id);
		}
		$periodicities = $this->Route->Periodicity->find('list');
		$trains = $this->Route->Train->find('list');
		$paths = $this->Route->Path->find('list');
		$startStations = $this->Route->StartStation->find('list');
		$endStations = $this->Route->EndStation->find('list');
		$this->set(compact('periodicities', 'trains', 'paths', 'startStations', 'endStations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for route', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Route->delete($id)) {
			$this->Session->setFlash(__('Route deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Route was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>