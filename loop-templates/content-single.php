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
			
					<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
			
				</div><!-- .entry-meta -->
			
			</header><!-- .entry-header -->
		</div>
	</div>

	<div class="entry-content">

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

	<hr>

	<footer class="entry-footer">

		<div class="col-md-8 offset-md-2 text-xs-center">
			<h3>Share</h3>
			<?php echo understrap_social('3x'); ?>
		</div>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
