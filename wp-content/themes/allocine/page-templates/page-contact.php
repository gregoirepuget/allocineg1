<?php
/*
Template Name: Page contact
*/
get_header();
?>
<main>
  <div class="container">
    <div class="row">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <h1 class="col-xs-12"><?php the_title(); ?></h1>
            <div class="col-xs-12">
              <?php the_content(); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </div>
</main>


<?php get_footer(); ?>
