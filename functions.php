<?php

add_action('init', static function () {
    register_nav_menus([
        'grave-main-menu' => 'Grave\'s main menu',
    ]);
});
