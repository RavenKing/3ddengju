<?php
/* StorePics Test cases generated on: 2011-09-11 08:50:37 : 1315731037*/
App::import('Controller', 'StorePics');

class TestStorePicsController extends StorePicsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StorePicsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.store_pic', 'app.store', 'app.position');

	function startTest() {
		$this->StorePics =& new TestStorePicsController();
		$this->StorePics->constructClasses();
	}

	function endTest() {
		unset($this->StorePics);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
