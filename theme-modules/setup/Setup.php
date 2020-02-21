<?php 
namespace VestJyskPartnersThemeModules\Setup;

require get_parent_theme_file_path( '/theme-modules/setup/Registers/RegisterMenu.php' );
require get_parent_theme_file_path( '/theme-modules/setup/Registers/RegisterWidget.php' );

require get_parent_theme_file_path( '/theme-modules/setup/Deprecated/NotSure.php' );


use VestJyskPartnersThemeModules\Setup\Registers as SetupRegisters;


class ThemeSetup
{
    public function __construct()
    {

    }

    public function __deconstruct()
    {
        
    }

    public function Load()
    {
        $this->load_styles();
        $this->load_scripts();
        
    }

    protected function load_scripts()
    {

    }

    protected function load_styles()
    {

    }


}

?>