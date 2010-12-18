<?php
/* CargoWagon Fixture generated on: 2010-12-18 17:12:05 : 1292689385 */
class CargoWagonFixture extends CakeTestFixture {
	var $name = 'CargoWagon';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'wagon_series_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cislo_him' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cislo_vozu' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'druh_brzdeni' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'druh_brzdoveho_valce' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'dvojkoli_revize' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'dvojkoli_typ' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'dvojkoli_velikost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'dvojkoli_vyrobce' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'oprava_typ' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'pruznice' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'rada' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'rezim_vozu' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'roky_revize_dvojkoli_bez_zvednuti_skrine' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'roky_revize_kotle' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'roky_revize_vozu' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rozvadec' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'rucni_brzda' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'rychlost_km' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'vlastni_hmotnost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'zdrze' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'wagon_series_id' => 1,
			'cislo_him' => 1,
			'cislo_vozu' => 1,
			'druh_brzdeni' => 'Lorem ipsum dolor sit amet',
			'druh_brzdoveho_valce' => 'Lorem ipsum dolor sit amet',
			'dvojkoli_revize' => 1,
			'dvojkoli_typ' => 'Lorem ipsum dolor sit amet',
			'dvojkoli_velikost' => 1,
			'dvojkoli_vyrobce' => 'Lorem ipsum dolor sit amet',
			'oprava_typ' => 'Lorem ipsum dolor sit amet',
			'pruznice' => 'Lorem ipsum dolor sit amet',
			'rada' => 'Lorem ipsum dolor sit amet',
			'rezim_vozu' => 1,
			'roky_revize_dvojkoli_bez_zvednuti_skrine' => 1,
			'roky_revize_kotle' => 1,
			'roky_revize_vozu' => 1,
			'rozvadec' => 'Lorem ipsum dolor sit amet',
			'rucni_brzda' => 'Lorem ipsum dolor sit amet',
			'rychlost_km' => 1,
			'vlastni_hmotnost' => 1,
			'zdrze' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>