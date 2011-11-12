<?php
/* UsersSpiece Fixture generated on: 2011-09-11 08:53:41 : 1315731221 */
class UsersSpieceFixture extends CakeTestFixture {
	var $name = 'UsersSpiece';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'spiece_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk1' => array('column' => 'user_id', 'unique' => 0), 'fk2' => array('column' => 'spiece_id', 'unique' => 0)),
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
