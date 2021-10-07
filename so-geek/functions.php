<?php

if ( !defined( 'ABSPATH' ) ) exit;



/*
Función provisional para sustituir temporalmente 
las acciones de la BD. Borrar al finalizar el proyecto.
*/

$sg_options = array(
	'sg_no_scroll_readmore_link' => 1,
	'sg_article_show_cat' => 1,
	'sg_article_show_date' => 1,
	'sg_article_show_author' => 1,
	'sg_article_show_thumbnail' => 1,
	'sg_article_button_more' => 1,
	'sg_more_text' => 'Read More',
	'sg_more_text_position' => 'right',
);

function sg_get_option( $var = '' , $return = false ) {

	global $sg_options;

	$res = 'Nada';

	if( $sg_options[$var] )
		$res = $sg_options[ $var ];
	
	return $res;
}

/*
Path constants. Used along the filesystem
*/

define( 'sg_tp' , 'sg-tp' );
define( 'sg_tp_parts' , 'sg-tp/parts' );
define( 'sg_tp_content' , 'sg-tp/parts/content' );

/*
Little function to scan specific directories looking for PHP files 
to include/require them. Useful and timesaver.
*/

function sg_scan_files( $folder ) {
	$dir = dirname( __FILE__ ) . '/' . $folder .'/';
	$files = scandir( $dir );

	foreach( $files as $arc ) {
		if( pathinfo( $arc , PATHINFO_EXTENSION ) == 'php' )
			include $dir . $arc;
	}
}

/*
Include PHP files at /inc directory
*/

sg_scan_files( 'inc' );



add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

load_theme_textdomain( 'so-geek' );

add_action( 'wp_enqueue_scripts' , 'sg_enqueue_styles' );

function sg_enqueue_styles() {
	wp_enqueue_style( 'sg-root' , get_template_directory_uri() . '/assets/css/root.css' , null , null , false );
	wp_enqueue_style( 'sg-bootstrap' , get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css' , null , null , false );
	// wp_enqueue_style( 'sg-custom-bootstrap' , get_template_directory_uri() . '/assets/css/custom-bootstrap.css' , null , null , false );
	wp_enqueue_style( 'sg-default' , get_template_directory_uri() . '/style.css' , null , null , false );
	wp_enqueue_style( 'css-base' , get_template_directory_uri() . '/assets/css/base.css' , null , null , false );
	wp_enqueue_style( 'css-main' , get_template_directory_uri() . '/assets/css/main.css' , null , null , false );
}

add_action( 'wp_enqueue_scripts' , 'sg_enqueue_scripts' );

function sg_enqueue_scripts() {
	wp_enqueue_script( 'sg-jquery-keymap' , get_template_directory_uri() . '/lib/jquery-keymap/jquery-keymap.js' , array( 'jquery' ) , null , true );
	wp_enqueue_script( 'js-main' , get_template_directory_uri() . '/assets/js/main.js' , array( 'jquery' ) , null , true );
}

if ( ! function_exists( 'sg_register_nav_menu' ) ) {
 
	add_action( 'after_setup_theme' , 'sg_register_nav_menu' , 0 );

	function sg_register_nav_menu() {
		register_nav_menus( array(
			'primary_menu' => __( 'Main Menu' , 'so-geek' ),
			'footer_menu'  => __( 'Footer Menu' , 'so-geek' ),
		) );
	}
}

add_action( 'widgets_init', 'sg_sidebars' );

function sg_sidebars() {

	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Main Menu', 'so-geek' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets into this area will be displayed at the Main Menu.', 'so-geek' ),
			)
		)
	);

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer', 'so-geek' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets into this area will be displayed at the Footer.', 'so-geek' ),
			)
		)
	);

}

/*
Prevent Page Scroll When Clicking the More Link
Documented at https://codex.wordpress.org/Customizing_the_Read_More
*/

if( true == sg_get_option( 'sg_no_scroll_readmore_link' , true ) )
	add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}