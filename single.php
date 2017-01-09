<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
// $container   = get_theme_mod( 'understrap_container_type' );
$container = 'container-fluid';
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper-hero" id="single-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
