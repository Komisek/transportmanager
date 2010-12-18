<?php
class StationsController extends AppController {

	var $name = 'Stations';

	function index() {
		$this->Station->recursive = 0;
		$this->set('stations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid station', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('station', $this->Station->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Station->create();
			if ($this->Station->save($this->data)) {
				$this->Session->setFlash(__('The station has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid station', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Station->save($this->data)) {
				$this->Session->setFlash(__('The station has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The station could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Station->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for station', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Station->delete($id)) {
			$this->Session->setFlash(__('Station deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Station was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>