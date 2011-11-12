<?php
/* ProductDetails Test cases generated on: 2011-09-11 08:49:59 : 1315730999*/
App::import('Controller', 'ProductDetails');

class TestProductDetailsController extends ProductDetailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductDetailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.product_detail', 'app.product_category', 'app.product_category_detail', 'app.product');

	function startTest() {
		$this->ProductDetails =& new TestProductDetailsController();
		$this->ProductDetails->constructClasses();
	}

	function endTest() {
		unset($this->ProductDetails);
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
