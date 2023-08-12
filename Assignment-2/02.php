<?php
    $a = array('a','b','c');
    $b = array('d','e','f');
    for ($i = 0; $i < 3; $i++) 
    { 
        $a[$i+3]=$b[$i];
    }
    print_r($a);
?>