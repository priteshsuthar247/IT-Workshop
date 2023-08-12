<?php
    $a=2;
    $b=10;
    function checkprime($c)
    {
        $flag=0;
        for ($i = 1; $i <= $c; $i++) 
        {
            if ($c % $i == 0) 
            {
                $flag++;
            }
        }
        if ($flag == 2) 
        {
            echo "$c is a Prime number.<br>";
        }
        else 
        {
            echo "$c is not a Prime number.<br>";
        }
    }
    checkprime($a);
    checkprime($b);
?>