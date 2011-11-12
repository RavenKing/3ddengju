<?php
/* Groups Test cases generated on: 2011-09-11 08:50:32 : 1315731032*/
App::import('Controller', 'Groups');

class TestGroupsController extends GroupsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GroupsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.user', 'app.store', 'app.advertisement_pic', 'app.notice', 'app.spiece', 'app.product', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic', 'app.users_spiece');

	function startTest() {
		$this->Groups =& new TestGroupsController();
		$this->Groups->constructClasses();
	}

	function endTest() {
		unset($this->Groups);
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
