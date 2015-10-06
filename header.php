<!DOCTYPE html >
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700" rel="stylesheet" type="text/css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?>>
<div style="display: none">
    <?php get_template_part('partials/svg'); ?>
</div>
<div class="header--fixed">
    <div class="wrapper">
        <div role="baner" class="header grid-layout">
            <div class="logo grid-layout__item u-3/12 u-1/1-palm">
                <svg viewBox="0 0 100 100" class="icon main-logo">
                    <use xlink:href="#shape-logo"></use>
                </svg>
                <p class="slogan">Centre Alpha</p></div>
            <div class="menu-container transition logo grid-layout__item u-9/12"><a title="Ouvrir la navigation"
                                                                                    href="#" class="open_nav">
                    <svg viewbox="0 0 64 64">
                        <line id="nav-line-1" x1="8" x2="56" y1="16" y2="16" class="nav-line"></line>
                        <line id="nav-line-2" x1="8" x2="56" y1="32" y2="32" class="nav-line"></line>
                        <line id="nav-line-3" x1="8" x2="56" y1="48" y2="48" class="nav-line"></line>
                        <line x1="16" x2="48" y1="16" y2="48" class="cross-line"></line>
                        <line x1="16" x2="48" y1="48" y2="16" class="cross-line"></line>
                        <rect width="42" height="42" x="11" y="11" class="rect"></rect>
                    </svg>
                </a>
                <?php
                $defaults = array(
                    'theme_location'  => 'header-menu',
                    'menu'            => '',
                    'container'       => 'ul',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'nav nav--block text--right',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                wp_nav_menu( $defaults );

                ?>
            </div>
        </div>
    </div>
</div>