<?php
/* CargoWagon Test cases generated on: 2010-12-18 16:12:08 : 1292687828*/
App::import('Model', 'CargoWagon');

class CargoWagonTestCase extends CakeTestCase {
	var $fixtures = array('app.cargo_wagon', 'app.wagon_series', 'app.train', 'app.cargo_wagons_train', 'app.transportations_archive', 'app.cargo_wagons_transportations_archive');

	function startTest() {
		$this->CargoWagon =& ClassRegistry::init('CargoWagon');
	}

	function endTest() {
		unset($this->CargoWagon);
		ClassRegistry::flush();
	}

}
?>