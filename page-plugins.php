<?php
/**
 * Template Name: Plugins, no sidebar
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

<?php
$counter = 0;
$loop = new WP_Query( array( 'post_type' => 'plugin', 'posts_per_page' => 99999 ) ); 
?>

<?php
  while ( $loop->have_posts() ) : $loop->the_post(); 
  $counter = $counter + 1;

?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="entry-content">
            <p><?php the_excerpt (); ?></p>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->

        <?php #comments_template( '', true ); ?>

<?php 
  if ( $counter % 4 == 0 ) {
    echo '<hr class="space">';
  }
?>

<?php endwhile; ?>

      </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer(); ?>
