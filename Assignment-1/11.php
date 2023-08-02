<?php
    $a=101;
    echo "Entered number is ".$a. "<br>";
    $b=strrev($a);
    if ($a==$b) 
    {
        echo $a. " is palindrome";
    } 
    else
    {
        echo $a. "is not palindrome";
    }
?>