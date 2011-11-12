<?php
/* Store Test cases generated on: 2011-09-11 08:55:48 : 1315731348*/
App::import('Model', 'Store');

class StoreTestCase extends CakeTestCase {
	var $fixtures = array('app.store', 'app.market', 'app.user', 'app.group', 'app.advertisement_pic', 'app.notice', 'app.spiece', 'app.product', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic', 'app.position', 'app.store_pic', 'app.users_spiece', 'app.comment');

	function startTest() {
		$this->Store =& ClassRegistry::init('Store');
	}

	function endTest() {
		unset($this->Store);
		ClassRegistry::flush();
	}

}
