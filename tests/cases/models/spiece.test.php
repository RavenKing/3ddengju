<?php
/* Spiece Test cases generated on: 2011-09-11 08:50:11 : 1315731011*/
App::import('Model', 'Spiece');

class SpieceTestCase extends CakeTestCase {
	var $fixtures = array('app.spiece', 'app.product', 'app.user', 'app.users_spiece');

	function startTest() {
		$this->Spiece =& ClassRegistry::init('Spiece');
	}

	function endTest() {
		unset($this->Spiece);
		ClassRegistry::flush();
	}

}
