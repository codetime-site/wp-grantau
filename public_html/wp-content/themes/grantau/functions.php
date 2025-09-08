<?php
define("MY_ASSETS", get_template_directory_uri() . '/assets');
define("MY_JS", MY_ASSETS . '/scripts');
define("MY_CSS", MY_ASSETS . '/css');

add_action('wp_enqueue_scripts', 'init_scripts');
function init_scripts()
{
    wp_enqueue_style('default-style', MY_CSS . '/style.min.css', [], filemtime(MY_CSS . '/style.min.css'));
    wp_enqueue_script('all_scripts', MY_JS . '/scripts.js', [], filemtime(MY_JS . '/scripts.js'), true);
}


function get_my_title($abs)
{
    if ($abs){
        echo "<div class='section-header'><h2>" . wp_kses_post($abs) . "</h2> </div>";
        echo "<div class='section-divider'></div>";
    }
    else {
        echo "";
    }
}
function out_content($con){
    echo wp_kses_post( $con );
}

// add_action("init", "hellow");
