<?php
/* Route Fixture generated on: 2010-12-18 18:12:49 : 1292691829 */
class RouteFixture extends CakeTestFixture {
	var $name = 'Route';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'start_station_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'end_station_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'datum_cas' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'periodicity_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'train_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'path_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'stav_schvaleni' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'start_station_id' => 1,
			'end_station_id' => 1,
			'datum_cas' => '2010-12-18 18:03:49',
			'periodicity_id' => 1,
			'train_id' => 1,
			'path_id' => 1,
			'stav_schvaleni' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>