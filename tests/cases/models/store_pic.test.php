<?php
/* StorePic Test cases generated on: 2011-09-11 08:50:37 : 1315731037*/
App::import('Model', 'StorePic');

class StorePicTestCase extends CakeTestCase {
	var $fixtures = array('app.store_pic', 'app.store', 'app.position');

	function startTest() {
		$this->StorePic =& ClassRegistry::init('StorePic');
	}

	function endTest() {
		unset($this->StorePic);
		ClassRegistry::flush();
	}

}
