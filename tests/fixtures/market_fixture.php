<?php
/* Market Fixture generated on: 2011-09-11 08:52:40 : 1315731160 */
class MarketFixture extends CakeTestFixture {
	var $name = 'Market';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'market_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'market_name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
