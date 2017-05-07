

<!---Start WP Head Function --> 
<?php get_header(); ?>    
<!---End WP Head Function --> 
    

    <div class="poster">
        <h2>"Get Crafty, The Time is Now."</h2>
        <a href="#"><button>Book a class</button></a>
        <img id="store-image" src="<?php bloginfo('template_directory'); ?>/images/store_image.jpg" alt="store image"/>
    </div><!--end poster-->
    
    <div id="wrapper">
        <div id="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="article-<?php the_ID ?>" class="article"></article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
            <small>Posted on the <?php the_time('F, jS,Y'; ?> in the <?php the_catergory();?></small>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <small>index.php</small>
        </div>
    <div id="container">
     	<div class="box1">
            <div><img src="<?php bloginfo('template_directory'); ?>/images/image3.jpg"/></div>   
            <h3>Classes</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...<a href="#">>>></a></p> 
    	</div><!--end box1-->
    	<div class="box2" id="box">
            <div><img src="<?php bloginfo('template_directory'); ?>/images/image4-min.jpg"/></div> 
             <h3>Make | Do | Mend</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...<a href="#">>>></a></p> 
    	</div> <!--end box2-->
    	<div class="box3" id="box">
            <div><img src="<?php bloginfo('template_directory'); ?>/images/image6-min.jpg"/></div> 
            <h3>Fabrics Patterns</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...<a href="#">>>></a></p>
    	</div><!--end box3--> 
    </div><!--end container-->
    </div><!--end wrapper-->


<!---Start WP Head Function --> 
<?php get_footer(); ?>    
<!---End WP Head Function --> 
