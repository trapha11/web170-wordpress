

<!---Start WP Head Function --> 
<?php get_header(); ?>    
<!---End WP Head Function --> 
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
        <!-- FlexSlider -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" type="text/css" media="screen" />
      <script defer src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>

      <script type="text/javascript">
        $(function(){
          SyntaxHighlighter.all();
        });
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
      </script> <!-- END FlexSlider Script --> 
    <div class="poster">
        <div class="flexslider poster"><!-- Start FlexSlider -->
            <h2 class="CTAh2">"Start your project with deals"</h2>
            <a href="#"><button class="CTA">SALE </button></a>
          <ul class="slides">
            <li><img src="<?php bloginfo('template_directory'); ?>/images/image1.jpg" />
              <p class="flex-caption">Materials</p>
            </li>
  	    	<li><img src="<?php bloginfo('template_directory'); ?>/images/image3.jpg" />
              <p class="flex-caption">Working Space</p>
              </li>
  	         <li><img src="<?php bloginfo('template_directory'); ?>/images/image4.jpg" />
              <p class="flex-caption">Fabrics</p>
  	    		</li>
  	    		<li>
  	    	    <img src="<?php bloginfo('template_directory'); ?>/images/image7.jpg" />
              <p class="flex-caption">Gifts</p>
  	    		</li>
          </ul>
        </div><!-- End FlexSlider -->
    </div><!--end poster-->
    <div id="wrapper">
        <div id="container">
     	<div class="box1">
            <h2>About Me:</h2>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="article-<?php the_ID ?>" class="article"></article>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
    	</div><!--end box1-->
    	<div class="box2" id="box">
            <h2>Latest News</h2>
            <ul>
            <?php rewind_posts(); ?>
            <?php query_posts(array('post_per_page' => '4')); ?>    
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li><?php the_title(); ?></li>
            <?php endwhile; endif; ?>
            </ul>
    	</div> <!--end box2-->
    	<div class="box3" id="box">
            <div><img src="<?php bloginfo('template_directory'); ?>/images/image6-min.jpg"/></div> 
            <h3>Fabrics Patterns</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...<a href="#">>>></a></p>
    	</div><!--end box3-->     
            <small>front-page.php</small>        
    </div><!--end container--> 
    </div><!--end wrapper-->

<!---Start WP Head Function --> 
<?php get_footer(); ?>    
<!---End WP Head Function --> 