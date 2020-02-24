<?php 
namespace VestJyskPartnersThemeModules\Setup;

class PackageScript
{    
    public function __construct()
    {

    }
    
    public function __deconstruct()
    {
        
    }

    // Variables
    private $Title = null;
    private $SourceUrl = null;
    
    private $Dependencies = array();

    private $Version = null;
    private $Position = null;

    // Accessors
        //
    public function getVersion()
    {
        return $this->Version;
    }

    public function setVersion( $varTo )
    {
        $this->Version = $varTo;
    }

        //
    public function getSourceUrl()
    {
        return $this->SourceUrl;
    }

    public function setSourceUrl($varTo)
    {
        $this->SourceUrl = $varTo;
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
    
    //
    public function getPosition()
    {
        return $this->Position;
    }

    public function setPosition($varTo)
    {
        $this->Position = $varTo;
    }

    //
    public function getTitle()
    {
        return $this->Title;
    }
 
    public function setTitle($varTo)
    {
        $this->Title = $varTo;
    }



}

?>