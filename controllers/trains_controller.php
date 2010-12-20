<?php
class TrainsController extends AppController {

	var $name = 'Trains';

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
		$employees = $this->Train->Employee->find('list');
		$locomotives = $this->Train->Locomotive->find('list');
		$this->set(compact('routes', 'cargoWagons', 'employees', 'locomotives'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Train->save($this->data)) {
				$this->Session->setFlash(__('The train has been saved', true));
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
		$employees = $this->Train->Employee->find('list');
		$locomotives = $this->Train->Locomotive->find('list');
		$this->set(compact('routes', 'cargoWagons', 'employees', 'locomotives'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for train', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Train->delete($id)) {
			$this->Session->setFlash(__('Train deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Train was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>