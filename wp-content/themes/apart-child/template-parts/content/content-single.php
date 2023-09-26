
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>"  class="mb-0 <?php post_class(); ?>">
	<?php 
  $featured_img_url= get_the_post_thumbnail_url($post->ID,'full');
 $banner_img_url = get_field('banner_image_');
 $classes = get_body_class();
 ?>
	<div class="site-blocks-cover inner-page-cover overlay aos-init aos-animate" style="background-image: url('<?php echo $banner_img_url; ?>'); background-position: 50% 0%;" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white"><?php the_title()?></h1>
            <?php if( get_field('price') ): ?>
              <p><strong>$<?php the_field('price'); ?>/night</strong></p>
            <?php endif; ?>
            <?php if(in_array('single-post',$classes)) {?>
              <p><?php echo get_the_date( 'M  dS, Y' ); ?> <span class="mx-3">•</span> <?php echo get_the_author();?> </p>
            <?php }?>
        </div>
      </div>
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
