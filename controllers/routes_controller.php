<?php
class RoutesController extends AppController {

	var $name = 'Routes';

	function index() {
		$this->Route->recursive = 0;
		$this->set('routes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid route', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('route', $this->Route->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Route->create();
			if ($this->Route->save($this->data)) {
				$this->Session->setFlash(__('The route has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The route could not be saved. Please, try again.', true));
			}
		}
		$periodicities = $this->Route->Periodicity->find('list');
		$trains = $this->Route->Train->find('list');
		$paths = $this->Route->Path->find('list');
		$startStations = $this->Route->StartStation->find('list');
		$endStations = $this->Route->EndStation->find('list');
		$this->set(compact('periodicities', 'trains', 'paths', 'startStations', 'endStations'));
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