<?php
namespace VestJyskPartnersThemeModules;

require get_parent_theme_file_path( '/theme-modules/setup/Setup.php' );
require get_parent_theme_file_path( '/theme-modules/api/API.php' );    

/*
spl_autoload_register( function( $className ) {
    switch($className)
    {
        case 'theme-modules/api.php':
                require get_parent_theme_file_path( '/theme-modules/api/API.php' );    
        break;

        case '':
            require get_parent_theme_file_path( '/theme-modules/components/Components.php' );
        break;

        case '':
            require get_parent_theme_file_path( '/theme-modules/layout/Layout.php' );  
        break;

        default:
        return;
    }

} );*/

?>