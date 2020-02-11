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
                    <div class="">
                          <!-- Navbar brand -->
                        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                            <?php 
                                echo get_bloginfo('title');
                            ?>
                        </a>
                    </div>
                        <div id="navigation-menu-header-container"> 
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
                        </div>
                    
                            <!-- Search form -->
                    <form class="form-inline ml-auto">
                        <div class="md-form">
                                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </form>
                    
                    <div class="responsive-elements-only">  
                            <!-- Collapse button -->
                            <button class="navbar-toggler" 
                                    type="button" 
                                    data-toggle="collapse" 
                                    data-target="#navigation-menu-header-container" 
                                    aria-controls="navigation-menu-header-container" 
                                    aria-expanded="false" 
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
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