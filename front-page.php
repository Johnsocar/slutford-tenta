<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php get_template_part( 'global-templates/hero-display' ); ?>

<?php get_template_part( 'global-templates/welcome' ); ?>

<?php get_template_part( 'global-templates/cats' ); ?>
<hr>
<?php get_template_part( 'global-templates/adoptions' ); ?>
<hr>
<?php get_template_part( 'global-templates/success_stories' ); ?>
<hr>



<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'loop-templates/content', 'frontpage' );
                endwhile;
				?>
			
			</main><!-- #main -->

                <!-- Do the right sidebar check -->
			
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();