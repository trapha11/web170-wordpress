

<!---Start WP Head Function --> 
<?php get_header(); ?>    
<!---End WP Head Function --> 
    
    <div id="wrapper">
        <main>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="article-<?php the_ID ?>" class="article"></article>
            <h2><?php the_title(''); ?></h2>
            <small>Posted by <?php the_author(); ?> on <?php the_time('F, jS, Y'); ?> in <?php the_category(', ');?></small>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <small>page.php</small>
        </main>

<!--Start WP Sidebar Function-->
<?php get_sidebar(); ?>
<!--End WP Sidebar Function-->
        
    </div><!--end wrapper-->


<!---Start WP Head Function --> 
<?php get_footer(); ?>    
<!---End WP Head Function --> 