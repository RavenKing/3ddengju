<?php
/* Spieces Test cases generated on: 2011-09-11 08:50:11 : 1315731011*/
App::import('Controller', 'Spieces');

class TestSpiecesController extends SpiecesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SpiecesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.spiece', 'app.product', 'app.user', 'app.users_spiece');

	function startTest() {
		$this->Spieces =& new TestSpiecesController();
		$this->Spieces->constructClasses();
	}

	function endTest() {
		unset($this->Spieces);
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
