<?php

/**
 * template name: Pays
 * template-pays.php - Le modèle par défaut de Wordpress
 */
?>
<?php get_header(); ?>

<main class="principal">
    <section class="global">
        <h2>Template pays</h2>
        <div class="principal__conteneur">
            <?php if (have_posts()):   /*permet d'extraire les articles*/ ?>
                <?php while (have_posts()): the_post(); /* extrait un post */ ?>

                    <article class="principal__article">
                        <h1><?php the_title();   /* fonctionne seulement si the_post() est exécuté */ ?></h1>
                        <?php the_post_thumbnail('medium'); /* Pour afficher l'image mis en avant */ ?>
                        <p><?php the_content();   /* fonctionne seulement si the_post() est exécuté */ ?></p>
                        <p><?php the_field('adresse_evenement');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                        <p><?php the_field('date_evenement');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                    </article>
                <?php endwhile; ?>
        </div>
    <?php endif ?>
    </section>
</main>
<?php get_footer() ?>