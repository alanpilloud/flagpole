<?php

class WPFirstCest {
	public function _before( AcceptanceTester $I ) {
	}

	// tests
	public function tryToTest( AcceptanceTester $I ) {
		$I->seeOptionInDatabase([
			'option_name' => 'flagpole_flags'
		]);
	}
}
