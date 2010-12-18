<?php
/* NearStation Fixture generated on: 2010-12-18 18:12:47 : 1292692187 */
class NearStationFixture extends CakeTestFixture {
	var $name = 'NearStation';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'station_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'next_station_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'vzdalenost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'station_id' => 1,
			'next_station_id' => 1,
			'vzdalenost' => 1
		),
	);
}
?>