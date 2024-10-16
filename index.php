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
    <header>
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
    <main>
        <section class="global"></section>
        <h2>Acceuil</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis impedit magni debitis sit fugit dolor labore asperiores vel exercitationem possimus laborum, quas, ipsam reiciendis nulla quia. Voluptatibus reiciendis iste ipsa.</p>
    </main>
    <footer>
        <section class="global">
            <div>1</div>
            <div>2</div>
            <div>3</div>
        </section>
    </footer>
    <?php wp_footer() ?>
</body>
</html>