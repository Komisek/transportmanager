<?php
/* Station Fixture generated on: 2010-12-18 17:12:30 : 1292691090 */
class StationFixture extends CakeTestFixture {
	var $name = 'Station';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'okres' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'kraj' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'cislo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'gps' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'okres' => 'Lorem ipsum dolor sit amet',
			'kraj' => 'Lorem ipsum dolor sit amet',
			'cislo' => 'Lorem ipsum dolor sit amet',
			'gps' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>