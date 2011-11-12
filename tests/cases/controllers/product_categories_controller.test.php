<?php
/* ProductCategories Test cases generated on: 2011-09-11 08:49:43 : 1315730983*/
App::import('Controller', 'ProductCategories');

class TestProductCategoriesController extends ProductCategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductCategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.product_category', 'app.product_detail');

	function startTest() {
		$this->ProductCategories =& new TestProductCategoriesController();
		$this->ProductCategories->constructClasses();
	}

	function endTest() {
		unset($this->ProductCategories);
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
