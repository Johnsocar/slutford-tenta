<?php
/**
 * Adoption setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$cat_adoption = new WP_Query([
    'post_type'         =>  'cat_adoption',
    'post_per_page'     =>  -1,
]);

if ($cat_adoption->have_posts())  :

    ?>
            
        <div class="wrapper" id="wrapper-adoption-items">
            <div class="container">
               <h1><?php _e( 'Tre steg hur du adopterar en katt!', 'understrap' ); ?></h1>
               <div class="row">
                   <!-- Loop over the adoption items -->
                   <?php while($cat_adoption->have_posts()) : ?>
                  <?php $cat_adoption->the_post(); ?>
                    
                 <?php  get_template_part('loop-templates/content-adoption');
                   ?>
                   <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>

               </div>
            </div>
        </div>
                   <?php endif; ?>