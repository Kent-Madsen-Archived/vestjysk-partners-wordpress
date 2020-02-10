<!-- PHP : Functions file -->
<?php
include 'include.php';


// Set Theme variables
$theme = wp_get_theme();

$theme_version = $theme['Version'];
$theme_version = $theme['Name'];
$theme_version = $theme['Description'];

function theme_setup_after()
{
      /* Adds support for wordpress to handle setting the title  */
      add_theme_support( 'title-tag' );
      
      // Adds Support for wordpress to handle feed links
      add_theme_support( 'automatic-feed-links' );


      // Adds Support for wordpress to handle thumbnails
      add_theme_support( 'post-thumbnails' );

	  add_theme_support( 'editor-styles' );
      add_theme_support( 'wp-block-styles' );
	  add_theme_support( 'customize-selective-refresh-widgets' );

      // Registration
      register_menus();
};

function my_wp_nav_menu_items( $items, $args ) 
{
    $menu = wp_get_nav_menu_object($args->menu);

    

    return $items;
};


// Add Triggers
    // Actions
    add_action('after_setup_theme', 'theme_setup_after');

    add_action( 'wp_enqueue_scripts', 'theme_scripts' );
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

    add_action('widgets_init', 'register_widget_init');

    // Filters
    add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);
    add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

    add_filter('dynamic_sidebar_params', 'my_dynamic_sidebar_params');

    add_action( 'customize_register', 'theme_customize_register' );
?>