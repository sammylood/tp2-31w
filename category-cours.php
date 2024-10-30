<?php

/**
 * index.php - Le modèle par défaut de Wordpress
 */
?>
<?php get_header(); ?>

<main class="principal">
    <section class="global">
        <h2>Liste de cours - category-cours.php</h2>
        <div class="principal__conteneur">
            <?php if (have_posts()):   /*permet d'extraire les articles*/ ?>
                <?php while (have_posts()): the_post(); /* extrait un post */ ?>
                    <?php
                    $chaine = get_the_title();
                    $sigle = substr($chaine, 0, 7);
                    $titre = substr($chaine, 8, stripos($chaine, "(") - 8);
                    ?>
                    <?php
                    $chaine = get_the_title();
                    $sigle = substr($chaine,0,7);
                    $position_parentheses = strpos($chaine, '(');
                    $titre = substr($chaine, 7, $position_parentheses-7);
                    $duree = substr($chaine, $position_parentheses);

                    ?>
                    <article class="principal__article">
                        <h3>
                            <?php echo $sigle; /* fonctionne seulement si the_post() est exécuté  / get_ sont des fonctions qui retournent des chaines de caracteres*/ ?>
                        </h3>
                        <h4 class="principal__article--title">
                            <?php echo $titre; /* fonctionne seulement si the_post() est exécuté  / get_ sont des fonctions qui retournent des chaines de caracteres*/ ?>
                        </h4>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, "... suite");   /* fonctionne seulement si the_post() est exécuté */ ?></p>
                        <h5>Durée: <?php echo $duree ?></h5>
                        <!-- Insérer des liens et rendre le css plus uniforme -->
                    </article>
                <?php endwhile; ?>
        </div>
    <?php endif ?>
    </section>
</main>
<?php get_footer() ?>