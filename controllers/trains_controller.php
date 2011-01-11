<?php
class TrainsController extends AppController {

	var $name = 'Trains';
        var $components = array('Wizard.Wizard');
        var $helpers = array('Form', 'Html', 'Session', 'Menu', 'Time', 'SimplaForm', 'SimplaTableWp', 'SimplaBoxes');
        var $uses = array('Train', 'Locomotive', 'LocomotivesTrain', 'CargoWagon', 'CargoWagonsTrain', 'Employee', 'EmployeesTrain', 'Route', 'Periodicity', 'Stations');

        function beforeFilter() {
	$this->Wizard->steps = array('locomotive', 'cargo', 'driver', 'review');
        $this->Wizard->completeUrl = '/trains/confirm';
        }

        function confirm() {
        }
        
        function wizard($step = null) {
        $this->Wizard->process($step);
        }

        function _prepareLocomotive(){
            $locomotives = $this->Train->Locomotive->find('all');
            $this->set(compact('locomotives'));
            
            //pr($this->Wizard->read());
        }
        function _processLocomotive() {
            //$this->Locomotive->set($this->data);
                return true;
        }

        function _prepareCargo(){
            $cargoWagons = $this->Train->CargoWagon->find('all');
            $this->set(compact('cargoWagons'));
          //  pr($this->Wizard->read());
        }
        function _processCargo() {
            //$this->CargoWagon->set($this->data);
            return true;
        }

        function _prepareDriver(){
            $employees = $this->Train->Employee->find('all',  array('conditions' => array('role_id' => 7 )));
            $this->set(compact('employees'));
        }
        function _processDriver() {
           // $this->Employee->set($this->data);
            return true;
        }

        function _prepareRoute(){
            $routes = $this->Train->Route->find('all');
            $this->set(compact('routes'));
        }
        function _processRoute() {
           // $this->Route->set($this->data);
            return true;
        }

        function _prepareReview(){
            $wizardData = $this->Wizard->read();
            //$wizardData = Set::extract('/Train/', $wizardData);
            $routes = $this->Train->Route->find('all');
            $this->set(compact('routes', 'wizardData'));
        }
        function _processReview(){
          //  $this->Route->set($this->data);
            return true;
        }
        function _prepareKontrola() {
            $wizardData = $this->Wizard->read();
            $this->set(compact('wizardData'));
        }
        function _afterComplete() {
		$wizardData = $this->Wizard->read();


                $this->Train->create();
                $this->Train->set('stav_rezervace', $wizardData['review']['Train']['stav_rezervace']);
                $this->Train->save();

                $train = $this->Train->id;
                foreach ($wizardData['cargo']['Train'] as $cargo) {
                    if($cargo != 0){
                        /*$this->CargoWagonsTrain->create();
                        //$this->CargoWagonsTrain->set();
                        $pole = array('CargoWagonsTrain' =>
                                                      array('cargo_wagon_id' => $cargo,
                                                          'train_id' => $train));
                        $this->CargoWagonsTrain->save($pole);
                        pr($pole);*/
                        $this->CargoWagonsTrain->query('insert into cargo_wagons_trains values ('.$cargo.','.$train.')');
                    }
                }
                foreach ($wizardData['locomotive']['Train'] as $cargo) {
                    if($cargo != 0){
                       /* $this->LocomotivesTrain->create();
                        //$this->CargoWagonsTrain->set();
                        $pole = array('LocomotivesTrain' =>
                                                      array('locomotive_id' => $cargo,
                                                          'train_id' => $train));
                        $this->LocomotivesTrain->save($pole, array('update' => false));*/
                        //pr($cargo);
                        $this->LocomotivesTrain->query('insert into locomotives_trains values ('.$train.','.$cargo.')');

                    }
                }
                foreach ($wizardData['driver']['Train'] as $cargo) {
                    if($cargo != 0){
                        /*$this->CargoWagonsTrain->create();
                        //$this->CargoWagonsTrain->set();
                        $pole = array('CargoWagonsTrain' =>
                                                      array('cargo_wagon_id' => $cargo,
                                                          'train_id' => $train));
                        $this->CargoWagonsTrain->save($pole);
                        pr($pole);*/
                        $this->EmployeesTrain->query('insert into employees_trains values ('.$cargo.','.$train.')');
                    }
                }
//		$this->Client->save($account['Client'], false, array('first_name', 'last_name', 'phone'));
            //die();
	}

        function index() {
		$this->Train->recursive = 0;
		$this->set('trains', $this->paginate());
	}

        function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
		$routes = $this->Route->find('all');
                $this->set(compact('routes'));
                $this->set('train', $this->Train->read(null, $id));

	}

	function add() {
		if (!empty($this->data)) {
			$this->Train->create();
			if ($this->Train->save($this->data)) {
				$this->Session->setFlash(__('The train has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The train could not be saved. Please, try again.', true));
			}
		}
		$routes = $this->Train->Route->find('list');
                $cargoWagons = $this->Train->CargoWagon->find('list');
       		$locomotives = $this->Train->Locomotive->find('list', array('fields' => array('Locomotive.cislo_hv')));
		$employees = $this->Train->Employee->find('list',  array(
                                                          'conditions' => array('role_id' => 7 )));
                $this->set(compact('routes', 'cargoWagons', 'locomotives', 'employees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Train->save($this->data)) {
				$this->Session->setFlash(__('The tr1ain has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The train could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Train->read(null, $id);
		}
		$routes = $this->Train->Route->find('list');
                $cargoWagons = $this->Train->CargoWagon->find('list');
       		$locomotives = $this->Train->Locomotive->find('list');
		$employees = $this->Train->Employee->find('list',  array(
                                                          'conditions' => array('role_id' => 7 )));
                $this->set(compact('routes', 'cargoWagons', 'locomotives', 'employees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for employee', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Train->delete($id)) {
			$this->Session->setFlash(__('Train deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Employee was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
//        var $scaffold;
}
?>