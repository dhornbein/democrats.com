<?php
/**
 * Partial template for home page hero post
 *
 * @package understrap
 */

// featured image
// TODO put in a default image if none exists
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<article <?php post_class('post-hero row'); ?> id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $thumb['0'];?>')">

	<div class="overlay clearfix">
		<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
			<header class="entry-header">
			
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			
			</header><!-- .entry-header -->
			
			<div class="entry-content">
			
				<?php the_content(); ?>
			
				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
				?>
			
			</div><!-- .entry-content -->
			
			<footer class="entry-footer">
			
				<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
			
			</footer><!-- .entry-footer -->
		</div>
	</div>

</article><!-- #post-## -->
