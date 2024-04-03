<?php

/**
 * Template header
 *
 * @package FredCode74
 */





?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  

    <header>
        <div id="logo"><?php echo afficher_icone_site() ?> </div>
        <nav> <?php wp_nav_menu(array('theme_location' => 'menu_principal')) ?> </nav>
    </header>
    <main>