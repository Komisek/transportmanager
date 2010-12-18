<?php
class WagonSeriesController extends AppController {

	var $name = 'WagonSeries';

	function index() {
		$this->WagonSeries->recursive = 0;
		$this->set('wagonSeries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid wagon series', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('wagonSeries', $this->WagonSeries->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->WagonSeries->create();
			if ($this->WagonSeries->save($this->data)) {
				$this->Session->setFlash(__('The wagon series has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wagon series could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid wagon series', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->WagonSeries->save($this->data)) {
				$this->Session->setFlash(__('The wagon series has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wagon series could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WagonSeries->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for wagon series', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WagonSeries->delete($id)) {
			$this->Session->setFlash(__('Wagon series deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Wagon series was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>