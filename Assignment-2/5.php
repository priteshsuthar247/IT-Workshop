<?php
    $a = array(2, 8, 19, 86, 78);
    for ($i = 1; $i < 4; $i++) 
    {
        $a[$i]=0;
        $a[$i]=$a[$i+1];
    }
    for ($i = 0; $i < 4; $i++) 
    { 
        echo "$a[$i] ";
    }
?>