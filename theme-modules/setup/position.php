<?php 
namespace VestJyskPartnersThemeModules\Setup;

/** 
 * 0: Footer
 * 1: Header
 */

class Position
{
    public function __construct()
    {
        $this->setState(0);
    }
    
    public function __deconstruct()
    {
        
    }

    private $value = null;

    public function getState()
    {
        return $this->value;
    }

    public function setState($u)
    {
        $this->value = $u;
    }

    public function in_footer()
    {
        return  ( $this->value == 0 );
    }

    public function in_header()
    {
        return  ( $this->value == 1 );
    }

}


?>