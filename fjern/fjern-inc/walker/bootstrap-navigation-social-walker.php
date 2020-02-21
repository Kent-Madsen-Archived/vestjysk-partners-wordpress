<?php 

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