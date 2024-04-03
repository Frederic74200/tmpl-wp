<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta charset="utf-8">
    <title><?php bloginfo('name') ?></title>
</head>

<body>

    <nav> <?php wp_nav_menu(array('theme_location' => 'menu_principal')) ?> </nav>

    <h1><?php the_title() ?> </h1>