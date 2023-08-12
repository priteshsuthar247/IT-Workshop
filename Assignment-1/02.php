<?php
    $a="Global Variable";
    function f1()
    {
        $b="Local Variable <br>";
        echo $b;
        /* to access global varible in function 
            we write global before accessing the variable */
        global $a;
        echo $a. " is called inside the function<br>";
    }
    f1();
    echo $a;
?>