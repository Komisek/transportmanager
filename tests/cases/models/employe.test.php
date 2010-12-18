<?php
/* Employe Test cases generated on: 2010-12-18 17:12:44 : 1292689844*/
App::import('Model', 'Employe');

class EmployeTestCase extends CakeTestCase {
	var $fixtures = array('app.employe', 'app.archived_transportation', 'app.archived_transportations_employe', 'app.train', 'app.employes_train');

	function startTest() {
		$this->Employe =& ClassRegistry::init('Employe');
	}

	function endTest() {
		unset($this->Employe);
		ClassRegistry::flush();
	}

}
?>