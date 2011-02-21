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
        <p>
          Web Made Movies is a <a href="http://mozilla.com">Mozilla</a> funded project. This website is hosted by Media Temple. See a full list of the project sponsors <a href="/sponsors">here</a>.
        </p>
        <footer>
          <a href="http://mozilla.com" title="The Mozilla Foundation">
            <img class="right" height="30px"src="<?php echo bloginfo( 'template_directory' ) ?>/img/mozilla.png"> 
          </a>
        </footer>
      </div>

    </div><!-- #colophon -->
  </div><!-- #footer -->
<?php
  /* Always have wp_footer() just before the closing </body>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to reference JavaScript files.
   */

  wp_footer();
?>
</body>
</html>
