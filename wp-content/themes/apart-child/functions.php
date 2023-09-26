<?php
/*****Custom Post Types Registrations******/
add_action('init', 'apartCustomPostType');
/* customposttype for browse apartment */
function apartCustomPostType()
{
    $testimonyLabels = array(
        'name' => _x('Testimonials', 'Post Type General Name', 'Apart'),
        'singular_name' => _x('Testimonial', 'Post Type Singular Name', 'Apart'),
        'menu_name' => __('Testimonials', 'Apart'),
        'parent_item_colon' => __('Parent Testimonial', 'Apart'),
        'all_items' => __('All Testimonials', 'Apart'),
        'view_item' => __('View Testimonials', 'Apart'),
        'add_new_item' => __('Add New Testimonial', 'Apart'),
        'add_new' => __('Add New', 'Apart'),
        'edit_item' => __('Edit Testimonial', 'Apart'),
        'update_item' => __('Update Testimonial', 'Apart'),
        'search_items' => __('Search Testimonials', 'Apart'),
        'not_found' => __('Not Found', 'Apart'),
        'not_found_in_trash' => __('Not Found in Trash', 'Apart'),
    );
    // Set other options for Custom Post Type Testimonials
    $testimonyArgs = array(
        'label' => __('Testimonials', 'Apart'),
        'description' => __('Testimonials', 'Apart'),
        'labels' => $testimonyLabels,
        'supports' => array('title', 'revisions', 'editor', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 6,
        'has_archive' => false,
        'menu_icon' => 'dashicons-controls-repeat',
        'can_export' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type Testimonials
    register_post_type('Testimonials', $testimonyArgs);
    /*/---- create new posttype for Team Members ------/*/
    $teamLabels = array(
        'name' => _x('Team Members', 'Post Type General Name', 'Three Feathers Realty'),
        'singular_name' => _x('Team Member', 'Post Type Singular Name', 'Three Feathers Realty'),
        'menu_name' => __('Team Members', 'Three Feathers Realty'),
        'parent_item_colon' => __('Parent Team Member', 'Three Feathers Realty'),
        'all_items' => __('All Team Members', 'Three Feathers Realty'),
        'view_item' => __('View Team Members', 'Three Feathers Realty'),
        'add_new_item' => __('Add New Team Member', 'Three Feathers Realty'),
        'add_new' => __('Add New', 'Three Feathers Realty'),
        'edit_item' => __('Edit Team Member', 'Three Feathers Realty'),
        'update_item' => __('Update Team Members', 'Three Feathers Realty'),
        'search_items' => __('Search Team Members', 'Three Feathers Realty'),
        'not_found' => __('Not Found', 'Three Feathers Realty'),
        'not_found_in_trash' => __('Not Found in Trash', 'Three Feathers Realty'),
    );
    // Set other options for Custom Post Type Team Member
    $teamArgs = array(
        'label' => __('Team Members', 'Three Feathers Realty'),
        'description' => __('Team Members', 'Three Feathers Realty'),
        'labels' => $teamLabels,
        'supports' => array('title', 'thumbnail', 'revisions', 'editor'),
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'has_archive' => false,
        'menu_icon' => 'dashicons-groups',
        'can_export' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type Team Members
    register_post_type('team-members', $teamArgs);
    // Set UI labels for Custom Post Type
    $apartmentlabels = array(
        'name' => _x('Apartment', 'Post Type General Name', 'apart'),
        'singular_name' => _x('Apartment', 'Post Type Singular Name', 'apart'),
        'menu_name' => __('Apartment', 'apart'),
        'parent_item_colon' => __('Parent Apartment', 'apart'),
        'all_items' => __('All Apartment', 'apart'),
        'view_item' => __('View Apartment', 'apart'),
        'add_new_item' => __('Add New Apartment', 'apart'),
        'add_new' => __('Add New', 'apart'),
        'edit_item' => __('Edit Apartment', 'apart'),
        'update_item' => __('Update Apartment', 'apart'),
        'search_items' => __('Search Apartment', 'apart'),
        'not_found' => __('Not Found', 'apart'),
        'not_found_in_trash' => __('Not found in Trash', 'apart'),
    );
    // Set other options for Custom Post Type
    $apartmentargs = array(
        'label' => __('Apartment', 'apart'),
        'description' => __('Apartment news and reviews', 'apart'),
        'labels' => $apartmentlabels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'revisions', 'editor', 'thumbnail', 'excerpt'),
        // You can associate this CPT with a taxonomy or custom taxonomy.

        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 10,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,

    );
    // Registering your Custom Post Type
    register_post_type('apartment', $apartmentargs);
    $labels = array(
        'name' => _x('Apartment Categories', 'taxonomy general name', 'apartment'),
        'singular_name' => _x('Apartment Categories', 'taxonomy singular name', 'apartment'),
        'search_items' => __('Search Categories', 'apartment'),
        'all_items' => __('All Apartment Categories', 'apartment'),
        'parent_item' => __('Parent Apartment Categories', 'apartment'),
        'parent_item_colon' => __('Parent Apartment Categories:', 'apartment'),
        'edit_item' => __('Edit Apartment Categories', 'apartment'),
        'update_item' => __('Update Apartment Categories', 'apartment'),
        'add_new_item' => __('Add New Apartment Categories', 'apartment'),
        'new_item_name' => __('New Apartment Categories Name', 'apartment'),
        'menu_name' => __('Apartment Categories', 'apartment'),
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Apartment Categories'),
    );
    register_taxonomy('Apartment Categories', array('apartment'), $args);
}

/* to add external files in to it */
function add_scripts()
{
    /* **Main JQuery Included** */
    wp_enqueue_script('jquery-js', get_stylesheet_directory_uri() . '/js/lib/jquery.js');
    /* bootstrap style-css-js included */
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    /**Font-Awesome Included***/
    wp_enqueue_style('fontawesome-css', get_stylesheet_directory_uri() . '/css/fontawesome.css');
    /* Slick Style and Scripts Included */
    wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.js');
    wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/css/slick.css');
    /* style.css included */
    wp_enqueue_style('twenty-twenty-one-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'add_scripts');
/* Metabox in testimonials */
add_action("admin_init","custom_metabox");

function custom_metabox(){
    add_meta_box("custom_metabox_01","Author","custom_metabox_field" , "Testimonials" , "normal" ,"low");
}
function custom_metabox_field(){
    global $post;
    $data = get_post_custom($post->ID);
    $val = isset($data['custom_input']) ? esc_attr($data['custom_input'][0]) : 'no_value';
    echo '<input type="text" name="custom_input" id="custom_input" value="' .$val.'"/>';
}
add_action("save_post","save_detail");
function save_detail(){
    global $post;
    if(define('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return $post->ID;
    }
    update_post_meta($post->ID,"custom_input",$_POST["custom_input"]);
}
function twentytwenty_custom_widget_registration()
{

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title' => '<h2 class="widget-title subheading heading-size-3">',
        'after_title' => '</h2>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget' => '</div></div>',
    );
    // Top Header Contact Widget.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name' => __('Footer #2', 'apart'),
                'id' => 'sidebar-2',
                'description' => __('Footer Information column 2', 'apart'),
            )
        )
    );
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name' => __('Footer #4', 'apart'),
                'id' => 'sidebar-4',
                'description' => __('Footer Information column 4.', 'apart'),
            )
        )
    );
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name' => __('Sidebar', 'apart'),
                'id' => 'sidebar-5',
                'description' => __('Sidebar for blog inner.', 'apart'),
            )
        )
    );
}
add_action('widgets_init', 'twentytwenty_custom_widget_registration');

