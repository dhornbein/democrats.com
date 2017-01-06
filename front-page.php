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
// TODO add to theme_mod
$about_slug = 'about';
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

						<div class="posts-featured row">

						<?php else: 
							get_template_part( 'loop-templates/home', 'post' ); 
									endif; ?>


					<?php endwhile; // end of the loop. ?>

						</div><!-- post .row end -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

		<div class="row">
			<div class="col-md-12">
				<?php
				    // query for the about page
				    $page_query = new WP_Query( 'pagename=about' );
				    while ( $page_query->have_posts() ) : $page_query->the_post();

				        get_template_part( 'loop-templates/home', 'page' ); 

				    endwhile;
				    wp_reset_postdata();
				?>
			</div>
		</div>

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
