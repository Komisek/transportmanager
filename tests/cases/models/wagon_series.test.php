<?php
/* WagonSeries Test cases generated on: 2010-12-18 17:12:31 : 1292688571*/
App::import('Model', 'WagonSeries');

class WagonSeriesTestCase extends CakeTestCase {
	var $fixtures = array('app.wagon_series', 'app.cargo_wagon');

	function startTest() {
		$this->WagonSeries =& ClassRegistry::init('WagonSeries');
	}

	function endTest() {
		unset($this->WagonSeries);
		ClassRegistry::flush();
	}

}
?>