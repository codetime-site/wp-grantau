<?php 
define("MY_ASSETS", get_template_directory_uri() . '/assets' );
define("MY_JS", MY_ASSETS . '/scripts');
define("MY_CSS", MY_ASSETS .'/css' );

add_action( 'wp_enqueue_scripts',  'init_scripts');
function init_scripts(){ 
    wp_enqueue_style( 'default-style', MY_CSS . '/style.min.css', [], filemtime( MY_CSS . '/style.min.css' ) );
    wp_enqueue_script( 'all_scripts', MY_JS .'/scripts.js', [], filemtime( MY_JS .'/scripts.js' ), true );
}
