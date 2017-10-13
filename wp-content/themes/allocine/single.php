<?php get_header(); //appel du template header.php  ?>

<div id="content" class="container">
  <div class="row">
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
      <article class="col-sm-12">
        <?php
            if(has_post_thumbnail())
            {
              echo '<div class="thumbnail">';
                the_post_thumbnail("full");
              echo '</div>';
            }
         ?>
        <h1><?php the_title(); ?></h1>
        <h2>Posté le <?php the_time('F jS, Y') ?></h2>
        <p><?php the_content(); ?></p>
      </article>

    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
  </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>
