<!---Start WP Head Function --> 
<?php get_header(); ?>    
<!---End WP Head Function --> 
    
    <div id="wrapper">
        <main>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="article-<?php the_ID ?>" class="article"></article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
            <small>Posted on <?php the_time('F, jS, Y'); ?> in <?php the_category(', ');?></small>
            <?php the_post_thumbnail('large'); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <small>single.php</small>
        </main>
    
<!--Start WP Sidebar Function-->
<?php get_sidebar(); ?>
<!--End WP Sidebar Function-->
          
    </div><!--end wrapper-->


<!---Start WP Head Function --> 
<?php get_footer(); ?>    
<!---End WP Head Function --> 
    <?php wp_footer(); ?>