<?php // (C) Copyright Bobbing Wide 2016
/**
 * @group allow-reinstalls
 */
class Tests_allow_reinstalls extends BW_UnitTestCase {

	/**
	 * Confirm which hook will be invoked
	 * 
	 * In the absence of a function to confirm that the filter has been added
	 * we just check that the filter function exists.
	 * If it doesn't then it probably means the plugin is not activated.
	 *
	 */
	function test_allow_reinstalls_hooked_in() {
		$this->assertTrue( function_exists( "allow_reinstalls_upgrader_package_options" ) );
	}

	function test_upgrader_package_options() {
		$options = array();
		$options['abort_if_destination_exists'] = true;
		$options = apply_filters( "upgrader_package_options", $options );
		$this->assertFalse( $options['abort_if_destination_exists'] );
	}
}

