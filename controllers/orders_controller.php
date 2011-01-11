<?php

class OrdersController extends AppController {

	var $name = 'Orders';
        var $uses = array('Train', 'Route', 'ArchivedTransportation');

        function index() {
		$this->Train->recursive = 0;
		$this->set('trains', $this->paginate());

                $this->Route->recursive = 0;
		$this->set('routes', $this->paginate());

	}

        function schvaleni($id = null) {
                if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->Train->query('update trains set stav_rezervace="Čeká se na schválení" where id='.$id);
                $this->Session->setFlash(__('Objednávka odeslána k MI', true));
		$this->redirect(array('action'=>'index'));
		
        }

 /*       function archiv($id = null) {
                if (!$id) {
			$this->Session->setFlash(__('Invalid train', true));
			$this->redirect(array('action' => 'index'));
		}
                $this->ArchivedTransportation->create();
                $this->ArchivedTransportation->save(array(''));
                $this->Train->query('insert into archived_transportations_cargo_wagons (cargo_wagon_id, archived_transportation_id) selec ');

        }*/
}
?>
