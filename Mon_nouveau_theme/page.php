<?php
// Inclure l'en-tête du thème
get_header(); ?>
<h2 class="file">page.php</h2>
<?php
// Vérifier s'il y a des articles à afficher
if (have_posts()) :
    // Boucle pour parcourir les articles
    while (have_posts()) : the_post(); ?>

        <article>
            <h1><?php the_title(); ?></h1>
            <div class="article-content"> <?php the_content(); ?> </div>
        </article> <?php endwhile;
            else : ?>

    <p>Aucun article trouvé.</p> <?php endif; ?>
<?php
// Inclure le pied de page du thème
get_footer(); ?>