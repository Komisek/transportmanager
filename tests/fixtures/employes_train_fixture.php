<?php
/* EmployesTrain Fixture generated on: 2010-12-18 16:12:10 : 1292687830 */
class EmployesTrainFixture extends CakeTestFixture {
	var $name = 'EmployesTrain';

	var $fields = array(
		'id_employe' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'id_train' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id_employe' => 1,
			'id_train' => 1
		),
	);
}
?>