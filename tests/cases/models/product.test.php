<?php
/* Product Test cases generated on: 2011-09-11 08:50:17 : 1315731017*/
App::import('Model', 'Product');

class ProductTestCase extends CakeTestCase {
	var $fixtures = array('app.product', 'app.store', 'app.spiece', 'app.user', 'app.users_spiece', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic');

	function startTest() {
		$this->Product =& ClassRegistry::init('Product');
	}

	function endTest() {
		unset($this->Product);
		ClassRegistry::flush();
	}

}
