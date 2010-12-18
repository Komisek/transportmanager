<?php
/* AchivedTransportationLocomotive Test cases generated on: 2010-12-18 16:12:07 : 1292687827*/
App::import('Model', 'AchivedTransportationLocomotive');

class AchivedTransportationLocomotiveTestCase extends CakeTestCase {
	var $fixtures = array('app.achived_transportation_locomotive');

	function startTest() {
		$this->AchivedTransportationLocomotive =& ClassRegistry::init('AchivedTransportationLocomotive');
	}

	function endTest() {
		unset($this->AchivedTransportationLocomotive);
		ClassRegistry::flush();
	}

}
?>