<?php
/* ProductCategoryDetail Test cases generated on: 2011-09-11 08:49:51 : 1315730991*/
App::import('Model', 'ProductCategoryDetail');

class ProductCategoryDetailTestCase extends CakeTestCase {
	var $fixtures = array('app.product_category_detail', 'app.product', 'app.product_detail');

	function startTest() {
		$this->ProductCategoryDetail =& ClassRegistry::init('ProductCategoryDetail');
	}

	function endTest() {
		unset($this->ProductCategoryDetail);
		ClassRegistry::flush();
	}

}
