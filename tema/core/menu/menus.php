<?php


if (!file_exists(__DIR__ . '/class-wp-bootstrap-navwalker.php')) {
    // file does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // file exists... require it.
    require_once __DIR__ . '/class-wp-bootstrap-navwalker.php';
}


add_action('init', 'register_menus'); // Add Menu

// Register Navigation
function register_menus()
{
    register_nav_menus(array(
        'header-menu-level-0' => __('Menu topo'), // Main Navigation
        'header-menu' => __('Menu principal'), // Main Navigation
    ));
}


// navigation
function menu0()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'header-menu-level-0',
            'depth'             => 1,
            'container'         => 'div',
            'container_class'   => 'navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-0',
            'menu_class'        => 'nav navbar-nav navbar-right menu-principal navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        )
    );
}


// navigation
function menu1()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'header-menu',
            'depth'             => 3,
            'container'         => 'div',
            'container_class'   => 'navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav navbar-right menu-principal navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        )
    );
}
