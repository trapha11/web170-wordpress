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

//register Sidebars
register_sidebars(2, array(
    'before_widget' => '<div id=%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));

// add Support for Post Thumbnails & Featured Images
add_theme_support('post-thumbnails');

//Create Page Excerpts
add_post_type_support('page', 'excerpt');

//Create Custom Image Sizes
add_image_size('icon', 140, 140, true); // 140 pixels wide by 140 pixels tall, hard crop mode

function get_title_tag() {
    
    global $post; // IMPORTANT !!! VARIABLE SCOPE
    
    if (is_page() || is_single()) {
        
        echo get_the_title();
        
    } else { //404, search, etc
        
        bloginfo('description'); //tagline
        
    }
    
    if($post->post_parent){
        
        echo '| ';
        echo get_the_title($post->post_parent);
    }
    
    echo '| ';
    bloginfo('name');
    echo '| ';
    echo 'Seattle, WA';
}

?>
