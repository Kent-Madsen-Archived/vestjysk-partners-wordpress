        <footer>
            <div class="bg-dark page-footer widget-area-4"> 
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
