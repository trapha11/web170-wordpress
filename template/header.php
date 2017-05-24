
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('description'); ?>| <?php bloginfo('name')?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
</head>

<body <?php body_class(''); ?>>
    <header>
        <div id="logo">
        <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
        </div><!--end logo-->
    </header>

   
<!-- Begin Static Nav  
    <nav>
        <span class="buger-toggle">&#8801;</span>
        <ul class="nav">
            <li><a href="home.html">HOME</a></li>
            <li><a href="main.html">ABOUT</a></li>
            <!--Start Dropdown Button
            <li class="button-dropdown">
                <a href="#" class="dropdown-toggle"><span class="arrow-toggle">▼</span></a>
                <!--Start Dropdown List
                <ul class="dropdown-menu">
                    <li><a href="#">FABRICS</a></li>
                    <li><a href="#">GOODS</a></li>
                    <li><a href="#">NEW ARRIVAL</a></li>
                    <li><a href="#">SALE</a></li>
                    <li><a href="#">GIFT CARDS</a></li>
                </ul><!--end Store dropdownlist
            </li><!--end Dropdown Button
            <li><a href="#" class="store">STORE</a></li>
            <li><a href="#">MAKE|DO|MEND</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="#">RESOURCES</a></li>
        </ul>
    </nav-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--MY OWN JS-->  
    <script src="<?php bloginfo('template_directory'); ?>/js/dropdown-menu.js"></script>
    
    <!--end static nav bar-->
    
    <!--Begin WP nav-->
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation',)); ?> 
    <!--End WP nav-->
    
    <!--Start WP Head Function-->
    <?php wp_head(); ?>
    <!--End WP Head Function-->