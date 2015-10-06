<?php

/**
 * load my style and script;
 */
function theme_name_scripts()
{
    wp_enqueue_style('daniel', get_stylesheet_directory_uri() . '/css/main.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js',array( 'jquery' ),'1.0.0',true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/js/slider.js',array( 'jquery' ),'1.0.0',true);
}


function gkp_html_minify_start()
{
    ob_start('gkp_html_minyfy_finish');
}
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Main ' )
        )
    );
}
function new_nav_menu_items($items) {
    $homelink = '<li class="main-vavigation__link main-vavigation__link--home"><a href="' . home_url( '/' ) . '">' . __('Home') . '</a></li>';
    $items = $homelink . $items;
    return $items;
}

function create_post_type() {
    register_post_type( 'Accueil',
        array(
            'labels' => array(
                'name' => __( 'Accueil' ),
                'singular_name' => __( 'Accueil' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports'=>false
        )
    );
    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'slider' ),
                'singular_name' => __( 'slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports'=>['title']
        )
    );
}

function my_function_admin_bar(){
    return false;
}
function gkp_html_minyfy_finish($html)
{

    // Suppression des commentaires HTML,
    // sauf les commentaires conditionnels pour IE
    $html = preg_replace('/<!--(?!s*(?:[if [^]]+]|!|>))(?:(?!-->).)*-->/s', '', $html);

    // Suppression des espaces vides
    $html = str_replace(array("\r\n", "\r", "\n", "\t"), '', $html);
    while (stristr($html, '  '))
        $html = str_replace('  ', ' ', $html);
    while (stristr($html, '> <'))
        $html = str_replace('> <', '><', $html);

    return $html;
}
add_action( 'init', 'create_post_type' );
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
add_action('wp_enqueue_scripts', 'theme_name_scripts');
add_action('get_header', 'gkp_html_minify_start');
add_action( 'init', 'register_my_menus' );
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items' );