/******Custom menu for Footer ********/
function wpb_custom_new_menu()
{
    register_nav_menus(
        array(
            'footer-nav' => __('footer-nav'),
        )
    );
}
add_action('init', 'wpb_custom_new_menu');

/* short-code for property  Start*/
function property_section()
{
    ob_start();
    $args = array(
        'post_type' => 'apartment',
        'posts_per_page' => 1,
        'meta_query' => array(
            array(
                'key' => 'display_on_front_page',
                'value' => 'yes',
                'compare' => 'LIKE',
            ),
        ),
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()):
    ?>
    <?php while ($loop->have_posts()): $loop->the_post();?>
    <div class="container">
        <div class="featured-property-half d-flex">
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
            <div class="image" style="background-image: url('<?php echo $featured_img_url ?>')"></div>
            <div class="text">
                <h2>Property Information</h2>
                <p><?php echo get_the_content(); ?></p>
                <ul class="property-list-details mt-5 mb-5">
                    <li class="text-black">Property Name: <strong class="text-black"><?php the_title()?></strong></li>
                    <?php if (get_field('rooms')): ?>
                    <li>Room: <strong><?php the_field('rooms');?></strong></li>
                    <?php endif;?>
                    <?php if (get_field('total_area')): ?>
                    <li>Total Area: <strong><?php the_field('total_area');?> Square Feets</strong></li>
                    <?php endif;?>
                    <?php $categoriess = get_the_category();
                            if (!empty($categoriess)) {?>
                    <li>Category: <strong><?php echo esc_html($categoriess[0]->name); ?></strong></li>
                    <?php }?>
                    <?php if (get_the_date()): ?>
                    <li>Lunch Date: <?php echo get_the_date('M  dS, Y'); ?></li>
                    <?php endif;?>
                </ul>
                <p><a href="contact.html" class="btn btn-primary px-4 py-3">Get Details</a></p>
            </div>
        </div>
    </div>
    <?php endwhile; wp_reset_postdata();?>
    <?php else: ?>
    <h4>NO posts Here..</h4>
    <?php endif;
        $custom = ob_get_clean();
        return $custom;
}
add_shortcode('property_section', 'property_section');
 /* short-code for apartment  Start*/
