<?php 
    get_header();
?>

            <?php 
                if( ( is_page() || is_single() ) ):
            ?>

            <?php 
                // Template Area
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