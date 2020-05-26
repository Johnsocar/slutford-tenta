<?php
/**
 * success_story setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$success = new WP_Query([
    'post_type'         =>  'success_stories',
    'post_per_page'     =>  -1,
]);

if ($success->have_posts())  :

    ?>
            
        <div class="wrapper" id="wrapper-portfolio-items">
            <div class="container">
              

               <div class="row">
               <h1 id="main-page-success-title" class="col-12"><?php _e( 'framgångshistorier', 'understrap' ); ?></h1>

                   <!-- Loop over the success_story items -->
                   <?php while($success->have_posts()) : ?>
                  <?php $success->the_post(); ?>
                    
                 <?php  get_template_part('loop-templates/content-success_stories');
                   ?>
                   <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>

               </div>
            </div>
        </div>
                   <?php endif; ?>