<?php
class Employee extends AppModel {
	var $name = 'Employee';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

        var $belongsTo = array(
                'Role' => array(
                        'className' => 'Role'
                )
        );

	var $hasAndBelongsToMany = array(
		'ArchivedTransportation' => array(
			'className' => 'ArchivedTransportation',
			'joinTable' => 'archived_transportations_employees',
			'foreignKey' => 'employee_id',
			'associationForeignKey' => 'archived_transportation_id',
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
		'Train' => array(
			'className' => 'Train',
			'joinTable' => 'employees_trains',
			'foreignKey' => 'employee_id',
			'associationForeignKey' => 'train_id',
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