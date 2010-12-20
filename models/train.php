<?php
class Train extends AppModel {
	var $name = 'Train';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'route_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);

	var $hasMany = array(
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'train_id',
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


	var $hasAndBelongsToMany = array(
		'CargoWagon' => array(
			'className' => 'CargoWagon',
			'joinTable' => 'cargo_wagons_trains',
			'foreignKey' => 'train_id',
			'associationForeignKey' => 'cargo_wagon_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Employee' => array(
			'className' => 'Employee',
			'joinTable' => 'employees_trains',
			'foreignKey' => 'train_id',
			'associationForeignKey' => 'employee_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Locomotive' => array(
			'className' => 'Locomotive',
			'joinTable' => 'locomotives_trains',
			'foreignKey' => 'train_id',
			'associationForeignKey' => 'locomotive_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>