<!-- PHP : Functions file -->
<?php

function theme_setup_after()
{
      /* Adds support for wordpress to handle setting the title  */
      add_theme_support( 'title-tag' );

      // Registration
      register_menus();  
}

function register_menus()
{
    register_nav_menus( array( 'header-menu' => __( 'Header Main Area Menu', 'theme-menu' ), 
                               'footer-menu' => __( 'Footer Main Area Menu', 'theme-menu' ), ) );
}

add_action('after_setup_theme', 'theme_setup_after');

function theme_scripts()
{
    wp_enqueue_style( 'style', 
                       get_stylesheet_uri(), 
                       null, 
                       null, 
                       null );

    
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>