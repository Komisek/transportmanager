<?php
/* Path Fixture generated on: 2010-12-18 18:12:21 : 1292691981 */
class PathFixture extends CakeTestFixture {
	var $name = 'Path';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'station_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'next_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'station_id' => 1,
			'next_id' => 1,
			'lft' => 1,
			'rght' => 1
		),
	);
}
?>