<?php

/**
 * index.php - Le modèle par défaut de Wordpress
 */
?>
<?php get_header(); ?>

<main class="principal">
    <section class="global">
        <h2>Liste de cours </h2><code>404.php</code>
        <div class="principal__404">
            <h1>Erreur 404</h1>
            <?php
            $chaine = get_the_title();
            $sigle = substr($chaine, 0, 7);
            $titre = substr($chaine, 8, stripos($chaine, "(") - 8);
            ?>
            <?php
            $chaine = get_the_title();
            $sigle = substr($chaine, 0, 7);
            $position_parentheses = strpos($chaine, '(');
            $titre = substr($chaine, 7, $position_parentheses - 7);
            $duree = substr($chaine, $position_parentheses);

            ?>
            <?php
            // wp_nav_menu(array(
            //     "menu" => "erreur404",
            //     "container" => "nav"
            // ));

            $args = array(
                'category_name' => "cours",
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article>
                        <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a> </p>
                    </article>
                <?php endwhile; ?>
        </div>
    <?php endif ?>
    </section>
</main>
<?php get_footer() ?>