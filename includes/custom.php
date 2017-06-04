<?php

  // Function to call all custom post type Categories

	function cpt_taxonomy(){
		$taxonomy = 'siblings_category';
		$terms = get_terms($taxonomy, array('hide_empty' => false));

		if ( $terms ) {
		    foreach ( $terms as $term ) { ?>
		        <a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?> </a>
			<?php };
		}
	}


// Function to call only the selected post type Categories

function cpt_categories() {
  $taxonomy = 'siblings_category';
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
