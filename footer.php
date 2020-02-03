        <footer>
            <div class="page-footer font-small bg-light pt-4"> 
                <?php 
                    if(function_exists('dynamic_sidebar')) :
                ?>

                <?php 
                 dynamic_sidebar("footer-widget");
                
                ?>

                <?php 
                    endif;
                ?>
            </div> 

            <div class="misc">
                <nav>           
                    <?php 
                    if (has_nav_menu('misc-menu'))
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'misc-menu',
                                'menu-class' => 'misc',
                                'item_spacing' => 'preserve'
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

<!-- fjern i produktion -->    
<script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin>
</script>
        
<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin>
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
        crossorigin="anonymous">
</script>

<link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
      crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js" 
        integrity="sha256-bd8XIKzrtyJ1O5Sh3Xp3GiuMIzWC42ZekvrMMD4GxRg=" 
        crossorigin="anonymous">
</script>


<!-- React componenter -->

<!-- Analytics tool -->
