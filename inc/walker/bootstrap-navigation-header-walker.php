<?php 

class bootstrap_header_menu_walker 
    extends bootstrap_base_menu_walker
{
    function start_lvl( &$output, $depth = 0, $arg = Array() )
    {
        $output .= $this->getOutput();
        $this->clearOutput();
    }

    function end_lvl(&$output, $depth=0, $args=array()) 
    {
        $output .= $this->getOutput();
        $this->clearOutput();
    }

    function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 )
    {
        
        // Preparing variables
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;

        $this->appendOutput("<li class='" .  implode(" ", $item->classes) . "'>");
        
        //Add SPAN if no Permalink
        if( $permalink && $permalink != '#' ) 
        {
            if(in_array("menu-item-has-children", $item->classes, true))
            {
                $this->appendOutput("<a class='nav-link' href='" . $permalink . "' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>");
            }
            else 
            {
                $this->appendOutput( "<a class='nav-link' href='" . $permalink . "'>");
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
        
        
        $output .= $this->getOutput();
        $this->clearOutput();
    }

};
?>