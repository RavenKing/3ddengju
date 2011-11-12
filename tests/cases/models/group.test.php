<?php
/* Group Test cases generated on: 2011-09-11 08:50:31 : 1315731031*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.user', 'app.store', 'app.advertisement_pic', 'app.notice', 'app.spiece', 'app.product', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic', 'app.users_spiece');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

}
