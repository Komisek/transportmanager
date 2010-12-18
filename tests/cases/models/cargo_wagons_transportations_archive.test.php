<?php
/* CargoWagonsTransportationsArchive Test cases generated on: 2010-12-18 16:12:09 : 1292687829*/
App::import('Model', 'CargoWagonsTransportationsArchive');

class CargoWagonsTransportationsArchiveTestCase extends CakeTestCase {
	var $fixtures = array('app.cargo_wagons_transportations_archive');

	function startTest() {
		$this->CargoWagonsTransportationsArchive =& ClassRegistry::init('CargoWagonsTransportationsArchive');
	}

	function endTest() {
		unset($this->CargoWagonsTransportationsArchive);
		ClassRegistry::flush();
	}

}
?>