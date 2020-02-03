<!DOCTYPE html>

<html>
    <head <?php language_attributes(); ?> class="no-js no-svg">

        <meta charset="<?php bloginfo( 'charset' );?>">
        
        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" 
              content="ie=edge">

        <link rel="profile" 
              href="http://gmpg.org/xfn/11">
        
        <?php 
            wp_head();
        ?>
    </head>

    <body>
        <header> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
                <?php 
                    if ( has_nav_menu('header-menu') )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'menu-class' => '',
                                'item_spacing' => 'preserve'
                            )
                        );  
                    }
                ?>
            </nav>
            
        </header>