<?php
/* Product Fixture generated on: 2011-09-11 08:50:17 : 1315731017 */
class ProductFixture extends CakeTestFixture {
	var $name = 'Product';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'product_name' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'product_size' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'product_power' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'product_voltage' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'product_bulbnumber' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'volumn' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'is_established' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'store_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'spiece_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk1' => array('column' => 'store_id', 'unique' => 0), 'fk2' => array('column' => 'spiece_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'product_name' => 'Lorem ipsum dolor sit amet',
			'product_size' => 'Lorem ipsum dolor sit amet',
			'product_power' => 'Lorem ipsum dolor sit amet',
			'product_voltage' => 'Lorem ipsum dolor sit amet',
			'product_bulbnumber' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-11 08:50:17',
			'modified' => '2011-09-11 08:50:17',
			'volumn' => 1,
			'is_established' => 1,
			'store_id' => 1,
			'spiece_id' => 1
		),
	);
}
