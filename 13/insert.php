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
    
    $table_name = "IT2022";
    $col1 = $_REQUEST['feild1'];
    $col2 = $_REQUEST['feild2'];
    $col3 = $_REQUEST['feild3'];

    $sql="INSERT INTO $table_name VALUES ('$col1', '$col2', '$col3')";
    if($conn->query($sql) == TRUE) 
    {
        echo "<p>DATA INSERTED SUCCESSFULLY...!!!</p>"."<br>";
    }
    else 
    {
        echo "<p>ERROR...!!!</p>"."<br>";
    }
    $conn->close();
?>