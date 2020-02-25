<?php 
    get_header();
?>

        <?php 
            if(is_front_page()):
        ?>

        <div class="frontpage-container"> 
        <div class="frontpage-cover-color overlay-primary"> </div>
        <div class="frontpage-cover-image"> </div>
            <div class="frontpage-cover">
                <div class="front-layout-container"> 

                    <span class="first">
                        <h1 class="cover-heading">
                            Foreningen for danske selvstændige
                        </h1>
                        
                        <h2 class="lead"> 
                            Vi er ikke for store til de små eller for små til de store
                        </h2>
            </span>

                    <div class="second"> 

                    <h3 class=""> Medlemskab  </h3>
                        <div class="card front-page-cover">
                            <div class="card-body"> 
                                <form> 
                                    <div class="container-group"> 
                                        <label for=""> </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email.">
                                    </div>
                                    
                                    <div class="container-group"> 
                                        <label for=""> </label>
                                        <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter password.">

                                        <small id="emailHelp" class="form-text text-muted">Bliv medlem fra idag af.</small>
                                    </div>
                                    <div class="container-group"> 
                                    
                                        <a class="action-button-primary-full"> 
                                            Bliv Medlem
                                        </a>
                                </div>    
                                    <div class="container-group"> 
                                        <a class="link" href="#">  
                                            Allerede medlem? 
                                        </a> 
                                    </div>
                                </form>

                            </div> 

                        </div>
                    </div>
                </div>

            </div>
        </div>

        
        <?php 
                // Template Area
                    while( have_posts() ):
                ?>
                <div class="frontpage-main">                    
                    <?php 
                            the_post();
                        ?>

                    <?php
                            the_content();
                        ?>
                    </div>

                <?php 
                    endwhile;
                ?>


        

        <?php endif;?>

            <?php 
                if( ( is_page() || is_single() ) &&  !is_front_page() ):
            ?>

            <?php 
                // Template Area
                    while( have_posts() ):
                ?>
                <div class="main-content-container">
                    <h1>
                        <?php 
                            the_title();
                        ?>
                    </h1>
                    
                    <?php 
                            the_post();
                        ?>

                    <?php
                            the_content();
                        ?>
                    </div>

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