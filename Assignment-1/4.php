<?php
    $a=1;    
    $b=2;
    function f1($c)
    {
        if ($c%2==0) 
        {
            echo "$c is even. <br>";
        }
        else
        {
            echo "$c is odd. <br>";
        }
    }
    f1($a);
    f1($b);
?>