<?php

class OrdersController extends AppController {

	var $name = 'Orders';
        var $uses = array('Train', 'Route', 'ArchivedTransportation', 'Station', 'Periodicity');
        var $helpers = array('Form', 'Html', 'Session', 'Menu', 'Time', 'SimplaForm', 'SimplaTableWp', 'SimplaBoxes', 'Xml');

        function index() {
		$this->Train->recursive = 0;
		$this->set('trains', $this->paginate());

                $this->Route->recursive = 0;
		$this->set('routes', $this->paginate());

	}

        function odeslani($id = null) {
                if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->Train->query('update trains set stav_rezervace="Čeká se na odpověď od MI" where id='.$id);
                $this->Session->setFlash(__('Objednávka odeslána k MI', true));
		$this->redirect(array('action'=>'index'));
		
        }

        function schvaleni($id = null) {
                if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->Train->query('update trains set stav_rezervace="Schváleno" where id='.$id);
                $this->Session->setFlash(__('Objednávka schválena', true));
		$this->redirect(array('action'=>'index'));

        }

        function neschvaleni($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('controller' => 'orders','action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Train->save($this->data)) {
				$this->Session->setFlash(__('The tr1ain has been saved', true));
				$this->redirect(array('controller' => 'orders','action' => 'index'));
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
                $this->Train->query('update trains set stav_rezervace="Neschváleno" where id='.$id);
        }
        function rezervace($id = null) {
                if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->Train->query('update trains set stav_rezervace="Rezervováno" where id='.$id);
                $this->Session->setFlash(__('Objednávka schválena', true));
		$this->redirect(array('action'=>'index'));

        }
        function xmlor($id = null){
                $this->layout = 'xml'.DS.'default';
                if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
		$routes = $this->Route->find('all');
                $this->set(compact('routes'));
                $this->set('train', $this->Train->read(null, $id));
        }

        function xmlmi($id = null){
                $this->layout = 'xml'.DS.'default';
                if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
		$routes = $this->Route->find('all');
                $this->set(compact('routes'));
                $this->set('train', $this->Train->read(null, $id));

        }

        function vetami($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
		$routes = $this->Route->find('all');
                $this->set(compact('routes'));
                $this->set('train', $this->Train->read(null, $id));

	}

 /*       function archiv($id = null) {
                if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->ArchivedTransportation->create();
                $this->ArchivedTransportation->save(array(''));
                $this->Train->query('insert into archived_transportations_cargo_wagons (cargo_wagon_id, archived_transportation_id) selec ');

        }*/
}
?>
