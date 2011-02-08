<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
  </div><!-- #main -->
</div><!-- #wrapper -->

  <div id="footer" role="contentinfo">
    <div id="colophon">

<?php
  /* A sidebar in the footer? Yep. You can can customize
   * your footer with four columns of widgets.
   */
  get_sidebar( 'footer' );
?>

      <?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'secondary' ) ); ?>
      <p>
        Popcorn.js is a <a href="http://mozilla.org">Mozilla</a> <a href="www.drumbeat.org">Drumbeat</a> <a href="http:///webmademovies.org" title="Mozilla's Open Video Lab">Web Made Movies</a> project, developed by <a href="http://cdot.senecac.on.ca/">CDOT</a>, <a href="http://bocoup.com">Bocoup</a> and contributors like you. This webiste is hosted by Media Temple.
      </p>
      <footer
       <a href="http://mozilla.org" title="The Mozilla Foundation">
         <img height="40px"src="<?php echo bloginfo( 'template_directory' ) ?>/img/mozilla.png"> 
       </a>
       <a href="http://www.drumbeat.org/" title="The Mozilla Drumbeat Project">
         <img height="45px"src="<?php echo bloginfo( 'template_directory' ) ?>/img/drumbeat.png"> 
       </a>
       <a href="http://www.drumbeat.org/webmademovies" title="Mozilla's Open Video Lab">
         <img height="60px"src="<?php echo bloginfo( 'template_directory' ) ?>/img/webmademovies.jpg"> 
       </a>
       <a href="http://zenit.senecac.on.ca/wiki/index.php/Main_Page" title="Center for the Development of Open Technologies">
         <img height="50px" src="<?php echo bloginfo( 'template_directory' ) ?>/img/cdot.png" alt="Center for the Development of Open Technologies"/>
       </a>
       <a href="http://bocoup.com" title="The JavaScrpt Company">
         <img height="50px" src="<?php echo bloginfo( 'template_directory' ) ?>/img/bocoup.png" alt="The JavaScript Company"/>
       </a>
      </footer>

    <a class="center" href="http://www.w3.org/html/logo/">
     <img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-multimedia-performance-semantics-storage.png" width="261" height="64" alt="HTML5 Powered with CSS3 / Styling, Multimedia, Performance &amp; Integration, Semantics, and Offline &amp; Storage" title="HTML5 Powered with CSS3 / Styling, Multimedia, Performance &amp; Integration, Semantics, and Offline &amp; Storage">
    </a>

    </div><!-- #colophon -->
  </div><!-- #footer -->
<a href="https://github.com/webmademovies/popcorn-js"><img style="position: absolute; top: 0; right: 0; border: 0;" src="http://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub" /></a> 

<?php
  /* Always have wp_footer() just before the closing </body>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to reference JavaScript files.
   */

  wp_footer();
?>
</body>
</html>
