<?php

add_action('init', static function () {
    register_nav_menus([
        'grave-main-menu' => 'Grave\'s main menu',
    ]);
});

function clean_custom_menus($args = [])
{
    $menuLocation = $args['theme_location'];
    $locations = get_nav_menu_locations();

    if ($locations && isset($locations[$menuLocation])) {
        $menu = wp_get_nav_menu_object($locations[$menuLocation]);
        $menuItems = wp_get_nav_menu_items($menu->term_id);

        $menuList = '<nav>' ."\n";
        $menuList .= "\t\t\t\t". '<ul>' ."\n";

        foreach ((array) $menuItems as $key => $menuItem) {
            $menuList .= "\t\t\t\t\t". '<li><a href="'. $menuItem->url .'">'. $menuItem->title .'</a></li>' ."\n";
        }

        $menuList .= "\t\t\t\t". '</ul>' ."\n";
        $menuList .= "\t\t\t". '</nav>' ."\n";
    }

    echo $menuList;
}
