<?php
class UsersSpiece extends AppModel {
	var $name = 'UsersSpiece';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Spiece' => array(
			'className' => 'Spiece',
			'foreignKey' => 'spiece_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
