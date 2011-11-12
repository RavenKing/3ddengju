<?php
/* ProductPics Test cases generated on: 2011-09-11 08:50:57 : 1315731057*/
App::import('Controller', 'ProductPics');

class TestProductPicsController extends ProductPicsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductPicsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.product_pic', 'app.product', 'app.store', 'app.spiece', 'app.user', 'app.group', 'app.advertisement_pic', 'app.notice', 'app.users_spiece', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.position', 'app.store_pic');

	function startTest() {
		$this->ProductPics =& new TestProductPicsController();
		$this->ProductPics->constructClasses();
	}

	function endTest() {
		unset($this->ProductPics);
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
