<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">
		<div class="col-xs-12">
			<header class="entry-header text-xs-center">
			
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			
				<div class="entry-meta">
			
					<?php echo understrap_social(); ?>
			
					<?php understrap_posted_on(); ?>
			
				</div><!-- .entry-meta -->
			
			</header><!-- .entry-header -->
		</div>
	</div>

	<div class="entry-content row">

		<div class="col-md-8 offset-md-2">

			<?php the_content(); ?>
			
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
			?>

		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer row">

		<div class="col-md-8 offset-md-2 text-xs-center">
			<?php echo understrap_social('3x'); ?>

			<?php understrap_entry_footer(); ?>
		</div>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