function apartment_section($atts)
{
    ob_start();
    extract(shortcode_atts(array(
      'display' => -1,
    ), $atts));
    $args = array(
        'post_type' => 'apartment',
        'posts_per_page' => $display,
        'meta_query' => array(
            array(
                'key'     => 'browse_apartment',
                'value'   => 'yes',
                'compare' => '=',
            ),
        ),
    );
    $browseap = new WP_Query($args);
    if($browseap->have_posts()) { add_filter('the_content', 'wpautop'); $pagecount = $browseap->max_num_pages; $featured_post= [];  ?>
            <div class="row apart-list">
                <?php while($browseap->have_posts()): $browseap->the_post(); $featured_post[]= get_the_ID(); ?>
                    <div class="col-md-6 col-lg-3 my-3" data-aos-delay="100">
                        <a href="<?php echo get_the_permalink(); ?>" class="unit-9">
                        <?php $bgimage = get_the_post_thumbnail_url(get_the_ID(),'full'); ?> 
                            <div class="image" style="background-image: url('<?php echo $bgimage; ?>');"></div>
                            <div class="unit-9-content">
                                <h2><?php echo get_the_title(); ?></h2>
                                <?php if( get_field('price') ): ?>
                                    <span>$<?php the_field('price'); ?>/night</span>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); 
                if($browseap->post_count < 3){
                    $latestargs = array(
                        'post_type' => 'apartment',
                        'posts_per_page' => (3 - $browseap->post_count),
                        'post__not_in' => $featured_post,
                    );
                    $latestbrowseap = new WP_Query($latestargs);
                    if ($latestbrowseap->have_posts() ): ?>
                            <?php while($latestbrowseap->have_posts()): $latestbrowseap->the_post(); ?>
                                <div class="col-md-6 col-lg-3 my-3" data-aos-delay="100">
                                    <a href="<?php echo get_the_permalink(); ?>" class="unit-9">
                                    <?php $bgimage = get_the_post_thumbnail_url(get_the_ID(),'full'); ?> 
                                        <div class="image" style="background-image: url('<?php echo $bgimage; ?>');"></div>
                                        <div class="unit-9-content">
                                            <h2><?php echo get_the_title(); ?></h2>
                                            <?php if( get_field('price') ): ?>
                                                <span>$<?php the_field('price'); ?>/night</span>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                    <?php endif; } ?>
                
            </div>
            <?php if( is_front_page() ): ?>
                <div class="col-md-12 text-center mt-5">
                    <a href="<?php echo home_url(); ?>/apartments" class="btn btn-primary">Browse All Apartment</a>
                </div>
            <?php endif; ?>
            <?php if( $pagecount > 1 && !is_front_page() ): ?>
                <form id="loadmore-form-submit">
                    <input type="hidden" name="action" value="loadMorePostsFuncAjax" />
                    <input type="hidden" name="page-no" value="2" />
                    <input type="hidden" name="total-pages" value="<?php echo $pagecount;?>" />
                    <div class="loading-btn btn-center " style="display: none;"><img src="<?php echo get_stylesheet_directory_uri().'/images/loadmore.gif';?>" alt="loading-image" /> </div>
                    <div class="text-center btn-box"> 
                        <button type="submit" name="submit" class="btn btn-primary load-more load-more-btn"><span><?php _e('Load more','shade space'); ?></span></button>
                    </div>
                </form>
            <?php endif; ?>
        <?php } 
        else {
            echo __( 'No Results Found!', 'Apart' );
            }
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('apartment_section','apartment_section'); 

