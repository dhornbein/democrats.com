<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if (array_key_exists('thank_you',$_GET)) $thanks = true;

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">
		<div class="col-xs-12">
			<header class="entry-header text-xs-center">
				<?php if ($thanks): ?>

				<div class="text-xs-center">
					<h2><strong>Thank you for your support!</strong></h2>
					<h3>Spread the word:</h3>
					<?php echo understrap_social('text'); ?>
				</div>
				<br>

				<?php endif; ?>

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">

					<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

				</div><!-- .entry-meta -->

			</header><!-- .entry-header -->
		</div>
	</div>

	<div class="entry-content row">

		<div class="col-md-8 offset-md-2">
			<?php if ( has_post_thumbnail( $post->ID ) ): ?>
			<div class="entry-feature-img float-sm-left mr-1 mb-1">
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			</div>
			<?php endif; ?>

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
			<?php echo understrap_social('text'); ?>
		</div>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
