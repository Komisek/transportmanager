<?php
class PathsController extends AppController {

	var $name = 'Paths';

	function index() {
		$this->Path->recursive = 0;
		$this->set('paths', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid path', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('path', $this->Path->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Path->create();
			if ($this->Path->save($this->data)) {
				$this->Session->setFlash(__('The path has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The path could not be saved. Please, try again.', true));
			}
		}
		$stations = $this->Path->Station->find('list');
		$this->set(compact('stations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid path', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Path->save($this->data)) {
				$this->Session->setFlash(__('The path has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The path could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Path->read(null, $id);
		}
		$stations = $this->Path->Station->find('list');
		$this->set(compact('stations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for path', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Path->delete($id)) {
			$this->Session->setFlash(__('Path deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Path was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>