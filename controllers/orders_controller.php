<?php

class OrdersController extends AppController {

	var $name = 'Orders';
        var $uses = array('Train', 'Route');

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
                $stav = $this->Train->read();
                pr($stav);
                if($stav != 'Čeká se na schválení') {
                    $this->Session->setFlash(__('Tato objednávka již byla dříve podána', true));
                    $this->redirect(array('action'=>'index'));
                }
                else {
                $this->Train->query('update trains set stav_rezervace="Čeká se na schválení" where id='.$id);
                $this->Session->setFlash(__('Objednávka odeslána k MI', true));
		$this->redirect(array('action'=>'index'));
                }
		
        }
}
?>
