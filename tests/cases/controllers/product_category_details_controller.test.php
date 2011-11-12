<?php
/* ProductCategoryDetails Test cases generated on: 2011-09-11 08:49:52 : 1315730992*/
App::import('Controller', 'ProductCategoryDetails');

class TestProductCategoryDetailsController extends ProductCategoryDetailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductCategoryDetailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.product_category_detail', 'app.product', 'app.product_detail');

	function startTest() {
		$this->ProductCategoryDetails =& new TestProductCategoryDetailsController();
		$this->ProductCategoryDetails->constructClasses();
	}

	function endTest() {
		unset($this->ProductCategoryDetails);
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
