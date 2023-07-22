<?php
    $a=13;
    $sum=0;
    while($a>0)    
    {    
        $m=$a%10;    
        $sum=$sum+$m;    
        $a=$a/10;    
    }    
    echo "Sum is = $sum";
?>