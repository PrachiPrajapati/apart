<?php
/**
 * Template Name: News and Events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<div class="site-section">
    <div class="container">
		<?php
		/* short-code for News Event Post Start (Pagination)  */
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$a = shortcode_atts(array(
		'display' => -1,), $atts);
		$args = array(
		'paged' => $paged,
		'post_type' => 'post',
		'posts_per_page' => 6,
		);
		$newsposts = new WP_Query($args);
    	if ( $newsposts->have_posts() ) { 
			add_filter('the_content', 'wpautop'); $pagecount = $newsposts->max_num_pages; ?>
			<div class="row">
				<?php while($newsposts->have_posts()): $newsposts->the_post(); ?>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos-delay="100">
					<?php $image = get_the_post_thumbnail_url($post->ID,'full'); ?>              
					<a  href="<?php echo get_the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="Image" class="img-fluid"></a>
					<div class="p-4 bg-white">
						<span class="d-block text-secondary small text-uppercase"><?php echo get_the_date( 'M  dS, Y' ); ?></span>
						<h2 class="h5 text-black mb-3"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
					</div>
				</div>
				<?php endwhile; ?>
				<?php if( !is_front_page() ): ?>
				<div class="text-center d-block w-100">
					<nav class="pagination-bar text-center">
						<?php pagination_bar( $newsposts ); ?>
					</nav>
				</div>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?> 
			</div>
        	<?php } else { echo __( 'No Results Found!', 'Apart' );
		} 
		wp_reset_postdata(); ?>
    </div>
    
</div>

    
	<div class="site-section">
    <div class="container">
    	<h4 class="text-center mb-4">Filter with Ajax</h4>
		<div class="">
				<?php 
					$cat = get_terms( 'category' );
					if (!empty($cat))
					{
						?>
						<div class="d-md-block d-none">
							<ul class="news-cat">
								<?php
									foreach($cat as $catagory)
									{
										?>
										<li class="blog-list-item catagory" data-slug="<?php echo $catagory->slug; ?>">
											<a href="javascript:void(0)">
												<?php echo $catagory->name; ?>
											</a>
										</li>
										<?php
									}  
								?>
							</ul>
						</div>
						
						<?php
					}
				?>
			</div>
				<?php 
					$paged = ( $page_no ) ? $page_no : 1;
					$args = array(
					'post_type' => 'post',
					'posts_per_page' => 6,
					'paged' => $paged,
					'order' => 'ASC'
					);
					$loop = new WP_Query($args);
					$pagecount = $loop->max_num_pages;
					if( $loop->have_posts() ):
				?>
						<div class="row post-list post-filter">
						<?php while ($loop->have_posts()): $loop->the_post();?>
						<div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos-delay="100">
							<?php $image = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
							<a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="Image" class="img-fluid"></a>
							<div class="p-4 bg-white">
								<span class="d-block text-secondary small text-uppercase"><?php echo get_the_date('M  dS, Y'); ?></span>
								<h2 class="h5 text-black mb-3"><a
										href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
							</div>
						</div>
        				<?php endwhile;?>
						</div>
					<?php
					else:
					?>
					<h4><?php _e('No News - Events Found', 'Blogs'); ?></h4>
					<?php
					endif; 
					wp_reset_postdata();
					?>
			</div>
			
		</div>
	
				
<?php 
   get_footer();
  ?> 
