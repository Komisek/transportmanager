<?php
/* WagonSeries Fixture generated on: 2010-12-18 17:12:20 : 1292690180 */
class WagonSeriesFixture extends CakeTestFixture {
	var $name = 'WagonSeries';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'brzdici_vaha' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cislo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'delka' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'oznaceni' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'pocet_naprav' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rozvor' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rucni_brzda' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'unosnost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'vyska_nad_temenem_kolejnice' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'vzdalenost_os' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'brzdici_vaha' => 1,
			'cislo' => 1,
			'delka' => 1,
			'oznaceni' => 'Lorem ipsum dolor sit amet',
			'pocet_naprav' => 1,
			'rozvor' => 1,
			'rucni_brzda' => 'Lorem ipsum dolor sit amet',
			'unosnost' => 1,
			'vyska_nad_temenem_kolejnice' => 1,
			'vzdalenost_os' => 1
		),
	);
}
?>