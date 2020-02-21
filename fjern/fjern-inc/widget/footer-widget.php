<?php 

function my_dynamic_sidebar_params( $params ) 
{
    $default = '<div class="widgetizedArea';

     for( $idx = 0; 
          $idx < sizeof( $params ); 
          $idx ++ )
     {
         if( $idx == 0 )
         {
            $widget_area_name = $params[$idx]['id']; 

            $widget_name = $params[$idx]['widget_name'];
            $widget_area_identity = $params[$idx]['widget_id'];
           
            // $widget_chosen_size = get_field('widget-group', 'widget_' . $widget_area_identity);
            // $params[$idx]['before_widget'] = $default . ' ' . $widget_chosen_size . '">';
            
            if( true )
            {         
               $widget_chosen_group = get_field('widget-group', 'widget_' . $widget_area_identity);

               $widget_size_group = get_field('widget-entries-number', 'widget_' . $widget_area_identity);
               $widget_current_entry_id = get_field('widget-entry-identity', 'widget_' . $widget_area_identity);

               echo "<!--Tag: Footer - Widget \r\n";

               echo "group name: \r\n";
               echo $widget_chosen_group . "\r\n";
               
               echo "group size: \r\n";
               echo $widget_size_group . "\r\n";

               echo "group entry id: \r\n";
               echo $widget_current_entry_id . "\r\n";
          
               echo "\r\n";
               echo "\r\n -->";

               if($widget_current_entry_id == 1)
               {
                  $params[$idx]['before_widget'] = '<div class=' . '"' . $widget_chosen_group . '"' . '>'. $default . ' ' . '">';

               }

               if(($widget_current_entry_id % $widget_size_group) == 0)
               {
                  $params[$idx]['after_widget'] ="</div> </div>";
               }
               
            }
   
   
         }
     }

     echo "<!--";

     print_r($params);

     echo "-->";
     
    
	// return
	return $params;
}

?>