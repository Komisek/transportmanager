<?php
/* EmployesTrain Test cases generated on: 2010-12-18 16:12:10 : 1292687830*/
App::import('Model', 'EmployesTrain');

class EmployesTrainTestCase extends CakeTestCase {
	var $fixtures = array('app.employes_train');

	function startTest() {
		$this->EmployesTrain =& ClassRegistry::init('EmployesTrain');
	}

	function endTest() {
		unset($this->EmployesTrain);
		ClassRegistry::flush();
	}

}
?>