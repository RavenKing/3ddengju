<?php
/* AdvertisementPic Test cases generated on: 2011-09-11 08:51:55 : 1315731115*/
App::import('Model', 'AdvertisementPic');

class AdvertisementPicTestCase extends CakeTestCase {
	var $fixtures = array('app.advertisement_pic', 'app.user', 'app.group', 'app.store', 'app.notice', 'app.spiece', 'app.product', 'app.latest_list', 'app.onsale_list', 'app.product_category_detail', 'app.product_detail', 'app.product_category', 'app.product_head', 'app.product_pic', 'app.position', 'app.store_pic', 'app.users_spiece');

	function startTest() {
		$this->AdvertisementPic =& ClassRegistry::init('AdvertisementPic');
	}

	function endTest() {
		unset($this->AdvertisementPic);
		ClassRegistry::flush();
	}

}
