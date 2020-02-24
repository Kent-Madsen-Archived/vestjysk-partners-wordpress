
        <footer>
            <div id="footer-widget-area" 
                class="overlay"> 

                <div id="footer-widget" 
                    class="page-footer widget-area"> 
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

            <div id="footer-social-menu" 
                class="overlay"> 
                    <nav class="navbar justify-content-center">           
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

            <div id="footer-misc-menu" 
                class="overlay">
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

<script> 
    colorUI("<?php echo get_template_directory_uri() . "/content/settings/some.json" ?>");
</script>


<script> 
    overlayUI("<?php echo get_template_directory_uri() . "/content/settings/ui.json" ?>");
</script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js" integrity="sha256-FiZMk1zgTeujzf/+vomWZGZ9r00+xnGvOgXoj0Jo1jA=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>


<!-- React Components -->

<!-- Analytics tool -->
