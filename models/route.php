<?php
class Route extends AppModel {
	var $name = 'Route';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Periodicity' => array(
			'className' => 'Periodicity',
			'foreignKey' => 'periodicity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Train' => array(
			'className' => 'Train',
			'foreignKey' => 'train_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Path' => array(
			'className' => 'Path',
			'foreignKey' => 'path_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StartStation' => array(
			'className' => 'Station',
			'foreignKey' => 'start_station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EndStation' => array(
			'className' => 'Station',
			'foreignKey' => 'end_station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>