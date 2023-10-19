<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = $_REQUEST['data'];
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['create'])) 
    {
        $create = "CREATE DATABASE $database_name";
        if ($conn->query($create) == TRUE) 
        {
            echo "Database created successfully";
        }
        else 
        {
            echo "Error creating database: " . $conn->error;
        }
    }
    if (isset($_POST['delete']))
    {
        $delete = "DROP DATABASE $database_name";
        if ($conn->query($delete) == TRUE) 
        {
            echo "Database Droped successfully";
        }
        else 
        {
            echo "Error dropping database: " . $conn->error;
        }
    }
    $conn->close();
?>