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

            <video id="video" src="http://webmademovies.etherworks.ca/popcorndemo/demoscreencast.ogv" controls=""></video>

            <div class="sidepanel">
            <div id="map-container" data-plugin="googlemap" class="butter-plugin"></div>

            <script>
              $(function(){
                $('#runDemo').click(function(){
                  eval($('#thecode').text());
                });
              });
            </script>

            <pre class="demo">
&lt;script src="https://github.com/webmademovies/popcorn-js/raw/master/popcorn.js"&gt;&lt;/script&gt;
&lt;script&gt;
<code id="thecode" contenteditable="">
$(function () { 
 var $p = Popcorn("#video")
   .googlemap({"id":"googlemap","start":1,"end":8,"target":"map-container","type":"TERRAIN","zoom":12,"location":"Boston"})
   .googlemap({"id":"googlemap","start":8,"end":16,"target":"map-container","type":"TERRAIN","zoom":12,"location":"Toronto"})
   .googlemap({"id":"googlemap","start":16,"end":90,"target":"map-container","type":"TERRAIN","zoom":12,"location":"San francisco"})
   .play();
});
</code>
&lt;/script&gt;
            </pre>
            <h3 id="runDemo">&uarr; Click to run this code</h3>

            </div>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->
        <h3 class="fancy">Other Demos</h3>
        <?php $loop = new WP_Query( array( 'post_type' => 'demo', 'posts_per_page' => 99999 ) ); ?>

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

      </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer(); ?>
