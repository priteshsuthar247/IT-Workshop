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
    $col1 = $_REQUEST['feild1'];
    $col2 = $_REQUEST['feild2'];
    $col3 = $_REQUEST['feild3'];

    $sql="CREATE TABLE $table_name($col1 INT, $col2 INT, $col3 VARCHAR(50));";
    if($conn->query($sql) == TRUE) 
    {
        echo "TABLE CREATED SUCCESSFULLY...!!!"."<br>";
    }
    $conn->close();
?>
