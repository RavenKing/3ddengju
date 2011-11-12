<?php
/* Uslink Fixture generated on: 2011-09-14 06:50:35 : 1315983035 */
class UslinkFixture extends CakeTestFixture {
	var $name = 'Uslink';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'spiece_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'users' => array('column' => 'user_id', 'unique' => 0), 'spiec' => array('column' => 'spiece_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'spiece_id' => 1
		),
	);
}
