<?php
/* UsersSpiece Test cases generated on: 2011-09-11 08:53:41 : 1315731221*/
App::import('Model', 'UsersSpiece');

class UsersSpieceTestCase extends CakeTestCase {
	var $fixtures = array('app.users_spiece', 'app.user', 'app.group', 'app.store', 'app.advertisement_pic', 'app.notice', 'app.spiece', 'app.product', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic', 'app.position', 'app.store_pic');

	function startTest() {
		$this->UsersSpiece =& ClassRegistry::init('UsersSpiece');
	}

	function endTest() {
		unset($this->UsersSpiece);
		ClassRegistry::flush();
	}

}
