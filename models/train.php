<?php
class Train extends AppModel {
	var $name = 'Train';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

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
		'Employe' => array(
			'className' => 'Employe',
			'joinTable' => 'employes_trains',
			'foreignKey' => 'train_id',
			'associationForeignKey' => 'employe_id',
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