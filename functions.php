<?php 

require 'includes/cpt.php';

// For loading in stylesheets, jquery, java, etc

	function theme_scripts() {
		wp_enqueue_style( 'bootstrap' , get_template_directory_uri().'/assets/css/bootstrap.css' );
		wp_enqueue_style( 'font-awesome' , get_template_directory_uri().'/assets/css/font-awesome.css' );
		wp_enqueue_style( 'main' , get_template_directory_uri().'/assets/css/main.css' );

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

 	add_theme_support('post_thumbnails');
 	add_theme_support('customize-selective-refresh-widgets');





