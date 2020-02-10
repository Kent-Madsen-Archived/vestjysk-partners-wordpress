<!-- PHP : Include Scripts file -->
<?php

    function theme_scripts()
    {
        
        wp_enqueue_script( 'interface', 
                        get_template_directory_uri() . './content/javascript/interface.js', 
                        null, 
                        null, 
                        false );

        theme_style();
    };

?>