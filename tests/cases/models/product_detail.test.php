<?php
/* ProductDetail Test cases generated on: 2011-09-11 08:49:58 : 1315730998*/
App::import('Model', 'ProductDetail');

class ProductDetailTestCase extends CakeTestCase {
	var $fixtures = array('app.product_detail', 'app.product_category', 'app.product_category_detail', 'app.product');

	function startTest() {
		$this->ProductDetail =& ClassRegistry::init('ProductDetail');
	}

	function endTest() {
		unset($this->ProductDetail);
		ClassRegistry::flush();
	}

}
