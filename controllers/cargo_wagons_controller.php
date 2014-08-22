<?php
class CargoWagonsController extends AppController {

	var $name = 'CargoWagons';

	function index() {
		$this->CargoWagon->recursive = 0;
		$this->set('cargoWagons', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cargo wagon', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cargoWagon', $this->CargoWagon->read(null, $id));
                $this->loadModel('Route');
                $routes = $this->Route->find('all');
                $this->set(compact('routes'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CargoWagon->create();
			if ($this->CargoWagon->save($this->data)) {
				$this->Session->setFlash(__('The cargo wagon has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cargo wagon could not be saved. Please, try again.', true));
			}
		}
		$wagonSeries = $this->CargoWagon->WagonSeries->find('list');
		$trains = $this->CargoWagon->Train->find('list');
		$this->set(compact('wagonSeries', 'trains'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cargo wagon', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CargoWagon->save($this->data)) {
				$this->Session->setFlash(__('The cargo wagon has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cargo wagon could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CargoWagon->read(null, $id);
		}
		$wagonSeries = $this->CargoWagon->WagonSeries->find('list');
		$trains = $this->CargoWagon->Train->find('list');
		$this->set(compact('wagonSeries', 'trains'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cargo wagon', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CargoWagon->delete($id)) {
			$this->Session->setFlash(__('Cargo wagon deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cargo wagon was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>