<?php

  // CUSTOM POST TYPES FOR EACH GENERATION

  function create_post_type() {
    register_post_type('siblings', array(
      'labels' => array(
        'name' => 'Siblings',
        'singular_name' => 'Sibling'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'menu_icon' => 'dashicons-groups',
      'supports' => array('thumbnail')
    ));
    register_post_type('children', array(
      'labels' => array(
        'name' => 'Children',
        'singular_name' => 'Children'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-universal-access',
      'supports' => array('thumbnail')
    ));
    register_post_type('grandchildren', array(
      'labels' => array(
        'name' => 'Grandchildren',
        'singular_name' => 'Grandchild'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 6,
      'menu_icon' => 'dashicons-image-filter',
      'supports' => array('thumbnail')
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
      'supports' => array('thumbnail')
    ));
  }
  add_action('init', 'create_post_type');


  // CREATE TAXONOMIES FOR CUSTOM POST TYPES

  function create_taxonomy(){
    register_taxonomy(
      'siblings_category',
      'siblings',
      array(
        'labels' => array(
          'name' => 'Sibling Categories'
          ),
          'hierarchical' => true,
          'show_admin_column' => true,
        )
    );
    register_taxonomy(
      'children_category',
      'children',
      array(
        'labels' => array(
          'name' => 'Children Categories'
          ),
          'hierarchical' => true,
          'show_admin_column' => true,
        )
    );
    register_taxonomy(
      'grandchildren_category',
      'grandchildren',
      array(
        'labels' => array(
          'name' => 'Grandchildren Categories'
          ),
          'hierarchical' => true,
          'show_admin_column' => true,
        )
    );
    register_taxonomy(
      'partners_category',
      'partners',
      array(
        'labels' => array(
          'name' => 'Partner Categories'
          ),
          'hierarchical' => true,
          'show_admin_column' => true,
        )
    );
  };
  add_action('init', 'create_taxonomy');


?>
