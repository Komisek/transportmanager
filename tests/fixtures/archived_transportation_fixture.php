<?php
/* ArchivedTransportation Fixture generated on: 2010-12-18 17:12:46 : 1292689726 */
class ArchivedTransportationFixture extends CakeTestFixture {
	var $name = 'ArchivedTransportation';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'id_path' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_locomotive' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_engine_driver' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_start_station' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_end_station' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'datum_cas' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'id_path' => 1,
			'id_locomotive' => 1,
			'id_engine_driver' => 1,
			'id_start_station' => 1,
			'id_end_station' => 1,
			'datum_cas' => '2010-12-18 17:28:46'
		),
	);
}
?>