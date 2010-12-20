<?php
class ArchivedTransportation extends AppModel {
	var $name = 'ArchivedTransportation';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
                'CargoWagon' => array(
			'className' => 'CargoWagon',
			'joinTable' => 'archived_transportations_cargo_wagons',
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
			'joinTable' => 'archived_transportations_employees',
			'foreignKey' => 'archived_transportation_id',
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
			'joinTable' => 'archived_transportations_locomotives',
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