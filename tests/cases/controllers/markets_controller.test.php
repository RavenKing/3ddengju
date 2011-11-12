<?php
/* Markets Test cases generated on: 2011-09-11 08:52:40 : 1315731160*/
App::import('Controller', 'Markets');

class TestMarketsController extends MarketsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MarketsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.market', 'app.store');

	function startTest() {
		$this->Markets =& new TestMarketsController();
		$this->Markets->constructClasses();
	}

	function endTest() {
		unset($this->Markets);
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
