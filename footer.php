    <footer>
        <div id="footer-widget-area"> 
            <div id="footer-widget" class="page-footer widget-area secondary-footer-cover"> 
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
        </div>

        <div id="footer-social-menu"> 
                <nav class="secondary-footer secondary-footer-cover navbar justify-content-center">           
                    <?php 
                        if ( has_nav_menu( 'social-menu' ) )
                        {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'social-menu',
                                    'menu_class' => 'nav',
                                    'item_spacing' => 'preserve',
                                    'walker' => new bootstrap_social_menu_walker()
                                )
                            );  
                        };
                    ?>
                </nav>
        </div>

        <div id="footer-misc-menu" class="secondary-footer-cover">
            <nav>           
                <?php 
                    if ( has_nav_menu( 'misc-menu' ) )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'misc-menu',
                                'menu_class' => 'nav justify-content-center',
                                'item_spacing' => 'preserve',
                                'walker' => new bootstrap_footer_menu_walker()
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

        <!-- -->
<script src="<?php echo (get_template_directory_uri() . "/content/javascript/ui.js"); ?>">
    execute();
</script>

<!-- React Components -->
<!-- <script src="<?php echo (get_template_directory_uri() . "/content/babel/moveBack.jsx"); ?>" type="text/babel"> 
</script> -->

<!-- Analytics tool -->
