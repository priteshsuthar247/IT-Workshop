<?php
    $cookie_name = "user";
    $cookie_value = "Pritesh";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
    if (isset($_COOKIE[$cookie_name]) == 'user') 
    {
        if(!isset($_COOKIE[$cookie_name])) 
        {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } 
        else 
        {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    }
    else
    {
        echo "Reload to see the change.";
    }
?>