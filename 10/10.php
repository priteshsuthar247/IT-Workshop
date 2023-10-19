<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname= "pritesh";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $table_name = $_REQUEST['table'];

    $sql="DROP TABLE $table_name;";
    if($conn->query($sql) == TRUE) 
    {
        echo "TABLE DROPPED SUCCESSFULLY...!!!"."<br>";
    }
    $conn->close();
?>