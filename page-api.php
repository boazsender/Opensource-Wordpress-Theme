<?php
/**
 * Template Name: API, no sidebar
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

    <div id="container">
      <div id='sidebar' class="quarter">
        <script src='https://github.com/cowboy/jquery-hashchange/raw/v1.3/jquery.ba-hashchange.min.js'></script>
        <script>
          $(function(){
            var loadApis = function ( class ) {
              if (!!window.location.hash) {
                $('.page-content').hide();
                $('.listitems').children().show().not('.' + window.location.hash.replace('#', '')).hide();
              }
            }
            $(window).hashchange( function(){
              loadApis();              
            })
            loadApis();              
            $('.subnav').delegate('li', 'click', function(){
              window.location.hash = $(this).attr('class');
              loadApis();
            })
          });
        </script>
        <h1>APIs</h1>
        <ul class="subnav listless">
         <?php 
          $types=  get_categories(array('taxonomy' => 'types')); 
            echo '<li><a href="/documentation/">All APIs</a></li>';
          foreach ($types as $type) {
            $li = '<li class="'.$type->slug.'"><a href="JavaScript:;">';
            $li .= $type->cat_name;
            $li .= '<span class="fine"> ('.$type->category_count.')</span>';
            $li .= '</a></li>';
            echo $li;
          }
         ?>
        </ul>
        
      </div>
      <div id="content" role="main" class="threequarter wide last">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
          <div class="entry-content">            
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->

        <?php #comments_template( '', true ); ?>

<?php endwhile; ?>


<?php $loop = new WP_Query( array( 'post_type' => 'API', 'posts_per_page' => 99999 ) ); ?>

<ul class="listitems listless">
<?php while ( $loop->have_posts() ) : $loop->the_post(); 
  $terms = wp_get_object_terms( $post->ID, 'types');
?>

        <li id="post-<?php the_ID(); ?>" <?php post_class( $terms[0]->slug ); ?>>
          <h2><a href="<?php echo get_permalink() ?>">.<?php the_title(); if ( $terms[0]->slug != 'instance-properties' ) { echo '()';};?></a></h2>
          <!-- <span class="fine meta">
            <?php echo get_the_term_list( $post->ID, 'types', '', ', ', '' );?> 
          </span> -->
          <span class="typeofodc">
            <?php echo get_the_term_list( $post->ID, 'types', '', ', ', '' );?> 
          </span>
          <p><?php the_excerpt (); ?></p>
          <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
          <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
        </li>

        <?php #comments_template( '', true ); ?>

<?php endwhile; ?>
</ul>

      </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer(); ?>
