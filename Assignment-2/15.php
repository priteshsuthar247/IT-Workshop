<?php
    $a=10;
    $b=20;
    function callbyvaule($a,$b)
    {
        $temp=$a;
        $a=$b;
        $b=$temp;
    }
    function callbyreference(&$a,&$b)
    {
        $temp=$a;
        $a=$b;
        $b=$temp;
    }
    callbyvaule($a,$b);
    echo "Calling by value: <br>";
    echo "A:  $a <br>B: $b <br>";
    callbyreference($a,$b);
    echo "Calling by reference: <br>";
    echo "A:  $a <br>B: $b <br>";
?>