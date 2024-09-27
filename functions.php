<?php
/**
 * rj-mhm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rj-mhm
 */

if ( ! defined( 'RJ_MHM_VERSION' ) ) {
	define( 'RJ_MHM_VERSION', '1.0.0' );
}

function rj_mhm_setup() {
	load_theme_textdomain( 'rj-mhm', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'rj-mhm' ),
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

	add_theme_support(
		'custom-background',
		apply_filters(
			'rj_mhm_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'rj_mhm_setup' );

function rj_mhm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rj_mhm_content_width', 640 );
}
add_action( 'after_setup_theme', 'rj_mhm_content_width', 0 );

function rj_mhm_scripts() {
	wp_enqueue_style( 'rj-mhm-style', get_stylesheet_uri(), array(), RJ_MHM_VERSION );
	wp_enqueue_style( 'rj-slick', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), RJ_MHM_VERSION );
	wp_style_add_data( 'rj-mhm-style', 'rtl', 'replace' );

	wp_enqueue_script( 'rj-mhm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), RJ_MHM_VERSION, true );
	wp_enqueue_script( 'rj-mhm-jquery', get_template_directory_uri() . '/assets/js/jquery-min.js', array(), RJ_MHM_VERSION, true );
	wp_enqueue_script( 'rj-mhm-slick', get_template_directory_uri() . '/assets/js/owl.carousel.js', array(), RJ_MHM_VERSION, true );
	wp_enqueue_script( 'rj-mhm-custom', get_template_directory_uri() . '/assets/js/rj-custom.js', array(), RJ_MHM_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rj_mhm_scripts' );

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function rj_mhm_register_next_workshop_post_type() {
    $labels = array(
        'name'               => _x( 'Next Workshop', 'next workshop general name' ),
        'singular_name'      => _x( 'Next Workshop', 'next workshop singular name' ),
        'menu_name'          => _x( 'Next Workshop', 'admin menu' ),
        'name_admin_bar'     => _x( 'Next Workshop', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'next workshop' ),
        'add_new_item'       => __( 'Add New Next Workshop' ),
        'new_item'           => __( 'New Next Workshop' ),
        'edit_item'          => __( 'Edit Next Workshop' ),
        'view_item'          => __( 'View Next Workshop' ),
        'all_items'          => __( 'All Next Workshops' ),
        'search_items'       => __( 'Search Next Workshops' ),
        'parent_item_colon'  => __( 'Parent Next Workshops:' ),
        'not_found'          => __( 'No next workshops found.' ),
        'not_found_in_trash' => __( 'No next workshops found in Trash.' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'next-workshop' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'next-workshop', $args );
}
add_action( 'init', 'rj_mhm_register_next_workshop_post_type' );


function rj_mhm_widgets_init() {
	$widgets_area =
		array(
			'Footer One' => 'Footer column one',
			'Footer Two' => 'Footer column second',
			'Footer Three' => 'Footer column third',
			'Footer Four' => 'Footer column fourth',
			'Copyright Text' => 'Copyright Text',
		);

	foreach ($widgets_area as $name => $description) {
		register_sidebar( array(
			'name'          => $name,
			'id'            => strtolower(str_replace(' ', '-', $name)),
			'description' =>  $name,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="section-main-head">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'rj_mhm_widgets_init' );