<?php
/* ArchivedTransportation Test cases generated on: 2010-12-18 17:12:50 : 1292689730*/
App::import('Model', 'ArchivedTransportation');

class ArchivedTransportationTestCase extends CakeTestCase {
	var $fixtures = array('app.archived_transportation', 'app.employe', 'app.archived_transportations_employe');

	function startTest() {
		$this->ArchivedTransportation =& ClassRegistry::init('ArchivedTransportation');
	}

	function endTest() {
		unset($this->ArchivedTransportation);
		ClassRegistry::flush();
	}

}
?>