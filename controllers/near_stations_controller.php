<?php
class NearStationsController extends AppController {

	var $name = 'NearStations';

	function index() {
		$this->NearStation->recursive = 0;
		$this->set('nearStations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid near station', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nearStation', $this->NearStation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->NearStation->create();
			if ($this->NearStation->save($this->data)) {
				$this->Session->setFlash(__('The near station has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The near station could not be saved. Please, try again.', true));
			}
		}
		$stations = $this->NearStation->Station->find('list');
		$nextStations = $this->NearStation->Station->find('list');
		$this->set(compact('stations', 'nextStations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid near station', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->NearStation->save($this->data)) {
				$this->Session->setFlash(__('The near station has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The near station could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->NearStation->read(null, $id);
		}
		$stations = $this->NearStation->Station->find('list');
		$nextStations = $this->NearStation->NextStation->find('list');
		$this->set(compact('stations', 'nextStations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for near station', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->NearStation->delete($id)) {
			$this->Session->setFlash(__('Near station deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Near station was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>