<?php 

function my_wp_nav_menu_objects( $items, $args ) 
{
    apply_logo($items, $args);

    return $items;
}

function apply_logo($items, $args)
{
    foreach( $items as &$item )
    {
        $icon = get_field('icon-name', $item);
    
        if ($icon)
        {
            $item->title = '<i class="' . $icon . '"></i>';
        }

    }

    return $items;
}

?>