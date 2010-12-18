<?php
class CargoWagon extends AppModel {
	var $name = 'CargoWagon';
	var $displayField = 'cislo_vozu';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'WagonSeries' => array(
			'className' => 'WagonSeries',
			'foreignKey' => 'wagon_series_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Train' => array(
			'className' => 'Train',
			'joinTable' => 'cargo_wagons_trains',
			'foreignKey' => 'cargo_wagon_id',
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
		),
		'TransportationsArchive' => array(
			'className' => 'TransportationsArchive',
			'joinTable' => 'cargo_wagons_transportations_archives',
			'foreignKey' => 'cargo_wagon_id',
			'associationForeignKey' => 'transportations_archive_id',
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