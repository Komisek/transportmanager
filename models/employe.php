<?php
class Employe extends AppModel {
	var $name = 'Employe';
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
			'joinTable' => 'archived_transportations_employes',
			'foreignKey' => 'employe_id',
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
			'joinTable' => 'employes_trains',
			'foreignKey' => 'employe_id',
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