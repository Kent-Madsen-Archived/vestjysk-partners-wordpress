<?php 
    get_header();
?>

<!-- Singular -->
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

                <!-- Template -->
        </main>

<?php
    get_footer();
?>