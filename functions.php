<?php

function load_css()
{
    wp_register_style('font-awesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array(),false,'all');
    wp_enqueue_style('font-awesome') ;

    wp_register_style( 'bootstrap', get_template_directory_uri(  ) . '/css/bootstrap/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');


    wp_register_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owlcarousel');

    wp_register_style('owlcarouseltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('owlcarouseltheme');

    wp_register_style('aos', get_template_directory_uri() . '/css/aos.css',array(),false,'all');
    wp_enqueue_style('aos');



    wp_register_style( 'sass', get_template_directory_uri(  ) . '/dist/app.css', [], 1, 'all' );
    wp_enqueue_style( 'sass' );

   
}


function load_js()
{
    wp_enqueue_script('jquery');


    wp_register_script('bootstrap_scripts',get_template_directory_uri() . '/js/bootstrap.bundle.min.js',null,null,true);
    wp_enqueue_script('bootstrap_scripts');

    wp_register_script('jquery_pagination',get_template_directory_uri() . '/dist/scripts/jQuery.paginate.min.js','jquery',null,true);
    wp_enqueue_script("jquery_pagination");

    wp_register_script('aos_script', get_template_directory_uri() . '/js/aos.js',null,null,true);
    wp_enqueue_script("aos_script");



    wp_register_script('owl_script',get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js',null,null,true);
    wp_enqueue_script('owl_script');

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
    return 'class="btn btn-warning m-3"';
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



function templateImage($image, $alt=false){
    if($alt){
        echo get_field($image)['alt'];
      }
      elseif(get_field($image)){
        echo get_field($image)['sizes']['blog-large'];
      }
      else{
        echo get_template_directory_uri() . "/images/unavailable-image.jpeg" ;
      }
}



function templateFeaturedImage($image){
    $unavailableImage = get_template_directory_uri() . "/images/unavailable-image.jpeg";

    if($image){
        echo $image;
    }else{
        echo"<img class=\"img-fluid\"  src=\"{$unavailableImage}
        \" alt=\"unavailable image\">" ;
    }
}



