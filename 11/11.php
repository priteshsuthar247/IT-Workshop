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

    $table_name = 'test01';
    $emp_name = $_REQUEST['emp_name'];
    $feild1 = $_REQUEST['feild1'];
    $feild2 = $_REQUEST['feild2'];

    $sql="UPDATE $table_name SET $feild1 = $feild2 WHERE Emp_Name = '$emp_name';";
    if($conn->query($sql) == TRUE) 
    {
        echo "DATA UPDATED SUCCESSFULLY...!!!"."<br>";
    }
    $conn->close();
?>