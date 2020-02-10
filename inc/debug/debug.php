<?php 
    function debugPrint($name, $value)
    {
        if (!is_debugging())
        {
            return;
        }

        print("<!--");
            print($name);
            print(": ");
            print($value);
        print("-->");
    }

    
    function is_debugging()
    {
        $debug_state = false;

        return $debug_state;
    };

?>