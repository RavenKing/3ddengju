<?php
/* AdvertisementPic Fixture generated on: 2011-09-11 08:51:54 : 1315731114 */
class AdvertisementPicFixture extends CakeTestFixture {
	var $name = 'AdvertisementPic';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'src' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'is_selected' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'src' => 'Lorem ipsum dolor sit amet',
			'is_selected' => 1,
			'created' => '2011-09-11 08:51:54',
			'modified' => '2011-09-11 08:51:54',
			'user_id' => 1
		),
	);
}
