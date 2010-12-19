<?php
class Locomotive extends AppModel {
	var $name = 'Locomotive';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'ArchivedTransportation' => array(
			'className' => 'ArchivedTransportation',
			'joinTable' => 'archived_transportations_locomotives',
			'foreignKey' => 'locomotive_id',
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
			'joinTable' => 'locomotives_trains',
			'foreignKey' => 'locomotive_id',
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