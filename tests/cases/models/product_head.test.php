<?php
/* ProductHead Test cases generated on: 2011-09-11 08:52:51 : 1315731171*/
App::import('Model', 'ProductHead');

class ProductHeadTestCase extends CakeTestCase {
	var $fixtures = array('app.product_head', 'app.product', 'app.store', 'app.spiece', 'app.user', 'app.group', 'app.advertisement_pic', 'app.notice', 'app.users_spiece', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_pic', 'app.position', 'app.store_pic');

	function startTest() {
		$this->ProductHead =& ClassRegistry::init('ProductHead');
	}

	function endTest() {
		unset($this->ProductHead);
		ClassRegistry::flush();
	}

}
