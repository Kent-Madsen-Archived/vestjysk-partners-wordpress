<?php 
namespace VestJyskPartnersThemeModules\Setup;

class PackageStyle
{
    public function __construct()
    {

    }
    
    public function __deconstruct()
    {
        
    }

    //
    
    //
    private $title = null;
    
    //
    private $sourceUrl = null;

    //
    private $dependencies = array();

    //
    private $ver = null;
    
    //
    private $mediaType = null;


        //
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    public function setSourceUrl($varTo)
    {
        $this->sourceUrl = $varTo;
    }

        //
    public function getTitle()
    {
        return $this->title;
    }
 
    public function setTitle($varTo)
    {
        $this->title = $varTo;
    }

            //
    public function getDependencies()
    {
        return $this->Dependencies;
    }

    public function setDependencies($varTo)
    {
        $this->Dependencies = $varTo;
    }    
    
    public function getVersion()
    {
        return $this->Version;
    }

    public function setVersion($varTo)
    {
        $this->Version = $varTo;
    }

    public function getMediaType()
    {
        return $this->mediaType;
    }

    public function setMediaType($varTo)
    {
        $this->mediaType = $varTo;
    }
}

?>