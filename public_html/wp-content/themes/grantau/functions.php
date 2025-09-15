<?php

define('CONTACT', get_template_directory_uri() . 'contact/');
define("MY_ASSETS", get_template_directory_uri() . '/assets');
define("MY_JS", MY_ASSETS . '/scripts');
define("MY_CSS", MY_ASSETS . '/css');

// setting var acf
function settinfPage($var)
{
    return get_field($var, 'option');
}
add_action('init', 'settinfPage');


add_action('wp_enqueue_scripts', 'init_scripts');
function init_scripts()
{
    wp_enqueue_style('default-style', MY_CSS . '/style.min.css', [], filemtime(MY_CSS . '/style.min.css'));
    wp_enqueue_style('fontello', MY_ASSETS . '/fonts/fontello/css/fontello.css', [], );
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap', [], null);
    wp_enqueue_script('all_scripts', MY_JS . '/scripts.js', [], filemtime(MY_JS . '/scripts.js'), true);
    // добавить preconnect

    add_filter('wp_resource_hints', function ($urls, $relation_type) {
        if ($relation_type === 'preconnect') {
            $urls[] = 'https://fonts.googleapis.com';
            $urls[] = 'https://fonts.gstatic.com'; // Если шрифты загружаются с gstatic
        }
        return $urls;
    }, 10, 2);
}



function get_my_title($abs)
{
    if ($abs) {
        echo "<div class='section-header'><h2>" . wp_kses_post($abs) . "</h2> <div class='section-divider'> </div></div>";
    } else {
        echo "";
    }
}

// registr menu  

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале'
    ]);
});

function out_content($con)
{
    echo wp_kses_post($con);
}

// add_action("init", "hellow");
