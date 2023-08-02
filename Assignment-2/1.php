<?php
    $a = array(35, 95, 619, 23, 1);
    $min=$a[0];
    $max=0;
    for($i=0; $i < 5; $i++)
    {
        if ($max<$a[$i]) 
        {
            $max=$a[$i];
        }
    }
    for($i=0; $i < 5; $i++)
    {
        if ($min>$a[$i]) 
        {
            $min=$a[$i];
        }
    }
    echo "Maximum: $max<br>Minimum: $min";
    ?>