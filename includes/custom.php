<?php

// Function to call all custom post type Categories

function cpt_taxonomy() {
  $taxonomy = 'country';
  $cats = get_the_terms( get_the_ID() , $taxonomy);
  $count = count($cats);
  $i = 1;

  if ( $cats ) {
    foreach ( $cats as $cat ) {
      echo '<a href="';
      echo get_term_link($cat->slug, $taxonomy);
      echo '">';
      echo $cat->name;
      if ($i < $count) {
        echo ', ';
        $i++;
      };
      echo '</a>';
    }
  }
}
