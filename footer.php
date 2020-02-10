    <footer>
        <div class="bg-dark"> 
            <div id="footer-widget" class="page-footer widget-area"> 
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
            <div class="bg-dark">
                <nav class="">           
                    <?php 
                    if ( has_nav_menu( 'misc-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'misc-menu',
                                'menu_class' => 'nav justify-content-center',
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
        <!-- Development Purposes Only -->
<script src="https://unpkg.com/babel-standalone@6/babel.min.js">
</script>

        <!-- Frameworks -->
<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin>
</script>
                
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin>
</script>

        <!-- -->
<script src="<?php echo (get_template_directory_uri() . "/content/javascript/ui.js"); ?>">
    execute();
</script>

<!-- React Components -->
<!-- <script src="<?php echo (get_template_directory_uri() . "/content/babel/moveBack.jsx"); ?>" type="text/babel"> 
</script> -->

<!-- Analytics tool -->
