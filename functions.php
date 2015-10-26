<?php

/**
 * load my style and script;
 */
function theme_name_scripts()
{
    wp_enqueue_style('daniel', get_stylesheet_directory_uri() . '/css/main.css');
    wp_enqueue_script('modernzr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/js/slider.js', array('jquery'), '1.0.0', true);
}

function gkp_html_minify_start()
{
    ob_start('gkp_html_minyfy_finish');
}

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Main'),
            'liens_utiles' => __('Liens utiles'),
        )
    );
}

function new_nav_menu_items($items, $arg)
{
    $first = true;
    if (($arg->theme_location === 'header-menu') && ($first)) {
        $homelink = '<li class=""><a href="' . home_url('/') . '">' . __('Home') . '</a></li>';
        $items = $homelink . $items . '<li class="morphsearch"><a href="#" title="faire une recherche" class="morphsearch__btn"><svg viewBox="0 0 100 100" class="icon icon--search">
                        <use xlink:href="#shape-search"></use>
                    </svg></a>' . get_search_form(false) . '</li>';
        return $items;
    }
    $first = false;
    return $items;
}

function create_post_type()
{
    register_post_type('Accueil',
        array(
            'labels' => array(
                'name' => __('Accueil'),
                'singular_name' => __('Accueil')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => false,
            'menu_icon' => 'dashicons-admin-home'
        )
    );
    register_post_type('slider',
        array(
            'labels' => array(
                'name' => __('slider'),
                'singular_name' => __('slider')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => ['title'],
            'menu_icon' => 'dashicons-slides'
        )
    );
    register_post_type('equipe',
        array(
            'labels' => array(
                'name' => __('Membres'),
                'singular_name' => __('Membre')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => ['title'],
            'menu_icon' => 'dashicons-admin-users'
        )
    );
    register_post_type('contact',
        array(
            'labels' => array(
                'name' => __('Personnes de contact'),
                'singular_name' => __('contact')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => ['title'],
            'menu_icon' => 'dashicons-nametag'
        )
    );
    register_post_type('tarifs',
        array(
            'labels' => array(
                'name' => __('tarifs'),
                'singular_name' => __('Tarifs')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => false,
            'menu_icon' => 'dashicons-tickets-alt'
        )
    );
    register_post_type('institutions',
        array(
            'labels' => array(
                'name' => __('institutions'),
                'singular_name' => __('Institutions')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => false,
            'menu_icon' => 'dashicons-id'
        )
    );
}

function my_function_admin_bar()
{
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

function people_init()
{
    register_taxonomy(
        'Formations',
        'equipe',
        array(
            'label' => __('Formations'),
            'show_ui' => true,
            'show_in_quick_edit' => true,
            'hierarchical' => true,
            'show_in_menu' => false
        )
    );
    register_taxonomy(
        'Fonctions',
        'equipe',
        array(
            'label' => __('Fonctions'),
            'show_ui' => true,
            'show_in_quick_edit' => true,
            'hierarchical' => true,
            'show_in_menu' => false
        )
    );
    register_taxonomy(
        'team',
        'equipe',
        array(
            'label' => __('Équipe'),
            'show_ui' => true,
            'show_in_quick_edit' => true,
            'hierarchical' => true,
            'show_in_menu' => false
        )
    );
    register_taxonomy(
        'ouverture_de_dossier',
        'tarifs',
        array(
            'label' => __('Associer à un service'),
            'show_ui' => true,
            'show_in_quick_edit' => true,
            'hierarchical' => true,
            'show_in_menu' => false
        )
    );
}

/*
 * Clean admin Panel
 */


function custom_menu_page_removing() {
    remove_menu_page( 'index.php' ); //Dashboard
    remove_menu_page( 'edit.php' ); // Posts
    remove_menu_page( 'tools.php' ); // Tools
    remove_menu_page( 'edit-comments.php' ); //Comments
    remove_menu_page( 'users.php' ); //Users
    remove_menu_page( 'upload.php' ); //Media
    remove_menu_page( 'themes.php' ); // Apparance
    remove_menu_page( 'plugins.php' ); //Plugins
    remove_menu_page( 'options-general.php' ); //Settings
    remove_menu_page( 'edit.php?post_type=acf' ); //ACF
}

add_action( 'admin_init', 'custom_menu_page_removing' );
add_action('init', 'people_init');
add_action('init', 'create_post_type');
add_action('wp_enqueue_scripts', 'theme_name_scripts');
add_action('get_header', 'gkp_html_minify_start');
add_action('init', 'register_my_menus');
add_filter('show_admin_bar', 'my_function_admin_bar');
add_filter('wp_nav_menu_items', 'new_nav_menu_items', 10, 2);
