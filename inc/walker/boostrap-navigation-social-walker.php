<!-- Bootstrap Navigation Social Walker -->
<?php 

class social_menu_walker extends Walker_Nav_Menu
{
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

    }

    function end_lvl(&$output, $depth=0, $args=array()) 
    {    
        $output .= "</ul>\n";
    }

};

?>