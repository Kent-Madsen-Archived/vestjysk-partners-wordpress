<!-- PHP : Functions file -->
<?php

function theme_setup_after()
{
      /* Adds support for wordpress to handle setting the title  */
      add_theme_support( 'title-tag' );
      
      
      add_theme_support( 'automatic-feed-links' );
      
      
	  add_theme_support( 'editor-styles' );

      add_theme_support( 'wp-block-styles' );
      
	  add_theme_support( 'customize-selective-refresh-widgets' );

      // Registration
      register_menus();  
};

function register_menus()
{
    register_nav_menus( array( 'header-menu' => __( 'Header Main Area Menu', 'theme-menu' ), 
                               'social-menu' => __( 'Social media menu', 'theme-menu' ), 
                               'misc-menu' => __( 'Misc menu', 'theme-menu' ), ) );

    
};

add_action('after_setup_theme', 'theme_setup_after');

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

};

add_action('widgets_init', 'register_widget_init');


function theme_scripts()
{

    theme_style();
};

function theme_style()
{
    
    wp_enqueue_style( 'style', 
                       get_stylesheet_uri(), 
                       null, 
                       null, 
                       null );
                       
    wp_enqueue_style( 'google fonts', 
                       'https://fonts.google.com/?selection.family=Open+Sans|Roboto', 
                       false );
    
};

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

if(function_exists(''))
{
    
}





/*
class wordpress_menu_walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth, $args)
    {
        global $wp_query;

        $output = NULL;

        $output .= apply_filters(( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args ));
    };
};*/

?>