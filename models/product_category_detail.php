<?php
class ProductCategoryDetail extends AppModel {
	var $name = 'ProductCategoryDetail';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ProductDetail' => array(
			'className' => 'ProductDetail',
			'foreignKey' => 'product_detail_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
