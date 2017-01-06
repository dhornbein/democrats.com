<?php
/**
 * Partial template for displaying page on the home
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <header class="entry-header text-xs-center text-uppercase">

    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

  </header><!-- .entry-header -->

  <div class="entry-content">

    <?php the_content(); ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">

    <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-## -->
