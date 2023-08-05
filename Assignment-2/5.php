<?php
    $a = array(2, 8, 19, 86, 78);
    echo "Before deletion: <br>";
    print_r($a);
    unset($a[2]);
    echo "<br>";
    echo "After deletion: <br>";
    print_r($a);
?>