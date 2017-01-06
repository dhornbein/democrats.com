<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
// $container = get_theme_mod( 'understrap_container_type' );
$container = 'container-fluid';
?>

<div class="wrapper-hero" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php $first = true ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php if ($first): 
							get_template_part( 'loop-templates/home', 'hero' ); 
							$first = false; 
						?>
						<?php else: 
							get_template_part( 'loop-templates/home', 'post' ); 
									endif; ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
