<?php

/**
 * index.php - Le modèle par défaut de Wordpress
 */
?>
<?php get_header(); ?>

<main class="principal">
    <section class="global">
        <h2>Liste de cours - Recherche</h2>
        <div class="principal__recherche">
            <?php if (have_posts()):   /*permet d'extraire les articles*/ ?>
                <?php while (have_posts()): the_post(); /* extrait un post */ ?>
                  
                    <article class="principal__article">
                        <h3>
                            <?php the_title(); /* fonctionne seulement si the_post() est exécuté  / get_ sont des fonctions qui retournent des chaines de caracteres*/ ?>
                        </h3>
                        <h4 class="principal__article--title">
                            <a href="<?php the_permalink(); ?>">
                                 <?php the_title() /* fonctionne seulement si the_post() est exécuté  / get_ sont des fonctions qui retournent des chaines de caracteres*/ ?>
                            </a>
                        </h4>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, null);   /* fonctionne seulement si the_post() est exécuté */ ?></p>
                    </article>
                <?php endwhile; ?>
        </div>
    <?php endif ?>
    </section>
</main>
<?php get_footer() ?>