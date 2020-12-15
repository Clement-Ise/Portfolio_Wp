<?php
//Ajout de photos en image mis en avant 
add_theme_support('post-thumbnails');

//Ajout du menu
function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );

//Ajout feuille de style et script en attente
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('normalize', get_template_directory_uri().'/dist/css/normalize.css', 'false','','all');
    wp_enqueue_style('style1', get_template_directory_uri().'/dist/css/style1.css', get_template_directory_uri().'/dist/css/normalize.css','','all');
    wp_enqueue_style('responsive', get_template_directory_uri().'/dist/css/responsive.css', '','','all');
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js',array(),'3.5.1',);
    wp_enqueue_script('script', get_template_directory_uri().'/dist/js/script.js', array('gsap'),'',true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
