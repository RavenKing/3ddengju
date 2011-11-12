<?php
class Market extends AppModel {
	var $name = 'Market';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Store' => array(
			'className' => 'Store',
			'foreignKey' => 'market_id',
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
