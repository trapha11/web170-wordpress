<aside>
            
    <h4>
    <?php 
        if(is_page()){ //if we are on page  
            
            echo get_the_title($post->post_parent); //display title of the curernt viewing post
            
        }else{
            
            echo 'Blog';
        }
    ?>
    </h4> 
    <ul class="sub-nav">
    <?php 
        
    if(is_page()){ //if we are on a page    
        
        if($post->post_parent){ //if the page has parent
            
            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '',)); //list the parent's children
            
        }else {//if we are on a parent page
            
            wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',)); //list the children
        }
    }else{//if we are NOT on a page
        
        wp_list_categories(array('title_li' => '',));
        
    }
        
    ?>    
    </ul>
    <!--Pull Quote-->
    <?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
    <blockquote><?php echo get_post_meta($post->ID, 'Quote', true) ?></blockquote>
    <?php endif; ?>
    <br>
    <!--Meta tag-->
    <?php dynamic_sidebar(1); ?>
</aside>
 