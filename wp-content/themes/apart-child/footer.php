<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer p-0" role="contentinfo">

		
		<div class="site-info text-center justify-content-center">
			<div class="site-name">
			<p> 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <?php echo get_theme_mod('custom_theme_Css', 'Copyright '.date('Y')); ?> <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
				<!-- <?php// if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php //the_custom_logo(); ?></div>
				<?php //else : ?>
					<?php //if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php //if ( is_front_page() && ! is_paged() ) : ?>
							<?php //bloginfo( 'name' ); ?>
						<?php //else : ?>
							<a href="<?php //echo esc_url( home_url( '/' ) ); ?>"><?php //bloginfo( 'name' ); ?></a>
						<?php //endif; ?>
					<?php //endif; ?>
				<?php //endif; ?> -->
			</div><!-- .site-name -->
			

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
$(document).ready(function () {		
		/* load more result Script*/  
		jQuery( "#loadmore-form-submit" ).on('submit', function( e ){
            e.stopPropagation();
            e.preventDefault();
            var cuurentForm =jQuery( this );
            var totalPages = cuurentForm.find("input[name=total-pages]").val();
            var pageNo = cuurentForm.find("input[name=page-no]");
            cuurentForm.find(".load-more-btn").hide();
            cuurentForm.find( ".loading-btn" ).show();
            jQuery.ajax({
                url : ' <?php echo admin_url( 'admin-ajax.php'); ?>',
				crossDomain: true,
                type : 'POST',
                data : cuurentForm.serialize(),
                success : function(data){
                    jQuery(".apart-list").append(data);
                    if( parseInt(totalPages) <=  parseInt(pageNo.val())  ){
                        cuurentForm.hide();
                    }
                    else{                           
                        pageNo.val( ( pageNo.val() ) - 1 + 2 );
                        cuurentForm.find(".load-more-btn").show();
                        cuurentForm.find( ".loading-btn" ).hide();
                    }
                },
                
            }); 
		});
});
	jQuery(".testimony-slider").slick({
			dots: true,
			infinite: false,
			arrows:false,
			fade:false,
			slidesToShow: 3,
  			slidesToScroll: 3,
			  responsive: [
                {
                    breakpoint: 990,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll:3,
                    }
                },
                {
                    breakpoint: 766,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 574,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
	});
    /* filter with ajax */
   	
            jQuery('.category').on('click',function(e){
               e.preventDefualt(); 
                var slug = jQuery(this).attr('data-slug');
                jQuery.ajax({
                    url : '<?php echo admin_url('admin-ajax.php'); ?>',
                    type : 'POST',
                    data : { 'action' : 'filter_category' ,slug : slug },
                    success : function(data){
                        console.log(data);
                        jQuery('.news-list-item').html(data);
                        jQuery(document).resize();
				
                    },
                });
            });
   // Loadmore script
		
	// filter Script
	jQuery('.blog-list-item').on('click', function () {
		var slug = jQuery(this).attr('data-slug');
		jQuery.ajax({
			url : '<?php echo admin_url("admin-ajax.php"); ?>',
			data : { slug : slug , action : 'blogFilteration' },
			type : 'POST',	
			success : function(data) {
				jQuery(".post-filter").html(data);
				jQuery(document).resize();
				jQuery(".filterval").val(slug);
			}
		}); 
	});
	
</script>
</body>
</html>
