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
      <div class="third">
        <a  href="http://popcornjs.org" class="brands popcornjsbrand">
          Popcorn.js
        </a>
        <div class="center">
          The HTML5 Video Framework
        </div>
      </div>
      <div class="quarter">
        <a  href="http://butterapp.org" class="brands butterbrand">
          Butter App
        </a>
        <div class="center">
          The authoring tool for Popcorn.js
        </div>
      </div>
      <div class="third last pushtoright">
        <?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'secondary' ) ); ?>
        <p>
          Popcorn.js is a <a href="http://mozilla.com">Mozilla</a> funded project. This website is hosted by Media Temple.
        </p>
        <footer>
          <a href="http://www.w3.org/html/logo/">
            <img src="http://www.w3.org/html/logo/downloads/HTML5_Badge_64.png" height="48" alt="HTML5 Powered with CSS3 / Styling, Multimedia, Performance &amp; Integration, Semantics, and Offline &amp; Storage" title="HTML5 Powered with CSS3 / Styling, Multimedia, Performance &amp; Integration, Semantics, and Offline &amp; Storage">
          </a>
          <a href="http://mozilla.com" title="The Mozilla Foundation">
            <img height="50px"src="<?php echo bloginfo( 'template_directory' ) ?>/img/mozilla-ff.png"> 
          </a>
        </footer>
      </div>

    </div><!-- #colophon -->
  </div><!-- #footer -->
  <a href="https://github.com/webmademovies/popcorn-js"><img style="position: absolute; top: 0; left: 0; border: 0;" src="<?php echo bloginfo( 'template_directory' ) ?>/img/github-left.png" alt="Fork me on GitHub"></a>
<?php
  /* Always have wp_footer() just before the closing </body>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to reference JavaScript files.
   */

  wp_footer();
?>
</body>
</html>
