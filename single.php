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

	<section class="related-posts row">
		<div class="col-xs-12">
			<?php
				  $orig_post = $post;
				  global $post;
				  $tags = wp_get_post_tags($post->ID);
				   
				  if ($tags):
					  $tag_ids = array();
					  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
					  $args=array(
						  'tag__in' => $tag_ids,
						  'post__not_in' => array($post->ID),
						  'posts_per_page'=>3, // Number of related posts to display.
						  'caller_get_posts'=>1
					  );
					  ?>
				   			
				   			<h1 class="section-title">Related Campaigns</h1>
			
				   	<div class="posts-featured row">
				   	<?php
				    $page_query = new WP_Query( $args );
				    while ( $page_query->have_posts() ) : $page_query->the_post(); ?>
							<div class="col-md-4">
				        <?php get_template_part( 'loop-templates/home', 'post' ); ?> 
				      </div>
						<?php
				    endwhile;
				    $post = $orig_post;
			      wp_reset_query();
				      endif;
			?>
					</div>
		</div>
	</section>

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
