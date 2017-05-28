

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
            <article id="article-<?php the_ID ?>" class="article">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
            <small>Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?> in <?php the_category(', '); ?></small>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                <p><?php echo the_excerpt(); ?><a href="<?php the_permalink(); ?>">Full post&nbsp;&raquo;</a></p>
            </article>
            <?php endwhile; endif; ?>
            <small>index.php</small>
        </div>

    </div><!--end wrapper-->


<!---Start WP Head Function --> 
<?php get_footer(); ?>    
<!---End WP Head Function --> 
