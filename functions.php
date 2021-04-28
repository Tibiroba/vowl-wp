<?php

//Suporte de menus do wordpress

//add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

/*function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}*/

//Adicionar menu global do Wordpress

register_nav_menus(
	array(
			'top-menu' => 'Top Menu',
	)
	);

//tamanho de imagens
add_image_size('post_image', 1100, 750, true);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



//widgets sidebar


register_sidebar(
	array(
		'name' => 'Page Sidebar',
		'id' => 'page-sidebar',	
		'class' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	)
);





function load_css(){

	wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('stylesheet');
	wp_register_style('custom', get_template_directory_uri() . '/app.css', array(), false, 'all');
	wp_enqueue_style('custom');

	wp_enqueue_script('Raleway', get_template_directory_uri() . '/src/fonts/Raleway.woff2', array(), false, 'all');
	wp_enqueue_script('DancingScript');
	wp_enqueue_script('NotoSans-Regular', get_template_directory_uri() . '/src/fonts/NotoSans-Regular.woff2', array(), false, 'all');
	wp_enqueue_script('NotoSans-Regular');
	
}

add_action('wp_enqueue_scripts', 'load_css');


function load_js(){

	wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, 'all');
	wp_enqueue_script('custom');

	
}

add_action('wp_enqueue_scripts', 'load_js');


//widgets sidebar


?>