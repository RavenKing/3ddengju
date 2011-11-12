<?php
class Position extends AppModel {
	var $name = 'Position';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'ProductPic' => array(
			'className' => 'ProductPic',
			'foreignKey' => 'position_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'StorePic' => array(
			'className' => 'StorePic',
			'foreignKey' => 'position_id',
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

}
