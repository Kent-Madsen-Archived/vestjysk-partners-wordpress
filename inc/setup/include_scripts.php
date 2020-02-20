<?php

    function theme_scripts()
    {   
        // Development files
        wp_enqueue_script( 'jquery', 
                           'https://code.jquery.com/jquery-3.4.1.slim.min.js', 
                        null, 
                        null, 
                        false );

        wp_enqueue_script('axios', 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js', null, null, false);

        wp_enqueue_script( 'popper', 
                           'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', 
                        null, 
                        null, 
                        false );

        
        wp_enqueue_script( 'babel', 
                           'https://unpkg.com/babel-standalone@6/babel.min.js', 
                        null, 
                        null, 
                        false );


        // Frameworks
        wp_enqueue_script( 'bootstrap', 
                           'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', 
                        null, 
                        null, 
                        false );
        
        wp_enqueue_script( 'react', 
                           'https://unpkg.com/react@16/umd/react.development.js', 
                        null, 
                        null, 
                        false );

        
        wp_enqueue_script( 'react-dom', 
                           'https://unpkg.com/react-dom@16/umd/react-dom.development.js', 
                        null, 
                        null, 
                        false );

        // Our "Scripts"
        wp_enqueue_script( 'interface', 
                        get_template_directory_uri() . './content/javascript/interface.js', 
                        null, 
                        null, 
                        false );
         
        wp_enqueue_script( 'color', 
                        get_template_directory_uri() . './content/javascript/color.js', 
                        null, 
                        null, 
                        false );

         wp_enqueue_script( 'overlay', 
                        get_template_directory_uri() . './content/javascript/overlay.js', 
                        null, 
                        null, 
                        false );

        theme_style();
    };

?>