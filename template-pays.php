<?php

/**
 * template name: Pays
 * template-pays.php - Le modèle par défaut de Wordpress
 */
?>
<?php get_header(); ?>

<main class="principal">
    <section class="global">
        <div class="principal__conteneur">
            <?php if (have_posts()):   /*permet d'extraire les articles*/ ?>
                <?php while (have_posts()): the_post(); /* extrait un post */ ?>

                    <article class="principal__article">
                        <h1><?php the_title();   /* fonctionne seulement si the_post() est exécuté */ ?></h1>
                        <p><?php the_content();   /* fonctionne seulement si the_post() est exécuté */ ?></p>
                        <p><?php echo "Nombre de personnes: ";
                            the_field('nombre_de_personnes');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                        <p><?php echo "Date de départ : ";
                            the_field('la_date_de_depart');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                        <p><?php echo "Date de retour: ";
                            the_field('la_date_de_retour');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                        <?php echo do_shortcode('[extraire_pays]'); ?>

                    </article>
                <?php endwhile; ?>
        </div>
    <?php endif ?>
    </section>
</main>
<?php get_footer() ?>