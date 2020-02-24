<?php
require get_parent_theme_file_path('/theme-modules/Modules.php');
require get_parent_theme_file_path('/wp/bootstrap-navigation.php');

include get_parent_theme_file_path('/registers/RegisterMenu.php');
include get_parent_theme_file_path('/registers/RegisterWidget.php');

use VestJyskPartnersThemeModules\Setup as VJPSetup;


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
  $text = file_get_contents( get_parent_theme_file_path() . "/configuration/register.json");

  $register_ui = json_decode($text, true);
  
  theme_vjp_register_menues($register_ui["menues"]);
  theme_vjp_register_sidebar($register_ui["widgets"]);
};

function theme_vjp_register_sidebar($object)
{
  
}

function theme_vjp_register_menues($object)
{
  $menuSetup = array();

  $keys = array();
  $values = array();

  for( $idx = 0; 
       $idx < sizeof( $object ); 
       $idx++ )
  {
    $currentMenu = $object[$idx];
    $key = $currentMenu["menu-id-name"];
    array_push( $keys, $key );

    $value = __($currentMenu["title"], $currentMenu["domain"]);    
    array_push( $values, $value );
  }

  $final_menu_arr = array_combine( $keys, $values );
  register_nav_menus( $final_menu_arr );
}

function theme_vjp_register_ui_configuration( $object )
{
  
};

function theme_vjp_styles()
{
  wp_enqueue_style("base-style", get_stylesheet_directory_uri(). '/style.css', null, false, 'all');
};

function theme_vjp_scripts()
{
  $text = file_get_contents( get_parent_theme_file_path() . "/configuration/scripts.json");
  $scripts_json_decoded = json_decode($text);
};

function theme_vjp_additional_scripts()
{
  
};

function theme_vjp_apply_filters()
{

};


function my_wp_nav_menu_objects( $items, $args ) 
{
    apply_logo($items, $args);

    return $items;
}

function my_wp_nav_menu_items( $items, $args ) 
{
    $menu = wp_get_nav_menu_object($args->menu);

    return $items;
};

function register_widget_init()
{
    register_sidebar( array(
        'name'=> __('Footer widgets area'),
        'id' => 'footer-widget',
        'before_widget' => '<div class="widgetizedArea">',
        'after_widget' => '</div>',
        
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name'=> __('Header widgets area'),
        'id' => 'header-widget',
        'before_widget' => '<div class="widgetizedArea">',
        'after_widget' => '</div>',
        
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

};

function apply_logo($items, $args)
{
    foreach( $items as &$item )
    {
        $icon = get_field('icon-name', $item);
    
        if ($icon)
        {
            $item->title = '<i class="' . $icon . '"></i>';
        }

    }

    return $items;
}



if(function_exists('register_widget_init'))
{
  add_action('widgets_init', 'register_widget_init');
}

if(function_exists('my_wp_nav_menu_items'))
{
  add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);
}

if(function_exists('my_wp_nav_menu_objects'))
{
  add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
}


//
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
?>