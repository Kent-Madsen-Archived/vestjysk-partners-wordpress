<?php 

class bootstrap_generic_menu_walker 
    extends Walker_Nav_Menu
{
    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
    {
        /*
        // Preparing variables
        // https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/
        
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;
        $output .= "<li class='" . 'nav-item '.  implode(" ", $item->classes) . "'>";
        
        //Add SPAN if no Permalink
        if( $permalink && $permalink != '#' ) 
        {
            
            if(in_array("menu-item-has-children", $item->classes, true))
            {
                $output .= "<a class='nav-link' href='" . $permalink . "' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
            }
            else 
            {
                $output .= "<a class='nav-link' href='" . $permalink . "'>";
            }
        } 
        else 
        {
            $output .= '<span>';
        }
        
        $output .= $title;
        if( $description != '' && $depth == 0 ) 
        {
            $output .= '<small class="description">' . $description . '</small>';
        }
        if( $permalink && $permalink != '#' ) 
        {
            $output .= '</a>';
        } 
        else 
        {
            $output .= '</span>';
        }
        */
    }
    
    function start_lvl( &$output, $depth = 0, $arg = Array() )
    {
        /*
        $output .= "\n<ul class='sub-menu'>\n";
        $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
        */
    }

    function end_lvl(&$output, $depth=0, $args=array()) 
    {
        /*
            $output .= "</div>\n";
            $output .= "</ul>\n";
        */
    }

    protected function signalEnd($name)
    {
        return '</' . $name . '>';
    }

    protected function signalStart($name, $class)
    {
        if($class == null)
        {
            return '<' . $name . 'class="' . '"' . '>';
        }
        else 
        {
            return '<' . $name . 'class="' . $class . '"' . '>';
        }
    }
    
    // Variables shared
    protected $output = null;

    // Functions
    protected function appendOutput($appendText)
    {
        $this->output .= $appendText;
    }

    protected function getOutput()
    {
        return $this->output;
    }

    protected function clearOutput()
    {
        $this->output = null;
    }

    protected function mergeClasses($Array)
    {
        return $this->classEncapsulation(implode(" ", $Array));
    }

    protected function classEncapsulation($str)
    {
        return '"' . $str . '"';
    }


};

class bootstrap_base_menu_walker 
    extends bootstrap_generic_menu_walker
{
    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
    {
        /*
        // Preparing variables
        // https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/
        
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;
        $output .= "<li class='" . 'nav-item '.  implode(" ", $item->classes) . "'>";
        
        //Add SPAN if no Permalink
        if( $permalink && $permalink != '#' ) 
        {
            
            if(in_array("menu-item-has-children", $item->classes, true))
            {
                $output .= "<a class='nav-link' href='" . $permalink . "' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
            }
            else 
            {
                $output .= "<a class='nav-link' href='" . $permalink . "'>";
            }
        } 
        else 
        {
            $output .= '<span>';
        }
        
        $output .= $title;
        if( $description != '' && $depth == 0 ) 
        {
            $output .= '<small class="description">' . $description . '</small>';
        }
        if( $permalink && $permalink != '#' ) 
        {
            $output .= '</a>';
        } 
        else 
        {
            $output .= '</span>';
        }
        */
        
    }
    
    function start_lvl( &$output, $depth = 0, $arg = Array() )
    {
        /*
        $output .= "\n<ul class='sub-menu'>\n";
        $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
        */
    }

    function end_lvl(&$output, $depth=0, $args=array()) 
    {
        /* 
        $output .= "</div>\n";
        $output .= "</ul>\n";
        */
    }

};

