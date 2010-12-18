<?php
/* Station Test cases generated on: 2010-12-18 17:12:31 : 1292691091*/
App::import('Model', 'Station');

class StationTestCase extends CakeTestCase {
	var $fixtures = array('app.station', 'app.path', 'app.near_station', 'app.route');

	function startTest() {
		$this->Station =& ClassRegistry::init('Station');
	}

	function endTest() {
		unset($this->Station);
		ClassRegistry::flush();
	}

}
?>