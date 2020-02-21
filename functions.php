<?php
include 'include.php';


// Set Theme variables
$theme = wp_get_theme();

$theme_version = $theme['Version'];
$theme_version = $theme['Name'];
$theme_version = $theme['Description'];

/* 

	  add_theme_support( 'customize-selective-refresh-widgets' );
	  add_theme_support( 'editor-styles' );
      add_theme_support( 'wp-block-styles' );
*/

function theme_setup_after()
{
      /* Adds support for wordpress to handle setting the title  */
      add_theme_support( 'title-tag' );
      
      // Adds Support for wordpress to handle feed links
      add_theme_support( 'automatic-feed-links' );


      // Adds Support for wordpress to handle thumbnails
      add_theme_support( 'post-thumbnails' );

      //
      add_theme_support( 'custom-logo' );

      add_theme_support( 'custom-logo', array(
        'height'      => 400,
        'width'       => 400,
        
        'flex-height' => true,
        'flex-width'  => true,

        'header-text' => array( 'site-title', 'site-description' ),
    ) );

      // Registration
      register_menus();
};

// Add Triggers
    // Actions
      // Boostrap theme
    add_action('after_setup_theme', 'theme_setup_after');

    // Setup Necesarry Scripts and code
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

    // Setup Widget Areas
    add_action('widgets_init', 'register_widget_init');

    // Filters
      // Custom menu filter setup
    add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);
    add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

      // Custom widget filter setup
    add_filter('dynamic_sidebar_params', 'my_dynamic_sidebar_params');

    function output_log($message)
    {
      
        if (is_array($message) || is_object($message))
        {
          error_log( print_r( $message, true ) );
        }
        else 
        {
          error_log($message);
        }
      
    }

    

?>