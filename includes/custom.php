<?php

// Function to list out custom post type Categories

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

// Pagination stuff

  function paginator(){
    $args = array(
      'show_all' => true,
      'prev_next' => false
    );

    if (get_previous_posts_link() || get_next_posts_link()) { ?>
      <nav class="pagination">
        <!-- Previous button -->
        <?php if (get_previous_posts_link()) : ?>
          <button class="btn btn-danger">
            <span class="pages">
              <i class="fa fa-caret-left" aria-hidden="true"></i>
              <?php previous_posts_link('Previous'); ?>
            </span>
          </button>
        <?php endif; ?>
        <!-- Pagination pages button -->
        <?php if (get_the_posts_pagination()) { ?>
          <span class="pages-numbers">
            <?php echo paginate_links($args); ?>
          </span>
        <?php } ?>
        <!-- Next button -->
        <?php if (get_next_posts_link()) : ?>
          <button class="btn btn-danger">
            <span class="pages">
              <?php next_posts_link('Next'); ?>
              <i class="fa fa-caret-right" aria-hidden="true"></i>
            </span>
          </button>
        <?php endif; ?>
      </nav>
    <?php }
  }
