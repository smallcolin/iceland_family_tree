<?php get_header();

  if (have_posts()) :
    while (have_posts()) : the_post();

      echo '<h2>This is the family tree basic archive.php';

    endwhile;
  endif;

get_footer(); ?>
