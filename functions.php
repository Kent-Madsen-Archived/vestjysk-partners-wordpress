<!-- PHP : Functions file -->
<?php

function theme_setup_after()
{
      /* Adds support for wordpress to handle setting the title  */
      add_theme_support( 'title-tag' );

      // Registration
      register_menus();  
};

function register_menus()
{
    register_nav_menus( array( 'header-menu' => __( 'Header Main Area Menu', 'theme-menu' ), 
                               'footer-menu' => __( 'Footer Main Area Menu', 'theme-menu' ), 
                               'social-menu' => __( 'Social media menu', 'theme-menu' ), ) );

    
    register_sidebar( array(
                                'name'=> 'Footer widgets',
                                'before_widget' => '',
                                'after_widget' => '',
                                'before_title' => '<h3>',
                                'after_title' => '</h3>',
                            ) );
};

add_action('after_setup_theme', 'theme_setup_after');


function theme_scripts()
{
    wp_enqueue_style( 'style', 
                       get_stylesheet_uri(), 
                       null, 
                       null, 
                       null );

    
};

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
/*
class wordpress_menu_walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth, $args)
    {
        global $wp_query;

        $output = NULL;

        $output .= apply_filters(( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args ));
    }
}*/

?>