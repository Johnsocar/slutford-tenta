<?php
/**
 * Cat setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$cats = new WP_Query([
    'post_type'         =>  'post_cats',
    'post_per_page'     =>  3,
 
]);

if ($cats->have_posts())  :

    ?>

        <div class="wrapper" id="wrapper-portfolio-items">
            <div class="container">
               <div class="row">
               <h1 id="main-page-cat-title" class="col-12"><?php _e( 'Katter söker hem!', 'understrap' ); ?></h1>
                   <!-- Loop over the cat items -->
                   <?php while($cats->have_posts()) : ?>
                  <?php $cats->the_post(); ?>
                    
                 <?php  get_template_part('loop-templates/content-cat');?>
                 
                   <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>
                    
               </div>
            </div>
        </div>
                   <?php endif; ?>