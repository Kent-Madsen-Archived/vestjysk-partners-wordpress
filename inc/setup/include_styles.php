<!-- PHP : Include Styles file -->
<?php

    function theme_enqueue_styles() 
    {
        wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
        $custom_css = theme_get_customizer_css();
        wp_add_inline_style( 'theme-styles', $custom_css );
    }
    

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
?>