<?php
/**
 * Template Name: Grid
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
         <div class="small-12 medium-12 large-12 columns">
            <?php
         $args = array(
          'category_name' => 'graphic-design',
          'post_status' => 'published',
          'post_type' => 'post',
         );
         // The Query
          $the_query = new WP_Query( $args );
         // The Loop
         if ( $the_query->have_posts() ) {
            ?>
          <div class="row small-up-1 medium-up-2 large-up-2">
          <?php
             while ( $the_query->have_posts() ) {
                 $the_query->the_post();
             ?>
           <div class="column">
             <?php
                the_post_thumbnail();
                 the_title();
             ?> 
           </div>  
           <?php
             }
             
         } else {
             // no posts found
         }
          ?>
           </div>
          <?php
         /* Restore original Post Data */
         wp_reset_postdata();
         ?>
		</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
