<?php

function nieve_init(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('reviewer-img',96,100,true);
    register_nav_menus(array(
        'primary_menu'=>'Primary Menu'
    ));
}

add_action( 'after_setup_theme','nieve_init');

//enqueue scripts
require('inc/enqueue-scripts.php');
//redux
require_once('inc/redux-framework-master/redux-framework.php');
require_once('inc/nieve-options.php');
//custom post
require_once('inc/custom-post.php');
//cmb2
require_once __DIR__ . '/inc/cmb2/init.php';
require_once('inc/cmb2-options.php');
//custom excerpt
function nieve_excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit);
}

//register sidebar & widgets
require_once('inc/widgets.php');
//-------------
function nieve_fallback_menu(){
    ?>
        <ul class="single-page-nav">
            <li><a class="home" href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Testimonial</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    <?php
}
//----------activate plugins---------------
require_once('inc/plugin-activation.php');
?>