<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
    </div><!-- /.container -->

    <div class="blog-footer">
    
      <?php get_sidebar( 'footer' ); ?>
      
	  <?php 
	  $copyright_text = get_theme_mod( 'copyrighttext', '' ); ?>
	  <?php if ( $copyright_text !== '' ) : ?>
      <p class="copyright hide"><?php echo $copyright_text; ?></p>
      <?php else: ?>
      <p class="copyright hide"><?php _e( 'Blog template built for <a href="' . esc_url( 'http://getbootstrap.com' ) . '">Bootstrap</a> by <a href="' . esc_url( 'https://twitter.com/mdo' ) . '">@mdo</a>.', 'bootstrapcanvaswp' ); ?></p>
      <?php endif; ?>
      <p>
        <a href="#" class="hide"><?php _e( 'Back to top', 'bootstrapcanvaswp' ); ?></a>
      </p>
    </div>

    <?php 
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer(); 
	?>
	<script>
    jQuery(document).ready(function () {
        jQuery('.dropdown-toggle').dropdown();
    });
</script>
  </body>
</html>