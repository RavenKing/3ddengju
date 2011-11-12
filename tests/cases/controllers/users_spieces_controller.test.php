<?php
/* UsersSpieces Test cases generated on: 2011-09-11 08:53:41 : 1315731221*/
App::import('Controller', 'UsersSpieces');

class TestUsersSpiecesController extends UsersSpiecesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersSpiecesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.users_spiece', 'app.user', 'app.group', 'app.store', 'app.advertisement_pic', 'app.notice', 'app.spiece', 'app.product', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic', 'app.position', 'app.store_pic');

	function startTest() {
		$this->UsersSpieces =& new TestUsersSpiecesController();
		$this->UsersSpieces->constructClasses();
	}

	function endTest() {
		unset($this->UsersSpieces);
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
