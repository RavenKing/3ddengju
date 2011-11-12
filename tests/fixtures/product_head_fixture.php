<?php
/* ProductHead Fixture generated on: 2011-09-11 08:52:51 : 1315731171 */
class ProductHeadFixture extends CakeTestFixture {
	var $name = 'ProductHead';

	var $fields = array(
		'product_id' => array('type' => 'integer', 'null' => false, 'key' => 'index'),
		'src' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk1' => array('column' => 'product_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'product_id' => 1,
			'src' => 'Lorem ipsum dolor sit amet',
			'id' => 1
		),
	);
}
