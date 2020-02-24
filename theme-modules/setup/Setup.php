<?php 
namespace VestJyskPartnersThemeModules\Setup;

require get_parent_theme_file_path( '/theme-modules/setup/Registers/RegisterMenu.php' );
require get_parent_theme_file_path( '/theme-modules/setup/Registers/RegisterWidget.php' );

require get_parent_theme_file_path( '/theme-modules/setup/position.php' );


require get_parent_theme_file_path( '/theme-modules/setup/Version.php' );

require get_parent_theme_file_path( '/theme-modules/setup/PackageManager.php' );

require get_parent_theme_file_path( '/theme-modules/setup/Deprecated/NotSure.php' );

use VestJyskPartnersThemeModules\Setup\Registers as SetupRegisters;


class ThemeSetup
{
    public function __construct()
    {
        $this->setVersion( new ThemeVersion() );

        $vers = $this->getVersion();

        $vers->setName('VestjyskPartners Bootstrap Customizable Theme');
        $vers->setVersion('V1.0.0 Alpha');
        $vers->setDescription('');

        $this->setPackageManager( new PackageManager() );

        $manage = $this->getPackageManager();
        
    }

    public function __deconstruct()
    {
        
    }

    protected $Version = null;

    protected $PackageManager = null;

    //
    public function printVersion()
    {

    }

    // Accessors
        //
    public function getVersion()
    {
        return $this->Version;
    }

    public function setVersion( $versionAs )
    {
        $this->Version = $versionAs;
    }

        //
    public function getPackageManager()
    {
        return $this->PackageManager;
    }

    public function setPackageManager( $managerAs )
    {
        $this->PackageManager = $managerAs;
    }



}

?>