<?php // (C) Copyright Bobbing Wide 2016-2021, 2024
/**
 *
 */
class Tests_allow_reinstalls extends BW_UnitTestCase {
	
	function test_allow_reinstalls_plugin_active() {
		oik_require( 'admin/oik-activation.php', 'oik-batch' );
		$active = oik_plugin_is_plugin_activated( 'allow-reinstalls' );
		$this->assertTrue( $active, "Please activate allow-reinstalls to test." );
		
	}	
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
