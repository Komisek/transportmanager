<?php
class Path extends AppModel {
	var $name = 'Path';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Next' => array(
			'className' => 'Station',
			'foreignKey' => 'next_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentPath' => array(
			'className' => 'Path',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'ArchivedTransportation' => array(
			'className' => 'ArchivedTransportation',
			'foreignKey' => 'path_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ChildPath' => array(
			'className' => 'Path',
			'foreignKey' => 'parent_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'path_id',
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