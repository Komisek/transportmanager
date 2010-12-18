<?php
/* ArchivedTransportationsEmploye Fixture generated on: 2010-12-18 16:12:08 : 1292687828 */
class ArchivedTransportationsEmployeFixture extends CakeTestFixture {
	var $name = 'ArchivedTransportationsEmploye';

	var $fields = array(
		'id_employe' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_achived_transportation' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_employe' => 1,
			'id_achived_transportation' => 1
		),
	);
}
?>