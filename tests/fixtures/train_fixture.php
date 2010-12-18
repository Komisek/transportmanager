<?php
/* Train Fixture generated on: 2010-12-18 17:12:39 : 1292690199 */
class TrainFixture extends CakeTestFixture {
	var $name = 'Train';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'id_route' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_locomotive' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_engine_driver' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'stav_rezervace' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'id_route' => 1,
			'id_locomotive' => 1,
			'id_engine_driver' => 1,
			'stav_rezervace' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>