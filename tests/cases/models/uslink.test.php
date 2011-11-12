<?php
/* Uslink Test cases generated on: 2011-09-14 06:50:35 : 1315983035*/
App::import('Model', 'Uslink');

class UslinkTestCase extends CakeTestCase {
	var $fixtures = array('app.uslink', 'app.user', 'app.group', 'app.store', 'app.market', 'app.comment', 'app.product', 'app.spiece', 'app.users_spiece', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic', 'app.position', 'app.store_pic', 'app.advertisement_pic', 'app.notice');

	function startTest() {
		$this->Uslink =& ClassRegistry::init('Uslink');
	}

	function endTest() {
		unset($this->Uslink);
		ClassRegistry::flush();
	}

}
