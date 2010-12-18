<?php
class WagonSeries extends AppModel {
	var $name = 'WagonSeries';
	var $displayField = 'oznaceni';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'CargoWagon' => array(
			'className' => 'CargoWagon',
			'foreignKey' => 'wagon_series_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>