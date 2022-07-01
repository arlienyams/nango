<?php

/***********************************
    Theme Setup
 ***********************************/
function nango_resources()
{
	//post-formats
	add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery', 'quote', 'link'));

	//featured images
	add_theme_support('post-thumbnails');
	add_image_size('full-image', 1200, 675, true);
	add_image_size('slider-image', 1400, 500, true);
	add_image_size('mckinley-banner', 1400, 200, true);
	add_image_size('home-project', 380, 440, true);
	add_image_size('news-image', 350, 230, true);
	add_image_size('photo-gallery', 260, 200, true);
	add_image_size('video-gallery', 360, 250, true);
	add_image_size('membership', 380, 300, true);
	add_image_size('photo-home', 500, 200, true);
	add_image_size('out-team', 200, 200, true);


	//navigation menu
	add_theme_support('menus');

	/* Switch default core markup for search form, comment form, and comments to output valid HTML5. */
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
}
add_action('after_setup_theme', 'nango_resources');





/************************************
	Enqueue scripts and styles
 ************************************/
function nango_scripts()
{
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('nango-steel-css', get_template_directory_uri() . '/css/nango.css');
	wp_enqueue_style('nango-secondary-css', get_template_directory_uri() . '/css/secondary.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('slider-css', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style('navigation-main-css', get_template_directory_uri() . '/css/navigation-main.css', false, '1', 'all');


	wp_enqueue_script('jquery-bootstrap', get_theme_file_uri() . '/js/jquery-3.4.1.slim.min.js');
	wp_enqueue_script('popper-js', get_theme_file_uri() . '/js/popper.min.js');
	wp_enqueue_script('bootstrap-js', get_theme_file_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('slider-js', get_theme_file_uri() . '/js/owl.carousel.min.js');
	wp_enqueue_script('vanilla-js', get_theme_file_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts', 'nango_scripts');





/************************************
	Navigation Menus
 ************************************/
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'secondary' => __('Secondary Menu'),
	'what-we-do' => __('What We Do Menu'),
	'quick-links' => __('Quick Links Menu'),
	'related-links' => __('Related Links Menu'),
));


// Change Image Editor Library Used by WordPress
// www.wpbeginner.com/wp-tutorials/how-to-fix-the-http-image-upload-error-in-wordpress
function wpb_image_editor_default_to_gd($editors)
{
	$gd_editor = 'WP_Image_Editor_GD';
	$editors = array_diff($editors, array($gd_editor));
	array_unshift($editors, $gd_editor);
	return $editors;
}
add_filter('wp_image_editors', 'wpb_image_editor_default_to_gd');





/************************************
	Bread Crumb
 ************************************/
function get_breadcrumb()
{
	echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
	if (is_category() || is_single()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
		the_category(' &bull; ');
		if (is_single()) {
			echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
			the_title();
		}
	} elseif (is_page()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
		echo the_title();
	} elseif (is_search()) {
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
		echo '"<em>';
		echo the_search_query();
		echo '</em>"';
	}
}




/************************************
	Slider Post Type
 ************************************/
function nango_slider_post_type()
{
	register_post_type(
		'Slider',
		array(
			'labels' => array(
				'name' => __('Slider'),
				'singular_name' => __('Slider'),
				'add_new_item' => 'Add New Slider',
				'add_new' => __('Add New Slider'),
				'attributes' => __('Slider Attributes', 'text_domain'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'slider'
			),
			'supports' => array(
				'title',
				'thumbnail'
				// 'custom-fields'
			),
			'menu_position' => 5,
			'menu_icon' => __('dashicons-controls-repeat')
		)
	);
}
add_action('init', 'nango_slider_post_type');



/************************************
	What we Do Post Type
 ************************************/
function we_do_post_type()
{
	register_post_type(
		'we_do',
		array(
			'labels' => array(
				'name' => __('What we do'),
				'singular_name' => __('What we do'),
				'add_new_item' => 'Add New things we do',
				'add_new' => __('Add New things we do'),
				'attributes' => __('What we do Attributes', 'text_domain'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'what-we-do'
			),
			'supports' => array(
				//'title',
				//'thumbnail'
				// 'custom-fields'
			),
			'menu_position' => 5,
			'menu_icon' => __('dashicons-editor-expand')
		)
	);
}
add_action('init', 'we_do_post_type');

/************************************
	Current Programmes Post Type
 ************************************/
function current_programmes_post_type()
{
	register_post_type(
		'current_programmes',
		array(
			'labels' => array(
				'name' => __('Programmes'),
				'singular_name' => __('Programmes'),
				'add_new_item' => 'Add New Programmes',
				'add_new' => __('Add New Programmes'),
				'attributes' => __('Programmes Attributes', 'text_domain'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'current_programmes'
			),
			'supports' => array(
				'title',
				'thumbnail'
				// 'custom-fields'
			),
			'menu_position' => 6,
			'menu_icon' => __('dashicons-portfolio')
		)
	);
}
add_action('init', 'current_programmes_post_type');



/************************************
	Contact-details Post Type
 ************************************/
function contact_details_post_type()
{
	register_post_type(
		'contact-details',
		array(
			'labels' => array(
				'name' => __('Contact Details'),
				'singular_name' => __('Contact Details'),
				'add_new_item' => 'Add New Contact Details',
				'add_new' => __('Add New Contact Details'),
				'attributes' => __('Contact Details Attributes', 'text_domain'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'contact_details'
			),
			'supports' => array(
				//'title',
				//'thumbnail'
				// 'custom-fields'
			),
			'menu_position' => 5,
			'menu_icon' => __('dashicons-controls-repeat')
		)
	);
}
add_action('init', 'contact_details_post_type');


/************************************
	Events Post Type
 ************************************/
function events_post_type()
{
	register_post_type(
		'Events',
		array(
			'labels' => array(
				'name' => __('Events'),
				'singular_name' => __('Events'),
				'add_new_item' => 'Add New Event',
				'add_new' => __('Add New Event'),
				'attributes' => __('Events Attributes', 'text_domain'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'events'
			),
			'supports' => array(
				'title',
				//'thumbnail'
				'custom-fields'
			),
			'menu_position' => 5,
			'menu_icon' => __('dashicons-controls-repeat')
		)
	);
}
add_action('init', 'events_post_type');


/************************************
	Thematic Sector Post Type
 ************************************/

function cptui_register_my_cpts_thematic_sector()
{

	/**
	 * Post Type: thematic secror type.
	 */

	$labels = array(
		"name" => __("Thematic Sector", "custom-post-type-ui"),
		"singular_name" => __("thematic sector", "custom-post-type-ui"),
	);

	$args = array(
		"label" => __("thematic-sector", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array("slug" => "thematic-sector", "with_front" => true),
		"query_var" => true,
		"supports" => array("title"),
		"taxonomies" => array("thematic_sector_type"),
		'menu_icon' => __('dashicons-businessperson'),
	);

	register_post_type("thematic_sector", $args);
}

add_action('init', 'cptui_register_my_cpts_thematic_sector');




function cptui_register_my_taxes()
{

	/**
	 * Taxonomy: Personal Insurance Type.
	 */

	$labels = array(
		"name" => __("Thematic Sector Type", "custom-post-type-ui"),
		"singular_name" => __("thematic sector type", "custom-post-type-ui"),
	);

	$args = array(
		"label" => __("Thematic Sector Type", "custom-post-type-ui"),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array('slug' => 'thematic_sector_type', 'with_front' => true,),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "thematic_sector_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
	);
	register_taxonomy("thematic_sector_type", array("thematic_sector"), $args);
}
add_action('init', 'cptui_register_my_taxes');
