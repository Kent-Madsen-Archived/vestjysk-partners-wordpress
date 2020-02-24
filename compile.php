<?php
    function compile()
    {
        $run = exec('sass ./sass/theme/style.scss style.css');
        echo $run;
    }

    compile()
?>