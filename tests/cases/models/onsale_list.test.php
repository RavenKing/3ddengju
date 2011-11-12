<?php
/* OnsaleList Test cases generated on: 2011-09-15 14:03:26 : 1316095406*/
App::import('Model', 'OnsaleList');

class OnsaleListTestCase extends CakeTestCase {
	var $fixtures = array('app.onsale_list', 'app.product', 'app.store', 'app.market', 'app.user', 'app.group', 'app.advertisement_pic', 'app.notice', 'app.spiece', 'app.users_spiece', 'app.comment', 'app.store_pic', 'app.position', 'app.product_pic', 'app.latest_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head');

	function startTest() {
		$this->OnsaleList =& ClassRegistry::init('OnsaleList');
	}

	function endTest() {
		unset($this->OnsaleList);
		ClassRegistry::flush();
	}

}
