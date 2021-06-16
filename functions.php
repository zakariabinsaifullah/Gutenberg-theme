<?php
/**
 * Theme's Main Function 
 */

if ( ! defined( 'GMB_VERSION' ) ) {
	define( 'GMB_VERSION', '1.0.0' );
}

/**
 * theme init
 * @return [type] [description]
 */

function gbm_theme_ini() {

	load_theme_textdomain( 'guten-minimal', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 150,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Header Menu', 'guten-minimal' ),
		)
	);

}
add_action( 'after_setup_theme', 'gbm_theme_ini' );

/**
 * Theme Assets Enqueue 
 */

function gbm_theme_assets() {

	/**
	 * Google Fonts
	 */
	wp_enqueue_style( 'google-mulish-font', '//fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400&display=swap' );
	wp_enqueue_style( 'google-cookie-font', '//fonts.googleapis.com/css2?family=Cookie&display=swap' );

	/**
	 * Styles Enqueue
	 */
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri().'/inc/assets/css/bootstrap.grid.min.css', array(), false, 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/inc/assets/css/font-awesome.min.css', array(), false, 'all' );
	wp_enqueue_style( 'guten-minimal', get_stylesheet_uri(), array(), GMB_VERSION );
	wp_enqueue_style( 'theme-core', get_template_directory_uri().'/inc/assets/css/theme-core.css', array(), false, 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri().'/inc/assets/css/responsive.css', array(), false, 'all' );

	/**
	 * Scripts Enqueue
	 */
	wp_enqueue_script( 'theme-core', get_template_directory_uri().'/inc/assets/js/theme-core.js', array( 'jquery' ), GMB_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'gbm_theme_assets' );

/**
 * Sidebar Registration 
 */

function gbm_theme_sidebars(){

	// Primary Sidebar
 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'guten-minimal' ),
			'id'            => 'primary_sidebar',
			'description'   => esc_html__( 'Add primary sidebar widgets here.', 'guten-minimal' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s primary_single_widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title primary_widget_title">',
			'after_title'   => '</h4>',
		)
	);

	// Footer Sidebar
 
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'guten-minimal' ),
			'id'            => 'footer_widgets',
			'description'   => esc_html__( 'Add footer widgets here.', 'guten-minimal' ),
			'before_widget' => '<div id="%1$s" class="col-md-4 col-sm-12 widget %2$s footer_single_widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title footer_widget_title">',
			'after_title'   => '</h4>',
		)
	);

}
add_action( 'widgets_init', 'gbm_theme_sidebars' );


/**
 * Common Functions
 */
function pagainate_link_function(){
    global $wp_query;
    echo paginate_links(array(
        'current'=>max(1,get_query_var('paged')),
        'total'=>$wp_query->max_num_pages,
        'type'=>'list', //default it will return anchor
        'prev_text' => '<i class="fa fa-long-arrow-left"></i>',
        'next_text' => '<i class="fa fa-long-arrow-right"></i>',
    ));
}

// Conditional CSS 
function gmb_conditional_css(){
	if(has_custom_logo()){
		?>
		<style>
			@media screen and (max-width: 600px){
				.site_logo {
					transform: translateY(0);
				}
				.mobile_menu_bar {
					transform: translateY(15px);
				}
				.search_icon {
					transform: translateY(15px);
				}
				h2.site_title {
					transform: translateY(10);
				}
				.mobile_menu {
					top: 33px;
				}
			}
		</style>
	<?php 
		
	}else {
		?>
		<style>
			@media screen and (max-width: 600px){
				.site_logo {
					transform: translateY(0);
				}
				.mobile_menu_bar {
					transform: translateY(0);
				}
				.search_icon {
					transform: translateY(0);
				}
				h2.site_title {
					transform: translateY(0);
				}
				.mobile_menu {
					top: -1px;
				}
			}
		</style>
	<?php 
		
	}
}
add_action('wp_head', 'gmb_conditional_css');

/**
 * Customizer File 
 */

require get_template_directory().'/inc/customizer.php'; 