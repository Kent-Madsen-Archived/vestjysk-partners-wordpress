<?php 
function my_dynamic_sidebar_params( $params ) 
{
    $default = '<div class="widgetizedArea';

     for( $idx = 0; 
          $idx < sizeof( $params ); 
          $idx ++ )
     {
         if($idx == 0)
         {
             
            if(is_debugging())
            {
                print("<!--");
                print_r($params[$idx]);
                print("-->");
            }

            $widget_area_name = $params[$idx]['id']; 

            $widget_name = $params[$idx]['widget_name'];
            $widget_area_identity = $params[$idx]['widget_id'];
   
            if(true)
            {             
               $widget_chosen_size = get_field('widgetSize', 'widget_' . $widget_area_identity);
               $params[$idx]['before_widget'] = $default . ' ' . $widget_chosen_size . '">';
            }
   
         }

     }

    
	// return
	return $params;
}
?>