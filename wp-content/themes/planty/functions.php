<?php
/* enqueue scripts and style from parent theme */        
function twentytwenty_styles() {
    // Inclure le CSS du thème parent
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Inclure votre propre CSS
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/theme.css' );
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_styles' );




add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    // Vérifie si le menu en cours de traitement correspond au menu du header nommé "header"
    // Et si l'utilisateur est connecté
    if ($args->menu->name == 'header' && is_user_logged_in()) {
        // Ajoute le lien "Admin" au menu avec l'URL spécifiée
        $items .= '<li id="menu-item-admin"><a href="http://localhost:10008/admin">Admin</a></li>';
    }
    return $items;
}





/*
add_filter( 'wp_nav_menu', 'add_extra_item_to_nav_menu', 10, 2 );

function add_extra_item_to_nav_menu( $menu, $args ) {
    // Vérifie si le menu en cours de traitement correspond au menu du header nommé "header"
    // Et si l'utilisateur est connecté
    if ($args->menu->name == 'header' && is_user_logged_in()) {
        // Crée l'élément de menu pour "Admin"
        $admin_item = '<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://localhost:10008/admin">Admin</a></li>';

        // Trouve la position de "commander" dans le menu
        $commander_position = strpos($menu, 'id="menu-item-44"');

        // Insère l'élément "Admin" juste avant "commander"
        if ($commander_position !== false) {
            // Construire l'élément menu "Admin" avec les mêmes classes que les autres éléments du menu
            $admin_item = str_replace('<li ', '<li class="menu-item menu-item-type-custom menu-item-object-custom ', $admin_item);

            // Supprime l'élément de menu "commander" existant
            $menu = substr_replace($menu, '', $commander_position, strlen('id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">'));

            // Insère l'élément "Admin" à la position de "commander"
            $menu = substr_replace($menu, $admin_item, $commander_position, 0);
        }
    }
    return $menu;
}
*/



?>
