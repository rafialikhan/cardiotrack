<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<?php
	  /*
	   * We add some JavaScript to pages with the comment form
	   * to support sites with threaded comments (when in use).
	   */
	  if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	  /*
	   * Always have wp_head() just before the closing </head>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to add elements to <head> such
	   * as styles, scripts, and meta tags.
	   */
	  wp_head(); 
    ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' );?>/cardiotrack.css" />
  </head>
  <body <?php body_class(); ?>>
     <div class="container navContainer">
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"><?php _e( 'Toggle navigation', 'bootstrapcanvaswp' ); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://123.63.245.233/cardiotrack/wp-content/uploads/2015/05/cardiotrack_logo.png" title="cardiotrack" alt="cardiotrack logo"/></a>
        </div>
		<?php
          wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
          );
        ?><!--/.nav-collapse -->
      
    </nav>
    </div>
    <?php $header_image = get_header_image(); ?>
    <div class="blog-header hide" <?php if ( get_header_image() ) : ?>style="background-image: url( '<?php echo esc_url( $header_image ); ?>'); background-size: cover; background-repeat: no-repeat; background-position: top left; margin-bottom: 30px; width: 100%; height: 100%; min-height: <?php echo HEADER_IMAGE_HEIGHT; ?>px; position: relative;"<?php endif; ?>>
      <div class="container" <?php if ( get_header_image() ) : ?>style="height: auto; min-height: <?php echo HEADER_IMAGE_HEIGHT; ?>px; position: relative;"<?php endif; ?>>
        <?php if ( display_header_text() ) : ?>
        <?php $header_text_color = get_header_textcolor(); ?>
        <h1 class="blog-title" style="color: #<?php echo $header_text_color ?>;"><?php bloginfo( 'name' ); ?></h1>
        <p class="lead blog-description" style="color: #<?php echo $header_text_color ?>"><?php bloginfo( 'description' ); ?></p>
        <?php else : ?>
        <h1 class="blog-title" style="visibility: hidden; margin: 0; padding: 0; font-size: 0;"><?php bloginfo( 'name' ); ?></h1>
        <p class="lead blog-description" style="visibility: hidden; margin: 0; padding: 0; font-size: 0;"><?php bloginfo( 'description' ); ?></p>
        <?php endif; ?>
      </div>
    </div>

<?php 
$postid = get_the_ID(); // the current post id
$fimage =wp_get_attachment_url( get_post_thumbnail_id($postid) );
?>


<?php if(is_front_page()) {

//do stuff 


} else {
?>
<div class="featuredImagebox container"  style="background-image:url('<?php echo $fimage ; ?> ')">
</div>
<?php
} ?>

    <div class="container contentBg">