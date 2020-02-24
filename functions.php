<?php
require get_parent_theme_file_path('/theme-modules/Modules.php');

include get_parent_theme_file_path('/registers/RegisterMenu.php');
include get_parent_theme_file_path('/registers/RegisterWidget.php');


use VestJyskPartnersThemeModules\Setup as VJPSetup;

$theme_vjp_setup = new VJPSetup\ThemeSetup();

// Set Theme variables
function theme_vjp_setup_after()
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

      // Registration of content
  if( function_exists( 'theme_vjp_register_ui' ) )
  {
    theme_vjp_register_ui();
  }


};

//
function theme_vjp_register_ui()
{

};

function theme_vjp_styles()
{
  wp_enqueue_style("base-style", get_stylesheet_directory_uri(). '/style.css', null, false, 'all');

};

function theme_vjp_scripts()
{
  

};

if( function_exists( 'theme_vjp_styles' ) )
{
  add_action( 'wp_enqueue_scripts', 'theme_vjp_styles' );
}

if( function_exists( 'theme_vjp_scripts' ) )
{
  // Setup Necesarry Scripts and code
  add_action( 'wp_enqueue_scripts', 'theme_vjp_scripts' );
}

if( function_exists( 'theme_vjp_setup_after' ) )
{
  add_action('after_setup_theme', 'theme_vjp_setup_after');
}

function output_log($message)
{
      
  if ( is_array( $message ) || is_object( $message ) )
  {
    error_log( print_r( $message, true ) );
  }
  else 
  {
    error_log( $message );
  }
      
}

    

?>