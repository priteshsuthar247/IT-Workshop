<?php
    session_start();
    $_SESSION["name"] = "Pritesh";
    echo "Hello I am ".$_SESSION["name"];
?>
