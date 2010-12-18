<?php
/* CargoWagonsTrain Test cases generated on: 2010-12-18 16:12:09 : 1292687829*/
App::import('Model', 'CargoWagonsTrain');

class CargoWagonsTrainTestCase extends CakeTestCase {
	var $fixtures = array('app.cargo_wagons_train');

	function startTest() {
		$this->CargoWagonsTrain =& ClassRegistry::init('CargoWagonsTrain');
	}

	function endTest() {
		unset($this->CargoWagonsTrain);
		ClassRegistry::flush();
	}

}
?>