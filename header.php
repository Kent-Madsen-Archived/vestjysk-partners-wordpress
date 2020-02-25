<!DOCTYPE html>

<html>
    <?php if (is_debugging() == true): ?>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js" integrity="sha256-FiZMk1zgTeujzf/+vomWZGZ9r00+xnGvOgXoj0Jo1jA=" crossorigin="anonymous"></script>
            
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            
            <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
            <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <?php endif; ?>

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
        
        <script src="https://kit.fontawesome.com/2ea1bb2ea9.js" 
                crossorigin="anonymous"></script>
    
        
        <?php 
            wp_head();
        ?>
    </head>

    <body onload="loadUI()">
        <header id="header-element"> 
            <?php 
                if ( has_nav_menu('header-menu') ):
            ?>
                <nav id="navigation-header-menu" 
                     class="overlay"> 

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
                                
                                <span class="navbar-toggler-icon">
                                </span>
                            </button>
                        </div>
                </nav>
            <?php
                endif; 
            ?>
        </header>

        <main>
            
            <?php 
                get_sidebar();
            ?>