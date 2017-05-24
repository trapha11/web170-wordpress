<?php 

/*

Theme Name: Wordpress Spring 2017 Section 02 Demo
Author: Trang Pham  
Author URI: http://tidbitwebdesign.com
Description: This is the demo theme for the WEB170 section 02 class foor Spring 2017 Quarter.
Version: 1.0

*/

//register Navigation Menu
register_nav_menus(array('main-menu' => __('Main Menu tada!'))); //slug pass through 

// add Support for Post Thumbnails & Featured Images
add_theme_support('post_thumbnaile');
?>
