<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pritesh";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM STORE";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="12.css">
</head>
<body>
    <h2>Store Data</h2>
    <table>
        <tr>
            <th>P_ID</th>
            <th>P_NAME</th>
            <th>PRICE_$</th>
            <th>P_TYPE</th>
        </tr>
        <?php
        if ($result->num_rows > 0) 
        {
            while ($row = $result->fetch_assoc()) 
            {
                echo "<tr>";
                echo "<td>" . $row["P_ID"] . "</td>";
                echo "<td>" . $row["P_NAME"] . "</td>";
                echo "<td>" . $row["PRICE_$"] . "</td>";
                echo "<td>" . $row["P_TYPE"] . "</td>";
                echo "</tr>";
            }
        } else 
        {
            echo "<tr><td colspan='4'>No data available</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
    $conn->close();
?>
