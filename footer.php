        <footer> 

        <?php 
        
            if (has_nav_menu('footer-menu'))
            {
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu-class' => '',
                        'item_spacing' => 'preserve'
                    )
                );  
            };
        ?>
        </footer>

    </body>

    <?php 
        wp_footer();
    ?>

</html>

<!-- fjern i produktion -->    
<script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin>
</script>
        
<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin>
</script>

<!-- React componenter -->

<!-- Analytics tool -->
