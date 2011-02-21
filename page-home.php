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

    Popcorn("#video-2")
      .googlemap({"id":"googlemap","start":1,"end":8,"target":"map-container-2","type":"TERRAIN","zoom":12,"location":"Boston"})
      .googlemap({"id":"googlemap","start":8,"end":16,"target":"map-container-2","type":"TERRAIN","zoom":12,"location":"Toronto"})
      .googlemap({"id":"googlemap","start":16,"end":90,"target":"map-container-2","type":"TERRAIN","zoom":12,"location":"San francisco"})
     
    $('.demos').easySlider({
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
            <ul>
              <li>
                <video id="video" src="http://webmademovies.etherworks.ca/popcorndemo/demoscreencast.ogv" controls=""></video>
                <div class="sidepanel">
                  <div id="map-container" data-plugin="googlemap" class="butter-plugin"></div>
                </div>
              </li>
              <li>
                <video id="video-2" src="http://webmademovies.etherworks.ca/popcorndemo/demoscreencast.ogv" controls=""></video>
                <div class="sidepanel">
                  <div id="map-container-2" data-plugin="googlemap" class="butter-plugin"></div>
                </div>
              </li>
            </ul>
          </div><!-- .entry-content -->
        </div><!-- #post-## -->
        </head>

        <hr class="space">
        <h1 class="fancy"><a href="/blog">From the Blog</a></h1>
        <div class="posts panel">
            <?php $loop = new WP_Query( array('posts_per_page' => 3 ) ); ?>
            
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>
                      <h3 class="junction"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
                      <div class="entry-content">
                        <span class="thumb"><?php the_post_thumbnail( 'thumbnail' ); ?></span>
                        <?php the_excerpt(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                        <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                      </div><!-- .entry-content -->
                    </div><!-- #post-## -->
            
                    <?php #comments_template( '', true ); ?>
            <?php endwhile; ?>
            
            <?php endwhile; ?>
        </div>
        <hr class="space">
        <a href="/blog" class="right">More Posts &rarr;</a>
      </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer(); ?>
