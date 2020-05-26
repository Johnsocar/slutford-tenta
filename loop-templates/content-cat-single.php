<?php
/**
 * Single post partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php

    $catsize = get_field('add_size');
    $catcity = get_field('add_city');
    $catage = get_field('add_cats_age');
    $catweight = get_field('add_cat_weight');
    $catcolor = get_field('add_cat_color');
    $catimage = get_field('add_cat_image');
    $catadopted = get_field('add_if_adopted');
    $catgender = get_field('add_cat_gender');
    

		
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    
	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<div class="entry-meta">

			

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>
        
        <img src="<?php echo($catimage) ?>" alt="">


    <div class="row" id="first-cat-row" >
            
        <p class="col-6"><?php _e( 'City:', 'understrap') ?> <?php _e($catcity->name, 'understrap') ?></p>   
        <p class="col-6"><?php _e( 'Gender:', 'understrap') ?> <?php _e($catgender->name, 'understrap') ?></p>
        
    </div>

    <div class="row" id="second-cat-row" >
    
            <p class="col-6"><?php _e( 'Size:', 'understrap') ?> <?php _e($catsize->name, 'understrap') ?></p>
            <p class="col-6"><?php _e( 'Age:', 'understrap') ?> <?php _e($catage, 'understrap') ?></p>

    </div>
    
    <div class="row" id="third-cat-row" >

            <p class="col-6"><?php _e( 'Weight:', 'understrap') ?> <?php _e($catweight, 'understrap') ?></p>
            <p class="col-6"><?php _e( 'Color:', 'understrap') ?> <?php  _e($catcolor, 'understrap') ?></p>

    </div>
    
    <p style="margin-top: 1rem;"><?php _e('Adopted:', 'understrap') ?> <?php _e($catadopted, 'understrap'); ?></p>

    
    
    

	
		

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
