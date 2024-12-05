<?php

/**
 * index.php - Le modèle par défaut de Wordpress
 */
?>
<?php get_header(); ?>

<main class="principal">
    <?php

    get_template_part('template-parts/customizer', 'hero');
    ?>

    <section class="global">
        <h2>Front-page.php</h2>
        <div class="principal__conteneur">
            <?php if (have_posts()):   /*permet d'extraire les articles*/ ?>
                <?php while (have_posts()): the_post(); /* extrait un post */ ?>
                    <?php
                    
                    get_template_part('template-parts/article', 'favorites');
                    
                    ?>
                    
                <?php endwhile; ?>
        </div>
    <?php endif ?>
    </section>
</main>
<?php get_footer() ?>