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
<script src="<?php bloginfo( 'template_directory' ); ?>/jquery.easyslider.1.7.js"></script>
<script src="http://popcornjs.org/butter/popcorn-js/popcorn.js"></script>
<script src="http://popcornjs.org/butter/popcorn-js/plugins-playback/googlemap/popcorn.googlemap.js"></script>
<script>
  $(function(){
    Popcorn("#video")
      .googlemap({"id":"googlemap","start":1,"end":8,"target":"map-container","type":"TERRAIN","zoom":12,"location":"Boston"})
      .googlemap({"id":"googlemap","start":8,"end":16,"target":"map-container","type":"TERRAIN","zoom":12,"location":"Toronto"})
      .googlemap({"id":"googlemap","start":16,"end":90,"target":"map-container","type":"TERRAIN","zoom":12,"location":"San francisco"})
    
    
    $('.posts').easySlider({
      speed: 800,
      prevText: '&larr; Previous',
      nextText: 'Next &rarr;',
    });
  })
</script>


    <div id="container" class="wide">
      <div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class('demos carousel panel'); ?>>
            <video id="video" src="http://webmademovies.etherworks.ca/popcorndemo/demoscreencast.ogv" controls=""></video>
            <div class="sidepanel">
              <div id="map-container" data-plugin="googlemap" class="butter-plugin"></div>
            </div>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->
        </head>

        <h1 class="fancy"><a href="/blog">From the Blog</a></h1>
        <div class="posts carousel panel">
          <ul>
            <?php $loop = new WP_Query( array('posts_per_page' => 4 ) ); ?>
            
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <li>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>
                      <h3 class="junction"><?php the_title(); ?></h3>
                      <div class="entry-content">
                        <span class="thumb"><?php the_post_thumbnail( 'thumbnail' ); ?></span>
                        <?php the_excerpt(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                      </div><!-- .entry-content -->
                    </div><!-- #post-## -->
            
                    <?php #comments_template( '', true ); ?>
              </li>
            <?php endwhile; ?>
            
            
            <?php endwhile; ?>
          </ul>
        </div>
      </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer(); ?>