/* short-code for featured  Start*/
function featured_section($atts)
{
    ob_start();
    $a = shortcode_atts(array(
        'display' => -1,
    ), $atts);
    $args = array(
        'post_type' => 'apartment',
        'posts_per_page' => $a['display'],
        'meta_query' => array(
            array(
                'key' => 'featured_apartment',
                'value' => 'yes',
                'compare' => '=',
            ),
        ),
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()): ?>
        <div class="site-block-retro d-block d-md-flex ">
            <?php while ($loop->have_posts()): $loop->the_post();?>
                <a href="<?php echo get_the_permalink(); ?>" class="unit-9 w-100 mx-3" data-aos-delay="100">
                    <?php $bgimage = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
                    <div class="image" style="background-image: url('<?php echo $bgimage; ?>');"></div>
                    <div class="unit-9-content">
                        <h2><?php echo get_the_title(); ?> Apartment</h2>
                        <?php if (get_field('price')): ?>
                        <span>$<?php the_field('price');?>/night</span>
                        <?php endif;?>
                    </div>
                </a>
            <?php
            endwhile;
            wp_reset_postdata();?>
        </div>
    <?php else: ?>
        <h4>NO posts Here..</h4>
    <?php endif;
    $custom = ob_get_clean();
    return $custom;
}
add_shortcode('featured_section', 'featured_section');
/* short-code for testimonials  Start*/
function slick_testinomy_slider()
{
    ob_start();
    $args = array(
        'post_type' => 'Testimonials',
        'posts_per_page' => -1,
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()):
    ?>
    <div class="testimony-slider">
        <?php while ($loop->have_posts()): $loop->the_post();?>
        <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">
                <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
                <img src="<?php echo $image ?>" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-black">
                <h3 class="font-weight-light h5"><?php echo get_the_title(); ?></h3>
                <p class="font-italic"><?php echo get_the_content(); ?></p>
                <?php $author = get_post_meta(get_the_ID() , 'custom_input' , true); ?>
                <p>Author : <?php echo $author; ?></p>
            </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();?>  
    </div>
    <?php
    else: ?>

    <h4>NO posts Here..</h4>
    <?php
    endif;
        $custom = ob_get_clean();
        return $custom;
        
}
add_shortcode('slick_testinomy_slider', 'slick_testinomy_slider');
/* short-code for testimonials End*/
/* short-code for News Event Post Start*/
function news_event_section($atts)
{
    ob_start();
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $a = shortcode_atts(array(
        'display' => -1,
    ), $atts);
    $args = array(
        'paged' => $paged,
        'post_type' => 'post',
        'posts_per_page' => $a['display'],
    );
    $newsposts = new WP_Query($args);
    if ($newsposts->have_posts()) {add_filter('the_content', 'wpautop');
        $pagecount = $newsposts->max_num_pages;?>
    <div class="row">
        <?php while ($newsposts->have_posts()): $newsposts->the_post();?>
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
        <?php if (!is_front_page()): ?>
            <div class="text-center d-block w-100">
                <nav class="pagination-bar text-center">
                    <?php pagination_bar($newsposts);?>
                </nav>
            </div>
        <?php endif;?>
        <?php wp_reset_postdata();?>
    </div>
        <?php } else {
        echo __('No Results Found!', 'Apart');
        }
        wp_reset_postdata();
        return ob_get_clean();
}
add_shortcode('news_event_section', 'news_event_section');
/* Team Section shortcode start */
add_shortcode('our-team-sec', 'teamMembersSecFuntion');
function teamMembersSecFuntion()
{
    if (is_admin()) {
        return "connected...";
    }
    ob_start();
    $teamemArgs = array(
        'post_type' => 'team-members',
        'posts_per_page' => 6,
        'post_status' => 'publish',
    );
    $teamem = new WP_Query($teamemArgs);
    if ($teamem->have_posts()) {add_filter('the_content', 'wpautop');?> 
    <div class="row">
        <?php while ($teamem->have_posts()): $teamem->the_post();
        $image = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
                <img src="<?php echo $image ?>" alt="Image" class="img-fluid">
                <div class="text">
                    <h2 class="mb-2 font-weight-light h4">Megan Smith</h2>
                    <span class="d-block mb-2 text-white-opacity-05">Co Founder</span>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>
                    <p>
                        <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                        <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                        <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                    </p>
                </div>

            </div>
        </div>
        <?php endwhile;
            wp_reset_postdata();?>
    </div>
    <?php } else {
        echo __('No Results Found!', 'Apart');
    }
    wp_reset_postdata();
    return ob_get_clean();
}
/* Team Section shortcode End */
/* Pagination */

