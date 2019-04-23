<?php


if ( ! function_exists( 'bmi_setup' ) ) :

	function bmi_setup() {

	    load_theme_textdomain( 'bmi', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_image_size('leftRencentPost', 350, 234);
		add_image_size('product_cate', 160, 289);
		add_image_size('news_thumb', 223, 185);
		add_image_size('product_thumb', 223, 167);
		add_image_size('cate_product_thumb', 233, 166);
		add_image_size('home_cate_product', 255, 255);
		// Dich vu cua chung toi
		add_image_size('home_service', 540, 350);
		// Employee avatar
		add_image_size('employee_avatar', 250, 250);
		//Tin tuc noi bat
        add_image_size('home_news_slider', 160, 120);


		add_image_size('home_slider', 1349, 490);

		register_nav_menus( array(
			'menu-primary' => esc_html__( 'Primary Menu', 'bmi' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
//		add_theme_support( 'custom-background', apply_filters( 'bmi_custom_background_args', array(
//			'default-color' => 'ffffff',
//			'default-image' => '',
//		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 150,
			'width'       => 60,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}

endif;
add_action( 'after_setup_theme', 'bmi_setup' );

function post_image_sizes($sizes){
    $custom_sizes = array(
        'employee_avatar' => 'employee_avatar',
        'home_slider' => 'home_slider',
    );
    return array_merge( $sizes, $custom_sizes );
}
add_filter('image_size_names_choose', 'post_image_sizes');

require 'inc/helper.php';
require 'inc/config.php';

global $config;
$config = ConfigHelper::loadConfig();

function bmi_widgets_init() {

    register_sidebar( array(
        'name'          => esc_html__( 'Banner trái', 'bmi' ),
        'id'            => 'left-sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'bmi' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div style="display: none">',
        'after_title'   => '</div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Banner tin tức/Dự án phải', 'bmi' ),
        'id'            => 'right-sidebar-2',
        'description'   => esc_html__( 'Add widgets here.', 'bmi' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div style="display: none">',
        'after_title'   => '</div>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Banner trái sản phẩm', 'bmi' ),
        'id'            => 'left-sidebar-3',
        'description'   => esc_html__( 'Add widgets here.', 'bmi' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<div style="display: none">',
        'after_title'   => '</div>',
    ) );
	register_sidebar( array(
		'name'          => esc_html__( 'Banner trái', 'bmi' ),
		'id'            => 'left-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bmi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div style="display: none">',
		'after_title'   => '</div>',
	) );

}
add_action( 'widgets_init', 'bmi_widgets_init' );

function bmi_scripts() {
	wp_enqueue_style( 'bmi-style', get_stylesheet_uri() );

//	wp_enqueue_script( 'bmi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

//	wp_enqueue_script( 'bmi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bmi_scripts' );

// import shortcode

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);

//Define constants
define('SITE_URL', home_url());
define('AJAX_URL', admin_url('admin-ajax.php'));
define('PRODUCT_CATEGORY_THUMB',get_template_directory_uri() . '/assets/images/banner/banner-production.png');
define('NEWS_THUMB',get_template_directory_uri() . '/assets/images/default-news-thumbnail.jpg');
define('THEME_PATH', get_template_directory().'/');
define('THEME_URI', get_template_directory_uri().'/');
define('CHILD_URI', get_stylesheet_directory_uri().'/');


//Set content width
$content_width=1140;

//Load language files
//load_theme_textdomain('quangbinhtravel', THEME_PATH.'languages');


require 'inc/form-shortcode.php';
require 'inc/shortcode.php';
require 'inc/menu.php';
require 'inc/custom-field.php';
require 'inc/custom-column.php';
require 'inc/ajax.php';