<?php
/**********************************************************************************
Call includes file
**********************************************************************************/
include( get_stylesheet_directory() .'/includes/customizer.php' );

/**********************************************************************************
wpmu_register_menus - register menus
**********************************************************************************/

function wpmu_register_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Primary' ) )
  );
}
add_action( 'init', 'wpmu_register_menus' );

/**********************************************************************************
wpmu_widgets_init - register widgets
**********************************************************************************/
function wpmu_widgets_init() {
	// widget area in header
	register_sidebar (array(
		'name'          => __('Header Widget Area','rm'),
		'id'            => "header-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// main sidebar
	register_sidebar (array(
		'name'          => __('Sidebar','rm'),
		'id'            => "sidebar-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// first footer widget area
	register_sidebar (array(
		'name'          => __('First Footer Widget Area','rm'),
		'id'            => "footer-first-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// second footer widget area
	register_sidebar (array(
		'name'          => __('Second Footer Widget Area','rm'),
		'id'            => "footer-second-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// third footer widget area
	register_sidebar (array(
		'name'          => __('Third Footer Widget Area','rm'),
		'id'            => "footer-third-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
	// fourth footer widget area
	register_sidebar (array(
		'name'          => __('Fourth Footer Widget Area','rm'),
		'id'            => "footer-fourth-widget-area",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>' )
		);
}
add_action('init', 'wpmu_widgets_init');

/**********************************************************************************
wpmu_theme_support - adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
**********************************************************************************/

function wpmu_theme_support() {

	/* post formate */
	add_theme_support( 'post-formats', array( 'aside', 'quote' ) );

	/*post thumbnails */
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

	/* HTML5 */
	add_theme_support( 'html5' );

	/* automatic feed links */
	add_theme_support( 'automatic-feed-links');

}
add_action( 'after_setup_theme', 'wpmu_theme_support' );

function our_excerpt_more( $more ) {
	return '  <a href="<?php the_permalink(); ?>" class="button">Read More...</a>
		<br/>';
}
add_filter( 'excerpt_more', 'our_excerpt_more' );

// Google fonts
function google_fonts() {
  $query_args = array(
    'family' => 'Open+Sans:400,700',
    'subset' => 'latin, latin-ext'
  );
  wp_register_style( 'google_fonts', add_query_arg( $query_args, '//fonts.googleapis.com/css' ), array(), null );
}

add_action( 'wp_enqueue_scripts', 'google_fonts' );

function enqueue_our_required_stylesheets(){
    wp_enqueue_style('font-awesome', 'https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

?>
