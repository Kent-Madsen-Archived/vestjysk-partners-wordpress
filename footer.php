        <footer>
            <div class="bg-dark"> 
                <div class=" page-footer widget-area-4"> 
                    <?php 
                        if( function_exists( 'dynamic_sidebar' ) ) :
                    ?>

                    <?php 
                        dynamic_sidebar( "footer-widget" );
                    ?>

                    <?php 
                        endif;
                    ?>
                </div>
                
                <div> 
                    <nav class="navbar justify-content-center ">           
                        <?php 
                        if ( has_nav_menu( 'social-menu' ) )
                        {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'social-menu',
                                    'menu_class' => 'nav',
                                    'item_spacing' => 'preserve',
                                    'walker' => new social_menu_walker()
                                )
                            );  
                        };
                    ?>
                    </nav>
                </div>
            </div>

            <div>
                <nav class="navbar navbar-expand-lg navbar-light">           
                    <?php 
                    if ( has_nav_menu( 'misc-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'misc-menu',
                                'menu_class' => 'navbar-nav',
                                'item_spacing' => 'preserve',
                                'walker' => new bootstrap_menu_walker()
                            )
                        );  
                    };
                ?>
                </nav> 
            </div>
        </footer>

    </body>

    <?php 
        wp_footer();
    ?>

</html>



<!-- React componenter -->

<!-- Analytics tool -->
