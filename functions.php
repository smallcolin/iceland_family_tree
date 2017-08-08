<?php

require 'includes/cpt.php';
require 'includes/custom.php';

// For loading in stylesheets, jquery, java, etc

	function theme_scripts() {
		wp_enqueue_style( 'bootstrap' , get_template_directory_uri().'/assets/css/bootstrap.css' );
		wp_enqueue_style( 'font-awesome' , get_template_directory_uri().'/assets/css/font-awesome.css' );
		wp_enqueue_style( 'swiper' , get_template_directory_uri().'/assets/css/swiper.min.css' );
		wp_enqueue_style( 'main' , get_template_directory_uri().'/assets/css/main.css' );

		wp_enqueue_script( 'swiper' , get_template_directory_uri().'/assets/js/swiper.min.js', array('jquery'), false, true );
		wp_enqueue_script( 'scripts' , get_template_directory_uri().'/assets/js/scripts.js', array('jquery'), false, true );
	}

	add_action( 'wp_enqueue_scripts', 'theme_scripts' );


// This function allows you to modify your pages menu within Wordpress


	function register_my_menu() {
	 	register_nav_menu('header-menu',__( 'Header Menu' ));
	}

	add_action( 'init', 'register_my_menu' );


// This enables the editing of a sidebar (and thus widgets) in Wordpress

	function register_my_sidebars(){
		register_sidebar(array(
			'name' => 'My Sidebar',
			'id' => 'my-sidebar',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after-title' => '</h4>'
		));
	}

// Add an options page for Advanced Custom Fields

	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page();
	}


// For editing various elements within Wordpress

 	add_theme_support('post-thumbnails', array('post', 'siblings', 'children', 'grandchildren', 'partners'));
 	add_theme_support('customize-selective-refresh-widgets');

// Only search for posts, not pages

  function searchFilter($query) {
    if ($query->is_search) {
      $query->set('post_type', array('siblings', 'children', 'grandchildren', 'partners'));
    }
    return $query;
  }

  add_filter('pre_get_posts','searchFilter');

// Arrange main (Taxonomy) loop into alphabetical order & show all posts

	function modify_tax_query_order( $query ) {
    if ( $query->is_tax('country') && $query->is_main_query() ) {
        $query->set( 'orderby', 'name' );
        $query->set( 'order', 'ASC' );
				$query->set( 'posts_per_page', 8 ); // Shows how many posts or persons on one page
    }
	}

	add_action( 'pre_get_posts', 'modify_tax_query_order' );

// Show all posts when doing a search

	function show_all_search( $query ) {
		if ( $query->is_search() && $query->is_main_query() ) {
			$query->set( 'orderby', 'name' );
			$query->set( 'order', 'ASC' );
			$query->set( 'posts_per_page', 8 );
		}
	}

	add_action( 'pre_get_posts', 'show_all_search' );
