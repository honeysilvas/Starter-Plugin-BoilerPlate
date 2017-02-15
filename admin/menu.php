<?php
/*
	Admin menu
*/

// Add menu to admin dashboard
add_action( "admin_menu", "shm_starter_plugin_boilerplate_menu" );

// Add the menu item to admin dashboard.
if ( !function_exists( "shm_starter_plugin_boilerplate_menu" )){
	function shm_starter_plugin_boilerplate_menu(){	
		add_menu_page( "Starter Plugin", "Starter Plugin Menu", "manage_options", "shm_starter_plugin_boilerplate_menu", "shm_starter_page" );
	}
}

// Custom function
if ( !function_exists( "shm_starter_page" )){
	function shm_starter_page(){
		// Place your custom code here.
		echo "<p>Hello, world!</p>";
	}
}
