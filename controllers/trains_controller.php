<?php
class TrainsController extends AppController {

	var $name = 'Trains';
        var $components = array('Wizard.Wizard');
        var $helpers = array('Form', 'Html', 'Session', 'Menu', 'Time', 'SimplaForm', 'SimplaTableWp', 'SimplaBoxes');
        var $uses = array('Train', 'Locomotive', 'CargoWagon', 'Employee', 'Route');

        function beforeFilter() {
	$this->Wizard->steps = array('locomotive', 'cargo', 'driver', 'route', 'review');
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
            $this->Locomotive->set($this->data);
                return true;
        }

        function _prepareCargo(){
            $cargoWagons = $this->Train->CargoWagon->find('all');
            $this->set(compact('cargoWagons'));
            pr($this->Wizard->read());
        }
        function _processCargo() {
            return true;
        }

        function _prepareDriver(){
            $employees = $this->Train->Employee->find('all',  array('conditions' => array('role_id' => 7 )));
            $this->set(compact('employees'));
        }
        function _processDriver() {
            return true;
        }

        function _prepareRoute(){
            $routes = $this->Train->Route->find('all');
            $this->set(compact('routes'));
        }
        function _processRoute() {
            return true;
        }

        function _prepareReview(){
            $wizardData = $this->Wizard->read();
            $routes = $this->Train->Route->find('all');
            $this->set(compact('routes'));
        }
        function _processReview(){
            return true;
        }
        function _afterComplete() {
		$wizardData = $this->Wizard->read();
		pr($wizardData);

//		$this->Client->save($account['Client'], false, array('first_name', 'last_name', 'phone'));

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