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
                        <?php the_post_thumbnail('medium'); /* Pour afficher l'image mis en avant */ ?>
                        <p><?php the_content();   /* fonctionne seulement si the_post() est exécuté */ ?></p>
                        <p><?php echo "Nombre de personnes: ";
                            the_field('nombre_de_personnes');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                        <p><?php echo "Date de départ (personne 1): ";
                            the_field('la_date_de_depart');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                        <p><?php echo "Date de départ (personne 2): ";
                            the_field('la_date_de_depart_2');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                        <p><?php if (the_field('la_date_de_depart_3')) {
                                echo "Date de départ (personne 3): ";
                            }
                            the_field('la_date_de_depart_3');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                        <p><?php if (the_field('la_date_de_depart_4')) {
                                echo "Date de départ (personne 4): ";
                            }
                            the_field('la_date_de_depart_4');   /* Ajouté avec l'application ACF au template evenement */ ?></p>
                        <?php echo do_shortcode('[extraire_pays]'); ?>
                        <?php echo do_shortcode('[extraire_categories]'); ?>
                    </article>
                <?php endwhile; ?>
        </div>
    <?php endif ?>
    </section>
</main>
<?php get_footer() ?>