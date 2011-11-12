<?php
/* ProductCategory Test cases generated on: 2011-09-11 08:49:42 : 1315730982*/
App::import('Model', 'ProductCategory');

class ProductCategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.product_category', 'app.product_detail');

	function startTest() {
		$this->ProductCategory =& ClassRegistry::init('ProductCategory');
	}

	function endTest() {
		unset($this->ProductCategory);
		ClassRegistry::flush();
	}

}
