<?php

/**
 * index.php - Le modèle par défaut de Wordpress
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>31W</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="entete">
        <section class="global">
            <nav>
                <ul>
                    <li>Accueil</li>
                    <li>À propos</li>
                    <li>Contact</li>
                </ul>
            </nav>
            <h1>31W</h1>
            <form action="" class="recherche">
                <input type="search" name="" id="">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=search" width="20" height="20" alt="">
            </form>
        </section>
    </header>
    <main class="principal">
        <section class="global"></section>
        <h2>Acceuil</h2>
        <?php if (have_posts()):   /*permet d'extraire les articles*/ ?>
            <?php while (have_posts()): the_post(); /* extrait un post */ ?>
                <article class="principal__article">
                    <h2> 
                        <?php echo get_the_title(); /* fonctionne seulement si the_post() est exécuté  / get_ sont des fonctions qui retournent des chaines de caracteres*/ ?>
                    </h2>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, null);   /* fonctionne seulement si the_post() est exécuté */ ?></p>
                </article>
            <?php endwhile; ?>
        <?php endif ?>
    </main>
    <footer class="pied">
        <section class="global">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </section>
    </footer>
    <?php wp_footer() ?>
</body>

</html>