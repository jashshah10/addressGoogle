<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placedb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM places";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["place"]. "</td><td>" . $row["todo"]."</td><td>" . $row["month"]."</td><td>" . $row["timeinhours"]."</td></tr>";
    }
} else {
    echo "<tr><td>0 results</td><td></td><td></td></tr>";
}
$conn->close();
?>