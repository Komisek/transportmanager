<?php
class ArchivedTransportation extends AppModel {
	var $name = 'ArchivedTransportation';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Employe' => array(
			'className' => 'Employe',
			'joinTable' => 'archived_transportations_employes',
			'foreignKey' => 'archived_transportation_id',
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
		)
	);

}
?>