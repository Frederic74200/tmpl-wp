<?php



// Gestion des menus
function enregistre_mon_menu()
{
    register_nav_menu('menu_principal', __('Menu principal'));
}

// afficher favicon en logo 
function afficher_icone_site()
{
    $icone_theme_url = '';


    $icone_theme_url = get_theme_mod('custom_site_icon');


    if ($icone_theme_url) {
        return '<img src="' . $icone_theme_url . '" alt="Icône du site" />';
    } else {
        return '<img src="' . get_site_icon_url() . '" alt="Icône du site" />';
    }
}

// débloquer Gutenberg 




add_action('init', 'enregistre_mon_menu');
add_action('init', 'afficher_icone_site');
