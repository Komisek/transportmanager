<?php
class Employee extends AppModel {
	var $name = 'Employee';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
<<<<<<< HEAD:models/employe.php
        var $belongsTo = array(
                'Role' => array(
                    'className' => 'Role',
                    'foreginKey' => 'role_id'
                )
        );
=======

        var $belongsTo = array(
                'Role' => array(
                        'className' => 'Role'
                )
        );

>>>>>>> 7e4f744a08f165570b8cbbf5143f0362bf0887d7:models/employee.php
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