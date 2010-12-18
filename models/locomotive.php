<?php
class Locomotive extends AppModel {
	var $name = 'Locomotive';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'AchivedTransportation' => array(
			'className' => 'AchivedTransportation',
			'joinTable' => 'achived_transportation_locomotives',
			'foreignKey' => 'locomotive_id',
			'associationForeignKey' => 'achived_transportation_id',
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