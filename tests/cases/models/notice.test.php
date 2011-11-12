<?php
/* Notice Test cases generated on: 2011-09-15 02:30:44 : 1316053844*/
App::import('Model', 'Notice');

class NoticeTestCase extends CakeTestCase {
	var $fixtures = array('app.notice', 'app.user', 'app.group', 'app.store', 'app.market', 'app.comment', 'app.product', 'app.spiece', 'app.users_spiece', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic', 'app.position', 'app.store_pic', 'app.advertisement_pic');

	function startTest() {
		$this->Notice =& ClassRegistry::init('Notice');
	}

	function endTest() {
		unset($this->Notice);
		ClassRegistry::flush();
	}

}
