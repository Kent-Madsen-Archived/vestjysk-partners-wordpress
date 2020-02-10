<?php 
    get_header();
?>

<!-- Index Page -->
            <?php 
            
                if( is_page() || is_single() ):
            ?>

            <!-- Template -->
            <?php 
                    while( have_posts() ):
                ?>

                    <?php 
                    the_post();
                    ?>

                    <?php
                    the_content();
                    ?>

                <?php 
                    endwhile;
                ?>

            <?php 
                endif;
            ?>
        </main>

<?php
    get_footer();
?>