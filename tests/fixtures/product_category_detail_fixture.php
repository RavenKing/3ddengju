<?php
/* ProductCategoryDetail Fixture generated on: 2011-09-11 08:49:51 : 1315730991 */
class ProductCategoryDetailFixture extends CakeTestFixture {
	var $name = 'ProductCategoryDetail';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'product_detail_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk1' => array('column' => 'product_id', 'unique' => 0), 'fk2' => array('column' => 'product_detail_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'product_id' => 1,
			'product_detail_id' => 1
		),
	);
}