class bootstrap_header_menu_walker 
    extends bootstrap_base_menu_walker
{
    private $menuIdentifier = 0;

    // Level
    function start_lvl( &$output, $depth = 0, $arg = Array() )
    {
        $this->appendOutput('<div class="submenu dropdown-menu mega-menu">');

        $this->appendOutput('<ul class="navigation-menu">');

        //
        $output .= $this->getOutput();
        $this->clearOutput();
    }

    function end_lvl( &$output, $depth=0, $args=array()) 
    {
        $this->appendOutput('</ul>');
        
        $this->appendOutput('</div>');
        

        //
        $output .= $this->getOutput();
        $this->clearOutput();
    }

    // Element
    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
    {
        // Preparing variables
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;

        
        //Add SPAN if no Permalink
        if( $permalink && $permalink != '#' ) 
        {
            if( in_array( "menu-item-has-children", $item->classes, true ) )
            {
                $this->appendOutput( '<li class="' . 'header-navigation-menu-button' . ' dropdown mega-dropdown ' . implode(' ', $item->classes) . ' "  '. '>' );
                
                $this->menuIdentifier= $this->menuIdentifier + 1;
                $this->appendOutput('<a id="header-navigation-sub-menu-'  . strval($this->menuIdentifier) . '"' . 'class="header-navigation-menu-link dropdown-toggle" href="' . $permalink . '"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >');
            }
            else 
            {
                $this->appendOutput( '<li class="' . 'header-navigation-menu-button' . '" '. '>' );
        
                $this->appendOutput( "<a class='header-navigation-menu-link' href='" . $permalink . "'>");
            }
        } 
        else 
        {
            $this->appendOutput( '<span>');
        }
        
        $this->appendOutput( $title );

        if( $description != '' && $depth == 0 ) 
        {
            $this->appendOutput('<small class="description">' . $description . '</small>');
        }

        if( $permalink && $permalink != '#' ) 
        {
            $this->appendOutput('</a>');
        } 
        else 
        {
            $this->appendOutput( '</span>');
        }
        
        //
        $output .= $this->getOutput();
        $this->clearOutput();
    }
/*
    function end_el( &$output, $item, $depth = 0, $args = null )
    {
        $this->appendOutput('</a>');
        $this->appendOutput('</li>');
     
        //
        $output .= $this->getOutput();
        $this->clearOutput();
    }
    */

};


class bootstrap_footer_menu_walker extends bootstrap_base_menu_walker
{
    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
    {
        // Preparing variables
        // https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/
        
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;

        $output .= "<li class='" . 'nav-item '.  implode(" ", $item->classes) . "'>";
        
        //Add SPAN if no Permalink
        if( $permalink && $permalink != '#' ) 
        {
            $output .= "<a class='nav-link' href='" . $permalink . "'>";
        } 
        else 
        {
            $output .= '<span>';
        }
        
        $output .= $title;

        if( $description != '' && $depth == 0 ) 
        {
            $output .= '<small class="description">' . $description . '</small>';
        }

        if( $permalink && $permalink != '#' ) 
        {
            $output .= '</a>';
        } 
        else 
        {
            $output .= '</span>';
        }
        
    }
    
    function start_lvl( &$output, $depth = 0, $arg = Array() )
    {
        $output .= "\n<ul class='sub-menu'>\n";

        $output .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
    }

    function end_lvl(&$output, $depth=0, $args=array()) {
        
        $output .= "</div>\n";
        $output .= "</ul>\n";
    }

};



class bootstrap_social_menu_walker extends bootstrap_base_menu_walker
{
    private $linkId = 0;

    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
    {   
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;

        $output .= "<li class='" . 'nav-item '.  implode(" ", $item->classes) . "'>";
        
        //Add SPAN if no Permalink
        if( $permalink && $permalink != '#' ) 
        {    
                $this->linkId = $this->linkId + 1;

                $output .= "<a class='some-link some-link-" . strval($this->linkId) . "' href='" . $permalink . "'>";
        } 
        else 
        {
            $output .= '<span>';
        }
        
        $output .= $title;

        if( $description != '' && $depth == 0 ) 
        {
            $output .= '<small class="description">' . $description . '</small>';
        }

        if( $permalink && $permalink != '#' ) 
        {
            $output .= '</a>';
        } 
        else 
        {
            $output .= '</span>';
        }
        
        
    }
    
    function start_lvl( &$output, $depth = 0, $arg = Array() )
    {
        $output .= "\n<ul class='sub-menu'>\n";

    }

    function end_lvl(&$output, $depth=0, $args=array()) 
    {    
        $output .= "</ul>\n";
    }

};
?>