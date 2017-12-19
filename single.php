<?php get_header();


  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <section class="single-person">
      <div class="container">
        <h3>
          <?php the_title(); ?>
        </h3>
        <p>
          <?php the_content(); ?>
        </p>
      </div>
    </section>
    <?php endwhile;
  endif;

get_footer(); ?>
