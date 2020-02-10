<!-- PHP : Functions file -->
<?php

require_once 'navigation-crawler.php';

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
    
    wp_enqueue_script( 'interface', 
                       get_template_directory_uri() . './content/javascript/interface.js', 
                       null, 
                       null, 
                       false );

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

function my_wp_nav_menu_items( $items, $args ) 
{
    
    

    return $items;
}

add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

function my_wp_nav_menu_objects( $items, $args ) 
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

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function theme_customize_register( $wp_customize ) {
    // All our settings will go here
    $wp_customize->add_setting( 'primary-color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary-color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Primary Theme color', 'theme' ),
    ) ) );

    //
    $wp_customize->add_setting( 'secondary-color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary-color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'secondary Theme color', 'theme' ),
    ) ) );

    //
    $wp_customize->add_setting( 'header-background-color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header-background-color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Header Theme color', 'theme' ),
    ) ) );


    //
    $wp_customize->add_setting( 'footer-background-color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer-background-color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Footer Theme color', 'theme' ),
    ) ) );
}

add_action( 'customize_register', 'theme_customize_register' );


function theme_enqueue_styles() {
    wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
    $custom_css = theme_get_customizer_css();
    wp_add_inline_style( 'theme-styles', $custom_css );
  }
  
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

?>