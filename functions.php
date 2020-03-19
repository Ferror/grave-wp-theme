<?php

add_action('init', static function () {
    register_nav_menus([
        'grave-main-menu' => 'Grave\'s main menu',
    ]);
});

add_action('customize_register', static function (WP_Customize_Manager $wp_customize) {
    $wp_customize->add_section('grave_section' , [
        'title' => 'Grave section title',
        'priority' => 30,
    ]);
    $wp_customize->add_setting('grave_footer_author', [
        'default' => 'Zbigniew (Ferror) Malcherczyk',
    ]);
    $wp_customize->add_setting('grave_footer_link', [
        'default' => 'https://github.com/ferror',
    ]);
    $wp_customize->add_control('grave_control_footer_author', [
        'label' => 'Grave footer author',
        'section' => 'grave_section',
        'settings' => 'grave_footer_author',
    ]);
    $wp_customize->add_control('grave_control_footer_link', [
        'label' => 'Grave footer link',
        'section' => 'grave_section',
        'settings' => 'grave_footer_link',
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
