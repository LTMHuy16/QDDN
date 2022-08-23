<?php 

/**
 * 	SET UP MENU
 */
function qdn_setup() {
	load_theme_textdomain( 'qdn' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// Register Nav Menu
	register_nav_menu( 'primary', __( 'Primary Menu', 'qdn' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'qdn' ) );
	register_nav_menu( 'social', __( 'Social Menu', 'qdn' ) );
	register_nav_menu( 'company', __( 'Company Menu', 'qdn' ) );
}

add_action( 'after_setup_theme', 'qdn_setup' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * SET UP CSS FILES
 */
function qdn_styles() {
	wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); 

	wp_enqueue_style( 'font-icon', get_stylesheet_directory_uri() . '/assets/css/brands.min.css' );
	wp_enqueue_style( 'base', get_stylesheet_directory_uri() . '/assets/css/base.min.css' );
}

add_action( 'wp_enqueue_scripts', 'qdn_styles' );


/**
 * SET UP JAVASCRIP FILES
 */
function qdn_scripts() {
	wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), '', true);	
	wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js' , array(), '', true);		
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js' , array(), '', true);	
}

add_action( 'wp_enqueue_scripts', 'qdn_scripts' );


/**
 * ADD SETINGS FIELD IN NAVBAR ADMIN
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Header',
		'menu_title' 	=> 'Header',
		'redirect' 		=> false
	));   

	acf_add_options_page(array(
		'page_title' 	=> 'Footer',
		'menu_title' 	=> 'Footer',
		'redirect' 		=> false
	));


	acf_add_options_page(array(
		'page_title' 	=> 'Infomation',
		'menu_title' 	=> 'Infomation',
		'redirect' 		=> false
	));
}


/**
 * CUSTOMIZE MENU STRUCTURE (CLASS NAME)
 */
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function add_add_navbar_link ($attr) {
	$attr['class'] = 'header__link';
	return $attr;
}

add_filter('nav_menu_link_attributes', 'add_add_navbar_link');

// function your_submenu_class($menu) {
// 	$menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-content" /',$menu);  
// 	return $menu;  
// }

// add_filter('wp_nav_menu','your_submenu_class'); 


/**
 * CUSTOMIZE RETURNED VALUE IN CONTACT FORM 7 PLUGPIN
 */
function get_acf_cf7_object() {
    return true;
}

add_filter( 'acf_cf7_object', 'get_acf_cf7_object' );


/**
 * POST SETTINGS
 */
function get_excerpt($limit){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $limit);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	// $excerpt = $excerpt.'... <a href="'.get_the_permalink().'">more</a>';
	return $excerpt;
}

function excerpts_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}
	return 20;
}

add_filter( 'excerpt_length', 'excerpts_length', 99 );

function nelio_clickable_read_more( $more ) {
	if ( is_admin() ) {
		return $more;
	}
	return "";
}

add_filter( 'excerpt_more', 'nelio_clickable_read_more', 99 );