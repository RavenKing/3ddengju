<?php
/* ProductHeads Test cases generated on: 2011-09-11 08:52:52 : 1315731172*/
App::import('Controller', 'ProductHeads');

class TestProductHeadsController extends ProductHeadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductHeadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.product_head', 'app.product', 'app.store', 'app.spiece', 'app.user', 'app.group', 'app.advertisement_pic', 'app.notice', 'app.users_spiece', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_pic', 'app.position', 'app.store_pic');

	function startTest() {
		$this->ProductHeads =& new TestProductHeadsController();
		$this->ProductHeads->constructClasses();
	}

	function endTest() {
		unset($this->ProductHeads);
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
