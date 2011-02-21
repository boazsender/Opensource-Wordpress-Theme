<?php
/**
 * Template Name: Home page, one column
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

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content panel">
            <script src="http://popcornjs.org/butter/popcorn-js/popcorn.js"></script>
            <script src="http://popcornjs.org/butter/popcorn-js/plugins-playback/googlemap/popcorn.googlemap.js"></script>
            <script src="http://popcornjs.org/butter/popcorn-js/plugins-playback/twitter/popcorn.twitter.js"></script>

            <video id="video" src="http://webmademovies.etherworks.ca/popcorndemo/demoscreencast.ogv" controls=""></video>

            <div class="sidepanel">
            <div id="map-container" data-plugin="googlemap" class="butter-plugin"></div>
            <div id="twitter-container" data-plugin="twitter" class="butter-plugin"></div>

            <script>
              $(function(){
                $(function () { 
                 var $p = Popcorn("#video")
                   .googlemap({"id":"googlemap","start":1,"end":8,"target":"map-container","type":"TERRAIN","zoom":12,"location":"Boston"})
                   .googlemap({"id":"googlemap","start":8,"end":16,"target":"map-container","type":"TERRAIN","zoom":12,"location":"Toronto"})
                   .googlemap({"id":"googlemap","start":16,"end":90,"target":"map-container","type":"TERRAIN","zoom":12,"location":"San francisco"})
                   .twitter({"id":"twitter","start":0,"end":8,"target":"twitter-container","src":"@popcornjs"})
                   .twitter({"id":"twitter","start":8,"end":16,"target":"twitter-container","src":"@mozilla"})
                   .twitter({"id":"twitter","start":16,"end":24,"target":"twitter-container","src":"@bocoup"})
                   .twitter({"id":"twitter","start":24,"end":90,"target":"twitter-container","src":"@popcornjs"});
                });
              });
            </script>


            </div>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->
        
        <div class="panel">

        <?php $loop = new WP_Query( array('posts_per_page' => 99999 ) ); ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>
                  <h3><?php the_title(); ?></h3>
                  <div class="entry-content">
                    <span class="thumb"><?php the_post_thumbnail( 'thumbnail' ); ?></span>
                    <?php the_excerpt(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                    <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                  </div><!-- .entry-content -->
                </div><!-- #post-## -->

                <?php #comments_template( '', true ); ?>

        <?php endwhile; ?>

        <?php #comments_template( '', true ); ?>

        <?php endwhile; ?>
        </div>
      </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer(); ?>
