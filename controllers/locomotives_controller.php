<?php
class LocomotivesController extends AppController {

	var $name = 'Locomotives';

	function index() {
		$this->Locomotive->recursive = 0;
		$this->set('locomotives', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid locomotive', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('locomotive', $this->Locomotive->read(null, $id));
                $this->loadModel('Route');
                $routes = $this->Route->find('all');
                $this->set(compact('routes'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Locomotive->create();
			if ($this->Locomotive->save($this->data)) {
				$this->Session->setFlash(__('The locomotive has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locomotive could not be saved. Please, try again.', true));
			}
		}
		$archivedTransportations = $this->Locomotive->ArchivedTransportation->find('list');
		$trains = $this->Locomotive->Train->find('list');
		$this->set(compact('archivedTransportations', 'trains'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid locomotive', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Locomotive->save($this->data)) {
				$this->Session->setFlash(__('The locomotive has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The locomotive could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Locomotive->read(null, $id);
		}
		$archivedTransportations = $this->Locomotive->ArchivedTransportation->find('list');
		$trains = $this->Locomotive->Train->find('list');
		$this->set(compact('archivedTransportations', 'trains'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for locomotive', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Locomotive->delete($id)) {
			$this->Session->setFlash(__('Locomotive deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Locomotive was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>