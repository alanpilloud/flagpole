<?php
/**
 * Class SampleTest
 *
 * @package feature-flags
 */

/**
 * Sample test case.
 */
class TestClassFlag extends WP_UnitTestCase {

	/**
	 * @covers \Flagpole\Flag;
	 */
	public function test_construct() {
		$this->assertFalse( true );
	}

	/**
	 * @covers \Flagpole\Flag::get_key
	 */
	public function test_get_key() {
		$this->assertFalse( true );
	}

	/**
	 * @covers \Flagpole\Flag::get_name
	 */
	public function test_get_name() {
		$this->assertFalse( true );
	}

	/**
	 * @covers \Flagpole\Flag::get_description
	 */
	public function test_get_description() {
		$this->assertFalse( true );
	}

	/**
	 * @covers \Flagpole\Flag::is_stable
	 */
	public function test_is_stable() {
		$this->assertFalse( true );
	}

	/**
	 * @covers \Flagpole\Flag::get_enforced
	 */
	public function test_get_enforced() {
		$this->assertFalse( true );
	}
}
