<?php 

function register_menus()
{
    register_nav_menus( array( 'header-menu' => __( 'Header Main Area Menu', 'theme-menu' ), 
                               'social-menu' => __( 'Social media menu', 'theme-menu' ), 
                               'misc-menu' => __( 'Misc menu', 'theme-menu' ), ) );

    
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


?>