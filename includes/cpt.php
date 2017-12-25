<?php

  // CUSTOM POST TYPES FOR EACH GENERATION

  function create_post_type() {
    register_post_type('siblings', array(
      'labels' => array(
        'name' => 'Systkini',
        'singular_name' => 'Sibling'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'menu_icon' => 'dashicons-groups',
      'supports' => array('title', 'thumbnail')
    ));
    register_post_type('children', array(
      'labels' => array(
        'name' => 'Börn',
        'singular_name' => 'Children'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-universal-access',
      'supports' => array('title', 'thumbnail')
    ));
    register_post_type('grandchildren', array(
      'labels' => array(
        'name' => 'Barnabörn',
        'singular_name' => 'Grandchild'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 6,
      'menu_icon' => 'dashicons-image-filter',
      'supports' => array('title', 'thumbnail')
    ));
    register_post_type('partners', array(
      'labels' => array(
        'name' => 'Partners',
        'singular_name' => 'Partner'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 7,
      'menu_icon' => 'dashicons-universal-access-alt',
      'supports' => array('title', 'thumbnail')
    ));
  }
  add_action('init', 'create_post_type');


  // CREATE TAXONOMIES FOR CUSTOM POST TYPES

  function create_taxonomy(){
    register_taxonomy(
      'country',
      array(
        'siblings',
        'children',
        'grandchildren',
        'partners'
      ),
      array(
        'labels' => array(
          'name' => 'Country of residence'
        ),
        'hierarchical' => true,
        'show_admin_column' => true
      )
    );
  };
  add_action('init', 'create_taxonomy');


  // CREATE A MENU TO SHOW ALL CPT TYPES

  function show_cpt_menu() {
    // Define the arguments
    $args = array(
      'public' => true,
      '_builtin' => false
    );

    $post_types = get_post_types($args, 'names');

    // Output all lists
    echo '<div class="cpt-menu-blocks">';
      foreach ($post_types as $post_type) { ?>
        <div class="col-xs-12 col-sm-6">
          <div class="family-box">
            <h3>
              <a href="<?php echo get_post_type_archive_link($post_type); ?>">
              <?php echo ucfirst($post_type); ?>
              </a>
            </h3>
            <p>
              <?php
              // Get the family members for each generation
              $posts = get_posts(array(
                'post_type' => $post_type,
                'post_status' => 'publish',
                'numberposts' => -1,
                'meta_key' => 'date_of_birth',
                'orderby' => 'meta_value',
                'order' => 'ASC'
              ));
              // Extra variables
              $count = count($posts);
              $i = 1;
              foreach ($posts as $postlist) { ?>
                <a href="<?php the_permalink($postlist->ID); ?>">
                  <?php
                    echo $postlist->post_title;
                    if ($i < $count) {
                      echo ', ';
                      $i++;
                    }
                  ?>
                </a>
              <?php } ?>
            </p>
          </div>
        </div>
      <?php }
    echo '</div>';
}
