<?php 
    get_header();
?>

<!-- Front Page -->

            <?php 
                if( is_home() ):    
            ?>
            
                <?php 
                    if( is_page() || is_single() ):
                ?>


                <?php 
                    endif;
                ?>

            <?php 
                endif;
            ?>
            
        </main>

<?php
    get_footer();
?>