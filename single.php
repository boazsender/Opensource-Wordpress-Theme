<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

?>
<?php 
if ( get_post_type() == 'Demo' ){ 
  while ( have_posts() ) : the_post();
    the_content();
  endwhile; 
} else { ?>

<?php get_header(); ?>

    <div id="container">
      <div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
  $terms = wp_get_object_terms( $post->ID, 'types');
?>
  

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="entry-content">
            <h1 class="junction"><?php the_title();?></h1>
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
          </div>
        </div>

        <?php #comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

      </div><!-- #content -->
    </div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php } ?>
