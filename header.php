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
        
        <script src="https://kit.fontawesome.com/2ea1bb2ea9.js" crossorigin="anonymous"></script>
    
        
        <?php 
            wp_head();
        ?>
    </head>

    <body onload="loadUI()">
        <header> 
            <?php 
                if ( has_nav_menu('header-menu') ):
            ?>
                <nav id="navigation-header-menu" class="secondary-header"> 
                      <!-- Navbar brand -->
                    <a class="navbar-brand text-uppercase" href="#">
                        <?php 
                        echo get_bloginfo('title');
                        ?>
                    </a>

                    <!-- Collapse button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
                    aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php 
                            wp_nav_menu(
                                array(
                                        'container' => 'div',
                                        'container_id' => '',
                                        'container_class' => '',
                                        'theme_location' => 'header-menu',
                                        'menu_class' => 'navigation-menu',
                                        'item_spacing' => 'preserve',
                                        'walker' => new bootstrap_header_menu_walker()
                                )
                            );  
                    ?>

                    <!-- Search form -->
                    <form class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                </nav>
            <?php
                endif; 
            ?>
        </header>

        <main>
            <?php ?>
            
            <?php 
                get_sidebar();
            ?>