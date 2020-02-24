<?php 
namespace VestJyskPartnersThemeModules\Setup;

class ThemeVersion
{
    public function __construct()
    {
        
    }

    public function __deconstruct()
    {
        
    }

    private $version = '';
    private $name = '';
    private $description = '';

    public function getVersion()
    {
        return $this->version;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setVersion($withVariableStr)
    {
        $this->version = $withVariableStr;
    }

    public function setName($withVariableStr)
    {
        $this->name = $withVariableStr;
    }
    
    public function setDescription($withVariableStr)
    {
        $this->description = $withVariableStr;
    }
}

?>