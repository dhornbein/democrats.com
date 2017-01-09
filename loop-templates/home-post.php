<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
		<header class="entry-header">
	
			<?php the_title( '<h5 class="entry-title">', '</h5>' ); ?>
	
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

			<?php echo understrap_social(); ?>
	
			<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>
	
		</footer><!-- .entry-footer -->
	
	</article><!-- #post-## -->