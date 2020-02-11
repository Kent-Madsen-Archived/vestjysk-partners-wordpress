<?php 

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
?>