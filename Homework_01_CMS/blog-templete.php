<?php 

/**
*Template Name: Blog Templete
*/
get_header();
?>
	<h1>Blog</h1>
		<?php 
		
		$blog_query = new WP_Query('author=1');

		if( $blog_query->have_posts() ):
        	while( $blog_query->have_posts() ):
           		$blog_query->the_post();
      	
      	?>

    <div class="content">
        <h1><?php the_title(); ?></h1>

        <div>
            <?php the_content(); ?>
        </div>    
    </div>

     <?php
        	 endwhile;
        		endif;
        wp_reset_query();
     ?>

<?php get_footer(); ?>