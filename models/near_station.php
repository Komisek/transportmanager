<?php
class NearStation extends AppModel {
	var $name = 'NearStation';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'next_station' => array(
			'className' => 'Station',
			'foreignKey' => 'next_station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>