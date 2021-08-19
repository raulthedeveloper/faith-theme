<?php

function load_css()
{
    wp_register_style('font-awesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),false,'all');
    wp_enqueue_style('font-awesome') ;



    wp_register_style( 'bootstrap', get_template_directory_uri(  ) . '/css/bootstrap/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
}


function load_js()
{
    wp_enqueue_script('jquery');

}

add_action( 'wp_enqueue_scripts', 'load_css' );

add_action( 'wp_enqueue_scripts', 'load_js' );


// Custom Image Size

add_image_size( 'blog-large', 800, 600, false );
add_image_size( 'blog-small', 300, 200, true );

// Theme Options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-logo');


add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

// Add Styles to next and previous post buttons
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-warning"';
}

// Menus

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-col-1' => 'Footer Column 1',
        'footer-col-2' => 'Footer Column 2',
        'footer-col-3' => 'Footer Column 3',
        'footer-col-4' => 'Footer Column 4',
        'footer-col-5' => 'Footer Column 5'
    )
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Register Side Bar
function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Donate Sidebar',
            'id' => 'donate-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
};

add_action( 'widgets_init', 'my_sidebars');