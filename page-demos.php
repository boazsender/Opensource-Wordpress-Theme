<?php
/**
 * Template Name: Demos, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

    <div id="container" class="wide">
      <div id="content" role="main">


<?php $loop = new WP_Query( array( 'post_type' => 'demo', 'posts_per_page' => 99999 ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="entry-content">
            <span class="thumb"><?php the_post_thumbnail( 'thumbnail' ); ?></span>
            <?php the_excerpt(); ?>
            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->

        <?php #comments_template( '', true ); ?>

<?php endwhile; ?>

      </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer(); ?>
