<?php get_header();

  if (have_posts()) :
    while (have_posts()) : the_post();
      the_title();
      echo '<h2>This is yer single.php';

    endwhile;
  endif;

get_footer(); ?>
