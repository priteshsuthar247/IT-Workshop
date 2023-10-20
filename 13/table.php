<h2>IT2022</h2>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pritesh";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SR_NO, STU_ID, STU_NAME FROM IT2022";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        echo "<table border='1'>";
        echo "<tr><th>SR_NO</th><th>STU_ID</th><th>STU_NAME</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo "<tr><td>" . $row["SR_NO"] . "</td><td>" . $row["STU_ID"] . "</td><td>" . $row["STU_NAME"] . "</td></tr>";
        }

        echo "</table>";
    } 
    else 
    {
        echo "<p>No records found in the table.</p>";
    }
    mysqli_close($conn);
?>
