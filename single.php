<?php get_header();

  if (have_posts()) :
    while (have_posts()) : the_post();
      the_title();
      echo '<h2>Individual persons should be found here but something has gone wrong</h2>';

    endwhile;
  endif;

get_footer(); ?>
