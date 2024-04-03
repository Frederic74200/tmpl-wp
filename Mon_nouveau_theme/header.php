<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="<?= get_template_directory_uri(); ?>/assets/js/main.js" type="module"></script>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header>
        <div id="logo"><?php echo afficher_icone_site() ?> </div>
        <div id=sitetiltle>
            <p class="sitename"><?php bloginfo('name'); ?></p>
            <p class="sitedesc"><?php bloginfo('description'); ?></p>
        </div>
        <div id="btn-area">
            <div id="toggle-mode"></div>
            <div id="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>

        <nav> <?php wp_nav_menu(array('theme_location' => 'menu_principal')) ?> </nav>
    </header>

    <aside class="sidebar">
        <h2 class="h2Sidebar">Les derniers articles</h2>

        <?php
        $args = [
            'post_type' => 'post',
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :

                $query->the_post();

        ?>
                <article class="post">

                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>


                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <aside class="post-aside">De <?php the_author_link(); ?>, le <?= get_the_date() ?> Dans <?php the_category(', ') ?></aside>

                </article>
        <?php

            endwhile;
        endif;

        ?>

    </aside>

    <main>