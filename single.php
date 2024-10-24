<?php

/**
 * index.php - Le modèle par défaut de Wordpress
 */
?>
<?php get_header(); ?>

<main class="principal">
    <section class="global">
        <h2>Liste de cours - Single.php</h2>
        <div class="principal__conteneur">
            <?php if (have_posts()):   /*permet d'extraire les articles*/ ?>
                <?php while (have_posts()): the_post(); /* extrait un post */ ?>
                    <?php
                    $chaine = get_the_title();
                    $sigle = substr($chaine, 0, 7);
                    $titre = substr($chaine, 8, stripos($chaine, "(") - 8);
                    ?>
                    <article class="principal__article">
                        <h2>
                            <?php the_title() /* fonctionne seulement si the_post() est exécuté  / get_ sont des fonctions qui retournent des chaines de caracteres*/ ?>
                        </h2>
                        <?php the_content()   /* fonctionne seulement si the_post() est exécuté */ ?>
                    </article>
                <?php endwhile; ?>
        </div>
    <?php endif ?>
    </section>
</main>
<?php get_footer() ?>