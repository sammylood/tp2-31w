  <?php
  /**
   *Article de la page d'Acceuil - MODIFIER LA CATÉGORIE A AFFICHER DANS DANS modifie_requete_principal FONCTION.PHP
   */
  ?>
  <article class="principal__article">
    <?php if (has_post_thumbnail()) : ?>
      <figure class="article__figure">
        <?php the_post_thumbnail('thumbnail'); ?>
      </figure>
    <?php endif; ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_excerpt(); /*echo wp_trim_words(get_the_excerpt(), 20, null);    fonctionne seulement si the_post() est exécuté */ ?></p>
  </article>