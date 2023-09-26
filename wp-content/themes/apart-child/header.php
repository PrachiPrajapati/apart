<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); 
$classes = get_body_class();
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
	<?php get_template_part( 'template-parts/header/site-header' ); 
	if(!is_front_page() && (!in_array('single',$classes))){
		$featured_img_url= get_the_post_thumbnail_url($post->ID,'full'); ?>
		<div class="site-blocks-cover inner-page-cover overlay aos-init aos-animate" style="background-image: url('<?php echo $featured_img_url; ?>'); background-position: 50% 0%;" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white"><?php the_title()?></h1>
          <?php if( get_field('excerpt') ): ?>
            <p><strong><?php the_field('excerpt'); ?></strong></p>
         <?php endif; ?>
        </div>
      </div>
    </div>
  </div>	
	<?php										
	}
	
	
	?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
