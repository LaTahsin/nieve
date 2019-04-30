<?php
function neive_enqueue(){
    wp_enqueue_style('GoogleFont','https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i',null,null,microtime(),'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', null,microtime(),'all');
    wp_enqueue_style( 'themefy', get_template_directory_uri().'/css/themify-icons.css', null,microtime(),'all');
    wp_enqueue_style( 'lightbox', get_template_directory_uri().'/css/lightbox.css', null,microtime(),'all');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/css/owl.carousel.min.css', null,microtime(),'all');
    wp_enqueue_style( 'owl-carousel-default', get_template_directory_uri().'/css/owl.theme.default.css', null,microtime(),'all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.cs', null,microtime(),'all');
    wp_enqueue_style( 'slicknav', get_template_directory_uri().'/css/slicknav.min.css', null,microtime(),'all');
    wp_enqueue_style( 'reset', get_template_directory_uri().'/css/reset.css', null,microtime(),'all');
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css', null,microtime(),'all');
    wp_enqueue_style( 'single-blog', get_template_directory_uri().'/css/single-blog.css', null,microtime(),'all');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css', null,microtime(),'all');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.min.css', null,microtime(),'all');
    wp_enqueue_style( 'styletheme', get_stylesheet_uri());



    wp_enqueue_script( 'jquery',get_template_directory_uri().'/js/jquery.min.js',null,microtime(), true );
    wp_enqueue_script( 'bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',null,microtime(), true );
    wp_enqueue_script( 'slicknav-js',get_template_directory_uri().'/js/jquery.slicknav.min.js',null,microtime(), true );
    wp_enqueue_script( 'owl-carousel-js',get_template_directory_uri().'/js/owl.carousel.min.js',null,microtime(), true );
    wp_enqueue_script( 'waypoint-js',get_template_directory_uri().'/js/jquery.waypoints.min.js',null,microtime(), true );
    wp_enqueue_script( 'lightbox-js',get_template_directory_uri().'/js/lightbox.js',null,microtime(), true );
    wp_enqueue_script( 'mixitup-js',get_template_directory_uri().'/js/mixitup.min.js',null,microtime(), true );
    wp_enqueue_script( 'singlepageNav-js',get_template_directory_uri().'/js/jquery.singlePageNav.min.js',null,microtime(), true );
    wp_enqueue_script( 'main-js',get_template_directory_uri().'/js/main.js',null,microtime(), true );
}
add_action('wp_enqueue_scripts','neive_enqueue');
?>