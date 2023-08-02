<?php
    $a = array(2, 8, 19, 86, 78);
    $temp = 0;
    sort($a);
    echo "Ascending: ";
    for ($i = 0; $i < 5; $i++) 
    { 
        echo "$a[$i] ";
    }
    rsort($a);
    echo "<br>";
    echo "Descending: ";
    for ($i = 0; $i < 5; $i++) 
    { 
        echo "$a[$i] ";
    }
    // for ($i = 0; $i < 5; $i++) 
    // {
    //     for ($j = 0; $j < 5; $j++)
    //     {
    //         if ($a[$i]<$a[$j]) 
    //         {
    //             $temp = $a[$i];
    //             $a[$i] = $a[$j];
    //             $a[$j] = $temp;
    //         }
    //     }
    // }
    // echo "Ascending: ";
    // for ($i = 0; $i < 5; $i++) 
    // { 
    //     echo "$a[$i] ";
    // }
    // for ($i = 0; $i < 5; $i++) 
    // {
    //     for ($j = 0; $j < 5; $j++)
    //     {
    //         if ($a[$i]>$a[$j]) 
    //         {
    //             $temp = $a[$i];
    //             $a[$i] = $a[$j];
    //             $a[$j] = $temp;
    //         }
    //     }
    // }
    // echo "<br>";
    // echo "Descending: ";
    // for ($i = 0; $i < 5; $i++) 
    // { 
    //     echo "$a[$i] ";
    // }
?>