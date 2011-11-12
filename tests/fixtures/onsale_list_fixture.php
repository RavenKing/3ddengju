<?php
/* OnsaleList Fixture generated on: 2011-09-15 14:03:25 : 1316095405 */
class OnsaleListFixture extends CakeTestFixture {
	var $name = 'OnsaleList';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => false, 'key' => 'index'),
		'is_established' => array('type' => 'integer', 'null' => false, 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk2' => array('column' => 'product_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'product_id' => 1,
			'is_established' => 1,
			'created' => '2011-09-15 14:03:25',
			'modified' => '2011-09-15 14:03:25'
		),
	);
}
