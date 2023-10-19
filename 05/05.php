<?php
    $myfile = fopen("test.txt", "w");
    $title='Quotes <br>';
    fwrite($myfile, $title);
    $add='1. Github The Place Where I Fork. <br>
    2. Declare Variables Not War. <br>
    3. Void A Place Of No Return. <br>';
    $myfile = fopen("test.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $add);
    $myfile = fopen("test.txt", "r");
    echo fread($myfile,filesize("test.txt"));
    fclose($myfile);
?>