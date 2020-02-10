<!DOCTYPE html>

<html>
    <head <?php language_attributes(); ?> class="no-js no-svg">

    <!-- fjern i produktion -->    
<script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin>
</script>
        
<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin>
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
        crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
        crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
        crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js" 
        integrity="sha256-bd8XIKzrtyJ1O5Sh3Xp3GiuMIzWC42ZekvrMMD4GxRg=" 
        crossorigin="anonymous">
</script>


    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/2ea1bb2ea9.js" crossorigin="anonymous"></script>


        <meta charset="<?php bloginfo( 'charset' );?>">
        
        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" 
              content="ie=edge">

        <meta name="author" content="VestjyskPartners">
        
        <link rel="pingback" 
              href="<?php bloginfo('pingback_url'); ?>" />
        
        <link rel="profile" 
              href="http://gmpg.org/xfn/11">

        <?php
            function theme_get_customizer_css() {
                ob_start();

                $text_color = get_theme_mod( 'text_color', '' );
                if ( ! empty( $text_color ) ) {
                ?>
                body {
                    color: <?php echo $text_color; ?>;
                }
                <?php
                }

                $css = ob_get_clean();
                return $css;
            } 
        ?>
        
        <?php 
            wp_head();
        ?>
    </head>

    <body>
        <header> 
            <nav class="navbar navbar-expand navbar-light bg-light" > 
                <?php 
                    if ( has_nav_menu('header-menu') )
                    {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'navbar-nav justify-content-center',
                                'item_spacing' => 'preserve',
                                'walker' => new bootstrap_menu_walker()
                            )
                        );  
                    }
                ?>
            </nav>
            
        </header>

        <main>
            <?php ?>
            
            <?php 
                get_sidebar();
            ?>
        
<!---
        <nav aria-label="breadcrumb"> 
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item">
                    <a href="#"> 
                        Home
                    </a>
                </li>
                
    <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
-->