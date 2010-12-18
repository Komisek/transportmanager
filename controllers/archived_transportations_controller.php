<?php
class ArchivedTransportationsController extends AppController {

	var $name = 'ArchivedTransportations';

	function index() {
		$this->ArchivedTransportation->recursive = 0;
		$this->set('archivedTransportations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid archived transportation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('archivedTransportation', $this->ArchivedTransportation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ArchivedTransportation->create();
			if ($this->ArchivedTransportation->save($this->data)) {
				$this->Session->setFlash(__('The archived transportation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The archived transportation could not be saved. Please, try again.', true));
			}
		}
		$employes = $this->ArchivedTransportation->Employe->find('list');
		$this->set(compact('employes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid archived transportation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ArchivedTransportation->save($this->data)) {
				$this->Session->setFlash(__('The archived transportation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The archived transportation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ArchivedTransportation->read(null, $id);
		}
		$employes = $this->ArchivedTransportation->Employe->find('list');
		$this->set(compact('employes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for archived transportation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ArchivedTransportation->delete($id)) {
			$this->Session->setFlash(__('Archived transportation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Archived transportation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>