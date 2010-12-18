<?php
/* ArchivedTransportationsEmploye Test cases generated on: 2010-12-18 16:12:08 : 1292687828*/
App::import('Model', 'ArchivedTransportationsEmploye');

class ArchivedTransportationsEmployeTestCase extends CakeTestCase {
	var $fixtures = array('app.archived_transportations_employe');

	function startTest() {
		$this->ArchivedTransportationsEmploye =& ClassRegistry::init('ArchivedTransportationsEmploye');
	}

	function endTest() {
		unset($this->ArchivedTransportationsEmploye);
		ClassRegistry::flush();
	}

}
?>