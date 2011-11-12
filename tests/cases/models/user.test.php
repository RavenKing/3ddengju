<?php
/* User Test cases generated on: 2011-09-11 08:50:25 : 1315731025*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.group', 'app.store', 'app.advertisement_pic', 'app.notice', 'app.spiece', 'app.product', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic', 'app.users_spiece');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
