<?php
/* ProductPic Test cases generated on: 2011-09-11 08:50:56 : 1315731056*/
App::import('Model', 'ProductPic');

class ProductPicTestCase extends CakeTestCase {
	var $fixtures = array('app.product_pic', 'app.product', 'app.store', 'app.spiece', 'app.user', 'app.group', 'app.advertisement_pic', 'app.notice', 'app.users_spiece', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.position', 'app.store_pic');

	function startTest() {
		$this->ProductPic =& ClassRegistry::init('ProductPic');
	}

	function endTest() {
		unset($this->ProductPic);
		ClassRegistry::flush();
	}

}
