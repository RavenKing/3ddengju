<?php
/* StorePic Fixture generated on: 2011-09-11 08:50:37 : 1315731037 */
class StorePicFixture extends CakeTestFixture {
	var $name = 'StorePic';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'store_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'position_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'src' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk1' => array('column' => 'store_id', 'unique' => 0), 'fk2' => array('column' => 'position_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'store_id' => 1,
			'position_id' => 1,
			'src' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-09-11 08:50:37',
			'modified' => '2011-09-11 08:50:37'
		),
	);
}
