
<?php

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );
  $featured_img_url= get_the_post_thumbnail_url($post->ID,'full');
	?>
  <div class="container">
      <div class="featured-property-half d-flex">
      <?php $featured_img_url= get_the_post_thumbnail_url($post->ID,'full');?>
        <div class="image" style="background-image: url('<?php echo $featured_img_url?>')"></div>
        <div class="text">
          <h2>Property Information</h2>
          <p><?php echo get_the_content(); ?></p>
          <ul class="property-list-details mt-5 mb-5">
            <li class="text-black">Property Name: <strong class="text-black"><?php the_title()?></strong></li>
            <?php if( get_field('rooms') ): ?>
            <li>Room: <strong><?php the_field('rooms'); ?></strong></li>
          <?php endif; ?>
          <?php if( get_field('total_area') ): ?>
            <li>Total Area: <strong><?php the_field('total_area'); ?> Square Feets</strong></li>
          <?php endif; ?>
          
          <?php $categories = get_the_category();
 echo esc_html( $categories[0]->name );
 if ( ! empty( $categories ) ) {
     echo esc_html( $categories[0]->name );   
 }?>
           <!-- if( !empty( $categories)) { ?>
              <li>Category: <strong><?php// echo esc_html( $categories[0]->name ); ?></strong></li>
             <?php //}  ?> -->
          <?php if(  get_the_date() ): ?>
            <li>Lunch Date: <?php echo get_the_date( 'M  dS, Y' ); ?></li>
            <?php endif; ?>
          </ul>
          <p><a href="contact.html" class="btn btn-primary px-4 py-3">Contact Us</a></p>
        </div>
      </div>
    </div>
	<div class="common-content mt-0">
	<div class="site-section">
      <div class="container">
	  <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Browse Apartments</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt
              officia, error reiciendis ab quod?</p>
          </div>
        </div>
	  <?php echo do_shortcode('[apartment_section display=4]'); ?>
      </div>
    </div>
	<div class="site-section">
      <div class="container">
	  <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto aos-init aos-animate" data-aos="fade-up">
            <h2 class="mb-5">Featured Apartments</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
	  <?php echo do_shortcode('[featured_section display=3]'); ?>
      </div>
    </div>
	<div class="site-section block-13">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Love By Our Customers</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
          </div>
        </div>
		<?php echo do_shortcode('[slick_testinomy_slider]'); ?>  
    </div>
	</div>
	
<?php endwhile; // End of the loop.

get_footer();
