<?php
/* Position Test cases generated on: 2011-09-11 08:50:44 : 1315731044*/
App::import('Model', 'Position');

class PositionTestCase extends CakeTestCase {
	var $fixtures = array('app.position', 'app.product_pic', 'app.store_pic', 'app.store');

	function startTest() {
		$this->Position =& ClassRegistry::init('Position');
	}

	function endTest() {
		unset($this->Position);
		ClassRegistry::flush();
	}

}
