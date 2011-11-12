<?php
/* Market Test cases generated on: 2011-09-11 08:52:40 : 1315731160*/
App::import('Model', 'Market');

class MarketTestCase extends CakeTestCase {
	var $fixtures = array('app.market', 'app.store');

	function startTest() {
		$this->Market =& ClassRegistry::init('Market');
	}

	function endTest() {
		unset($this->Market);
		ClassRegistry::flush();
	}

}
