<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="entete">
        <section class="global">
            <!-- <nav>
                <ul>
                    <li>Accueil</li>
                    <li>À propos</li>
                    <li>Contact</li>
                </ul>
            </nav> -->

            <?php wp_nav_menu(
                array(
                    "menu"=>"principal",
                    "container"=>"nav"
                )
            ) ?>
            <h1><?php bloginfo('name') ?></h1>
            <h2><?php bloginfo('description') ?></h2>
            <form action="" class="recherche">
                <input type="search" name="" id="">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=search" width="20" height="20" alt="">
            </form>
        </section>
    </header>