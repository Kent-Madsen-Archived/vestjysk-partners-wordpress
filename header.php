<!DOCTYPE html>

<html>
    <head <?php language_attributes(); ?> class="no-js no-svg">
        <meta charset="<?php bloginfo( 'charset' );?>">
        
        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" 
              content="ie=edge">

        <meta name="author" 
              content="VestjyskPartners">
        
        <link rel="pingback" 
              href="<?php bloginfo('pingback_url'); ?>" />
        
        <link rel="profile" 
              href="http://gmpg.org/xfn/11">
        
        <?php 
            wp_head();
        ?>
    </head>

    <body onload="loadUI()">
        <header> 

            <nav class="navbar navbar-expand navbar-light bg-primary" > 
                <?php 
                    if ( has_nav_menu('header-menu') )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'navbar-nav justify-content-center',
                                'item_spacing' => 'preserve',
                                'walker' => new bootstrap_header_menu_walker()
                            )
                        );  
                    }
                ?>
            </nav>
            
        </header>

        <main>
            <?php ?>
            
            <?php 
                get_sidebar();
            ?>