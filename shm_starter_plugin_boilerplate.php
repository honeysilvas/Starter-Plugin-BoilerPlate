<?php
	/*
		Plugin Name:  Starter Plugin BoilerPlate
		Plugin URI:  http://silverhoneymedia.com
		Description:  This is a starter plugin boilerplate to help you easily create a new WordPress plugin.
		Version:  0.0.1
		Author:  Honey Silvas
		Author URI:  http://honeysilvas.wordpress.com
		License: GPL2
 
		Copyright 2017 Honey Silvas (honeysilvas@gmail.com)
 
		bbPress Merge Imported Users is free software: you can redistribute it and/or modify 
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 2 of the License, or
		any later version.
 
		Chocolate Alphabetical Sorting is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
		GNU General Public License for more details.
 
		You should have received a copy of the GNU General Public License
		along with Chocolate Alphabetical Sorting. If not, write to the Free Software
		Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// Check if we are in the admin dashboard.
if ( is_admin() ){
	require_once( "admin/menu.php" );	
}