<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); //permet de faire les include de css et de javascript en haut de la page dans le head. Inclus aussi le CSS des barres de navigation admin de Wordpress
    ?>
</head>

<body>
    <header class="entete">
        <section class="global">
            <div class="entete_titre">
                <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
                <h2><?php bloginfo('description') ?></h2>
            </div>
            <!-- <nav>
                <ul>
                    <li>Accueil</li>
                    <li>À propos</li>
                    <li>Contact</li>
                </ul>
            </nav> -->
            <div class="entete__menu">
                <?php wp_nav_menu(
                    array(
                        "menu" => "principal",
                        "container" => "nav"
                    )
                ) ?>
                <!-- <form action="" class="recherche">
                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=search" width="20" height="20" alt="">
                    <input type="search" name="" id="">
                </form> -->
                <?php get_search_form(); ?>
            </div>
            <h1><?php bloginfo('name') ?></h1>
            <h2><?php bloginfo('description') ?></h2>
        </section>
    </header>