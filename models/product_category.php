<?php
class ProductCategory extends AppModel {
	var $name = 'ProductCategory';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'ProductDetail' => array(
			'className' => 'ProductDetail',
			'foreignKey' => 'product_category_id',
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
