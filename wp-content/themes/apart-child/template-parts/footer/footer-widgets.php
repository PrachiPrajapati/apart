<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area m-0">
		
	</aside><!-- .widget-area -->
<div class="site-footer">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
         <?php dynamic_sidebar("sidebar-1");?>
         <div class="mb-5">
              <h3 class="footer-heading mb-4"> <?php echo get_option('footer-about-title'); ?></h3>
              <p> <?php echo get_option('footer-about-text'); ?></p>
            </div>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
        <?php dynamic_sidebar("sidebar-2");?>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="mb-5">
              <h3 class="footer-heading mb-4">Watch Live Streaming</h3>

              <div class="block-16">
                <figure>
                  <img src="http://localhost/apart/wp-content/uploads/2021/05/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                  <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div>
        </div>        
      </div>
  </div>
</div>
	<?php endif; ?>
