<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
		<header class="entry-header">
			
			<a href="<?php the_permalink(); ?>">
				<?php the_title( '<h5 class="entry-title">', '</h5>' ); ?>
			</a>
	
		</header><!-- .entry-header -->

		<div class="entry-feature-img"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></div>
	
		<div class="entry-content">
	
			<?php the_content('Read more...'); ?>
	
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