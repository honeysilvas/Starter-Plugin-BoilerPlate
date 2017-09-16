<?php
	/*
		Plugin Name:  Starter Plugin BoilerPlate
		Plugin URI:  http://silverhoneymedia.com
		Description:  This is a starter plugin boilerplate to help you easily create a new WordPress plugin.
		Version:  0.0.1
		Author:  Honey Silvas
		Author URI:  http://honeysilvas.wordpress.com
		License: GPL2
	*/

	// Check if we are in the admin dashboard.
		if ( is_admin() ){
			require_once( "admin/menu.php" );	
		}