<?php 
    get_header();
?>

<!-- Front Page -->
    <?php 
        if( is_page() || is_single() ):
    ?>
    
    <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            
                
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


                <?php 
                    endif;
                ?>

            
        </main>

<?php
    get_footer();
?>