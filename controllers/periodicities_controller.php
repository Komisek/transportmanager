<?php
class PeriodicitiesController extends AppController {

	var $name = 'Periodicities';

	function index() {
		$this->Periodicity->recursive = 0;
		$this->set('periodicities', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid periodicity', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('periodicity', $this->Periodicity->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Periodicity->create();
			if ($this->Periodicity->save($this->data)) {
				$this->Session->setFlash(__('The periodicity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The periodicity could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid periodicity', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Periodicity->save($this->data)) {
				$this->Session->setFlash(__('The periodicity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The periodicity could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Periodicity->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for periodicity', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Periodicity->delete($id)) {
			$this->Session->setFlash(__('Periodicity deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Periodicity was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>