/*/---- Ajex Function For loadmore Browse Apartments ----/*/
add_action('wp_ajax_loadMorePostsFuncAjax', 'loadMorePostsFuncAjax');
add_action('wp_ajax_nopriv_loadMorePostsFuncAjax', 'loadMorePostsFuncAjax');
function loadMorePostsFuncAjax()
{
    if (!isset($_POST['page-no']) || empty($_POST['page-no'])) {
        echo 'No Results Found!';
        exit;
    }
    ob_start();

    $browseapArgs = array(
        'post_type' => 'apartment',
        'paged' => $_POST['page-no'],
        'posts_per_page' => 8,
        'post_status' => 'publish',
    );
    $browseap = new WP_Query($browseapArgs);
    if ($browseap->have_posts()) {add_filter('the_content', 'wpautop');
        $pagecount = $browseap->max_num_pages;?>
    <?php while ($browseap->have_posts()): $browseap->the_post();?>
    <div class="col-md-6 col-lg-3 my-3" data-aos-delay="100">
        <a href="<?php echo get_the_permalink(); ?>" class="unit-9">
            <?php $bgimage = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
            <div class="image" style="background-image: url('<?php echo $bgimage; ?>');"></div>

            <div class="unit-9-content">
                <h2><?php echo get_the_title(); ?></h2>
                <?php if (get_field('price')): ?>
                <span>$<?php the_field('price');?>/night</span>
                <?php endif;?>
                <!-- <span>with Wendy Matos</span> -->
            </div>
        </a>
    </div>
    <?php endwhile;?>
    <?php } else {
        echo __('No Results Found!', 'Apart');
    }
    wp_reset_postdata();
    echo ob_get_clean();
    exit;
}

/***********Pagination *************/
function pagination_bar($custom_query)
{

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

/* popular posts */
function setPostViews($postID)
{
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    } else {
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
function popular_post()
{
    ob_start();
    query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&
      order=DESC');
    if (have_posts()): while (have_posts()): the_post();
            ?>
    <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
    <?php
        endwhile;endif;
        wp_reset_query();
        $custom = ob_get_clean();
        return $custom;
}
add_shortcode('popular_post', 'popular_post');


/* Filter Category */
function filter_cat(){
  ob_start();
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'paged' => 1,
    'order' => 'ASC',
    'tax_query' => array(
          array(
              'taxonomy' => 'category',
              'field' => 'slug',
              'terms' => $_POST['slug'],
          ),
      ),
  );
  $loop = new WP_Query($args);
  if($loop->have_posts() ): ?>
    <div class="row news-list">
    <?php  while($loop->have_posts()): $loop->the_post(); ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos-delay="100">
              <?php $image = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>              
                  <a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="Image" class="img-fluid"></a>
                  <div class="p-4 bg-white">
                      <span class="d-block text-secondary small text-uppercase"><?php echo get_the_date( 'M  dS, Y' ); ?></span>
                      <h2 class="h5 text-black mb-3"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                  </div>
          </div>
      <?php endwhile; 
      wp_reset_postdata(); ?>
      </div>
      <?php
  endif; 
    echo $filter = ob_get_clean();
    exit;
   }
   add_action('wp_ajax_filter_category', 'filter_cat');
   add_action('wp_ajax_nopriv_filter_category', 'filter_cat');

   /* Customizer */
function apart_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'footer_copyright' , array(
        'title'             => 'Footer Copyright', 'apart',
        'priority'          => 160,
        'capability'  => 'edit_theme_options', //Capability needed to tweak
        'description' => __('information of copyright text', 'apart'), 
        
    ) );
    $wp_customize->add_setting('custom_theme_Css');
    $wp_customize->add_control( 'custom_theme_Css', array(
        'label'             => ('Custom Theme Css'),
        'type'           => 'textarea',
        'section'          => 'footer_copyright'
    ));
 }
 add_action( 'customize_register', 'apart_customize_register' );
