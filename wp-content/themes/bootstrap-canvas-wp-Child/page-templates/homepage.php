<?php
/**
 * Template Name: Home Page
 *
 * Description: Bootstrap Canvas WP loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

      <div class="row">

        <div class="col-sm-12 blog-main">
	  <div class="sliderBox"><?php  echo do_shortcode("[metaslider id=34]");?></div>
          <?php get_template_part( 'loop', 'page' ); ?>
        	<div class="row">
			<div class="col-md-3 homeWidget"><span class="blueBar"></span><?php echo CFS()->get('columone'); ?></div>
			<div class="col-md-3 homeWidget"><span class="blueBar"></span><?php echo CFS()->get('columntwo'); ?></div>
			<div class="col-md-3 homeWidget"><span class="blueBar"></span><?php echo CFS()->get('columnthree'); ?></div>
			<div class="col-md-3 homeWidget"><span class="blueBar"></span><?php echo CFS()->get('columnfour'); ?></div>
                        
               </div><!-- nested-->
		<div class="row">
			<div class="col-md-6 homeWidget"><?php echo CFS()->get('lowercolumnone'); ?></div>
			<div class="col-md-6 homeWidget"><div class="grayBox"><?php echo CFS()->get('lowercolumntwo'); ?></div></div>
               </div><!-- nested-->
		<div class="row">
			<div class="col-md-12">
				<div class="partnerList_title"><h6>Partners</h6></div>
				<?php  echo do_shortcode('[print_responsive_thumbnail_slider]');?>
			</div>
		</div><!-- nested-->
	</div><!-- /.blog-main -->

      </div><!-- /.row -->
      
	<?php get_footer(); ?>