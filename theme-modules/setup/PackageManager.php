<?php 
namespace VestJyskPartnersThemeModules\Setup;

require get_parent_theme_file_path( '/theme-modules/setup/PackageScript.php' );
require get_parent_theme_file_path( '/theme-modules/setup/PackageStyle.php' );


class PackageManager
{
    public function __construct()
    {
        

    }
    
    public function __deconstruct()
    {
        
    }

    public function addScripts()
    {

    }

    public function getScripts()
    {

    }

    public function addStyles( $title, $source_url, $dependencies, $version, $mediatype )
    {
        $new_style = new PackageStyle();

        $new_style->setSourceUrl($source_url);
        $new_style->setTitle($title);
        $new_style->setDependencies($dependencies);
        $new_style->setVersion($version);
        $new_style->setMediaType($mediatype);

    }

}

?>