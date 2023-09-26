<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
setPostViews(get_the_ID());
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-single' ); $featured_img_url= get_the_post_thumbnail_url($post->ID,'full'); ?>
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <figure>
            <img src="<?php echo $featured_img_url?>" alt="Image" class="img-fluid">
            <figcaption>This is an image</figcaption>
          </figure>
          <?php the_content(); ?>
          <div class="pt-5">
            <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
          </div>
        </div>
        <div class="col-md-3 ml-auto">
          <?php dynamic_sidebar('sidebar-5'); ?>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; // End of the loop.

get_footer();
