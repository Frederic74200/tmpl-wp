<?php

// Gestion des menus --------------------------------------------------------- 
function enregistre_mon_menu()
{
    register_nav_menu('menu_principal', __('Menu principal'));
}


function mon_menu_footer()
{
    register_nav_menu('menu-footer', __('menu-footer'));
}


// afficher  logo -------------------------------------
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



// Gestion des menus --------------------------------------------------------- 
add_action('init', 'enregistre_mon_menu');
add_action('after_setup_theme', 'mon_menu_footer');

// afficher  logo -------------------------------------
add_action('init', 'afficher_icone_site');