/* custom menu page */

function wpdocs_register_my_custom_menu_page(){
    
    add_menu_page( 
        __( 'Custom Menu Title', 'apart' ),
        'Footer Information',
        'manage_options',
        'menu_page',
        'apart_custom_menu_page',
        '',
        6
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
/* Display */
function apart_custom_menu_page(){
    if(isset($_POST['submit'])){
        update_option('footer-about-title',$_POST['footer-about-title']);
        update_option('footer-about-text',$_POST['footer-about-text']);
    }  
    ?>
     <form method="post">
        <div class="title"><h4>Footer About Part</h4></div>
    <div style="margin-bottom:20px;">
    <input type="text" class="form-control border-secondary bg-transparent" name="footer-about-title" value="<?php echo get_option('footer-about-title'); ?>">
    </div>
    <div style="margin-bottom:20px;">
    <textarea  height="50" class="form-control border-secondary bg-transparent" name="footer-about-text" placeholder="footer about part"><?php echo get_option('footer-about-text'); ?></textarea>
    </div>
    <input type="submit" value="submit" name="submit">
    
    </form>
    <?php
}
if (function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title'    => __('About Information'),
        'menu_title'    => __('About Information'),
        'menu_slug'     => 'about-info',
        'capability'    => 'edit_posts',
        'redirect'      => false,
    ));
}

add_action( 'wp_ajax_blogFilteration', 'yspl_blogFilteration' );
add_action( 'wp_ajax_nopriv_blogFilteration', 'yspl_blogFilteration' );
function yspl_blogFilteration(){
    ob_start();
        $categories = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $_POST['slug'],
            ),
        );
        $args = array(
        'tax_query' => $categories,
        'post_type' => 'post',
        'posts_per_page' => 4,
        'paged' => 1,
        'order' => 'ASC'
        );
        $loop = new WP_Query($args);
        if( $loop->have_posts() ):
        ?>
        
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
        <?php endwhile; 

        endif;
        wp_reset_postdata();
        ?>
        <?php
        echo ob_get_clean();
        die;

}
/* option page section  */
function about_info_option_page(){
    ob_start();
    ?>
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php  the_field('about_image' , 'option'); ?>" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                         <?php if (get_field('title', 'option')): ?>
                            <h2 class="mb-5"><?php the_field('title', 'option');?></h2>
                        <?php endif;?>
                        <?php if (get_field('description', 'option')): ?>
                            <p><?php the_field('description', 'option');?></p>
                        <?php endif;?>
                        <h4 class="mt-4">Time Slot</h4>
                        <?php
                        // check if the repeater field has rows of data
                        if( have_rows('time_slot', 'option') ): ?>
                        <ul> <?php // loop through the rows of data
                            while ( have_rows('time_slot', 'option') ) : the_row(); ?>
                                <li> <?php the_sub_field('days_of_week', 'option');  ?> - <?php the_sub_field('opening_time', 'option');  ?> To <?php  the_sub_field('closing_time', 'option');  ?> </li>
                          <?php  endwhile; ?>
                        </ul> 
                     <?php else :
                            // no rows found
                        endif; ?>
                        
                    </div>
                </div>
            </div>
<?php 
$custom = ob_get_clean();
return $custom;
}
add_shortcode("about_info_option_page","about_info_option_page");

add_filter('wp_mail_smtp_custom_options', function( $phpmailer ) {
	$phpmailer->SMTPOptions = array(
		'ssl' => array(
			'verify_peer'       => false,
			'verify_peer_name'  => false,
			'allow_self_signed' => true
		)
	);

	return $phpmailer;
} );

