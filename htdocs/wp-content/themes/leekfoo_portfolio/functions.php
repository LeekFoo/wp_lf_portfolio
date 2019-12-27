<?php
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

function custom_scripts(){
  wp_enqueue_script( 'custom_script', get_template_directory_uri() .'/js/custom.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts' , 'custom_scripts' );

function load_google_cdn() {
  if ( !is_admin() ){
    //jQueryを登録解除
    wp_deregister_script( 'jquery' );
    
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), NULL, false);
  }
}
add_action( 'init', 'load_google_cdn' );