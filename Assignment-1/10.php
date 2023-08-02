<?php
    function f1($num)
    {  
        $count = 0;
        $n1 = 0;  
        $n2 = 1;    
        echo $n1.' '.$n2.' ';  
        while ($count < $num )  
        {  
            echo ' '.$n1;
            $n3 = $n2 + $n1;
            $n1 = $n2;
            $n2 = $n3;
            $count = $count + 1;  
        }
    }
    function f2($num)
    {
        if ( $num == 0 )
        return 0;
        else if ( $num == 1 )
        return 1;
        else
        return (f2($num-1) + f2($num-2));
    }
    $num=10;
    echo "Without Recursion: ";
    echo f1($num). " ";
    echo "<br>";
    echo "Using Recursion: ";
    for ( $i = 0 ; $i < $num ; $i++ )
    {
        echo f2($i). " ";
    }
?>