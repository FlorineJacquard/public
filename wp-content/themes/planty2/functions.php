<?php
/* enqueue scripts and style from parent theme */        
function twentytwenty_styles() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_styles');

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    // Vérifie si le menu en cours de traitement correspond au menu du header nommé "header"
    // Et si l'utilisateur est connecté
    if ($args->menu->name == 'header' && is_user_logged_in()) {
        // Ajoute le lien "Admin" au menu avec l'URL spécifiée
        $items .= '<li id="menu-item-admin"><a href="/admin">Admin</a></li>';
    }
    return $items;
}
function changer_couleur_h1() {
    // Vérifier si nous sommes sur la page "/nous-rencontrer"
    if (is_page('nous-rencontrer')) {
        // Ajouter du CSS pour changer la couleur du h1 en bleu et définir le padding
        echo '<style>
            h1 {
                color: #D2776A !important;
				background: url(http://localhost:10008/wp-content/uploads/2024/04/feuille-2.png);
				background-repeat: no-repeat;
				background-position: left;
				background-size: 130px; 
				padding: 90px 70px 10px 70px;
            }
			.entry-header.has-text-align-center.header-footer-group {
				padding: 50px 0px 0px 0px !important;
			}
			.wp-image-117 {
				background-color:#ECE2DA;
			}
			@media screen and (max-width: 644px) {
				h1 {
					background: transparent;
				}
				.entry-header.has-text-align-center.header-footer-group {
					padding: 0;
				}
				}
        </style>';
    }
	if (is_page('commander')) {
        // Ajouter du CSS pour changer la couleur du h1 en bleu et définir le padding
        echo '<style>
            h1 {
                color: white !important;
            }
			.entry-header.has-text-align-center.header-footer-group {
				background-color: #3B8E46;
			}
			.entry-content {
				background-color: #3B8E46;
			}
			.entry-header.has-text-align-center.header-footer-group {
				padding-bottom: 0 !important;
        </style>';
    }
}
add_action('wp_head', 'changer_couleur_h1');



?>
