<?php
    $a = array(2, 8, 19);
    $b = array(26, 34 ,81);
    $result = array_merge($b, $a);
    for ($i=0; $i < 6; $i++) 
    { 
        echo "$result[$i] ";
    }
?>