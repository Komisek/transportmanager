<?php
/* Locomotive Fixture generated on: 2010-12-18 17:12:34 : 1292689954 */
class LocomotiveFixture extends CakeTestFixture {
	var $name = 'Locomotive';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'brzda_parkovaci_druh' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'brzda_primocara_druh' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'brzda_rucni_druh' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'brzda_tahova_druh' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'brzdici_vaha' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cislo_prukazu_zpusobnosti' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'delka_pres_narazniky' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'dvojkoli_revize' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'dvojkoli_velikost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'dvojkoli_vyrobce' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'hmotnost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'inventarni_cislo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'klimatizace' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'km_revize_celkova' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'km_revize_dvojkoli' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'km_revize_provozni' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'komunikacni_zarizeni' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'maximalni_rychlost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'motor_typ' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'oprava_napln' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'oprava_probihajici' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'oznaceni' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'provozni_cislo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rada' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'rok_vyroby' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rychlomer_cislo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'rychlomer_typ' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'vykon' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'vyrobce' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'vyrobni_cislo' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'brzda_parkovaci_druh' => 'Lorem ipsum dolor sit amet',
			'brzda_primocara_druh' => 'Lorem ipsum dolor sit amet',
			'brzda_rucni_druh' => 'Lorem ipsum dolor sit amet',
			'brzda_tahova_druh' => 'Lorem ipsum dolor sit amet',
			'brzdici_vaha' => 1,
			'cislo_prukazu_zpusobnosti' => 'Lorem ipsum dolor sit amet',
			'delka_pres_narazniky' => 1,
			'dvojkoli_revize' => 1,
			'dvojkoli_velikost' => 1,
			'dvojkoli_vyrobce' => 'Lorem ipsum dolor sit amet',
			'hmotnost' => 1,
			'inventarni_cislo' => 1,
			'klimatizace' => 'Lorem ipsum dolor sit amet',
			'km_revize_celkova' => 1,
			'km_revize_dvojkoli' => 1,
			'km_revize_provozni' => 1,
			'komunikacni_zarizeni' => 'Lorem ipsum dolor sit amet',
			'maximalni_rychlost' => 1,
			'motor_typ' => 'Lorem ipsum dolor sit amet',
			'oprava_napln' => 'Lorem ipsum dolor sit amet',
			'oprava_probihajici' => 'Lorem ipsum dolor sit amet',
			'oznaceni' => 'Lorem ipsum dolor sit amet',
			'provozni_cislo' => 1,
			'rada' => 'Lorem ipsum dolor sit amet',
			'rok_vyroby' => 1,
			'rychlomer_cislo' => 1,
			'rychlomer_typ' => 'Lorem ipsum dolor sit amet',
			'vykon' => 1,
			'vyrobce' => 'Lorem ipsum dolor sit amet',
			'vyrobni_cislo' => 1
		),
	);
}
?>