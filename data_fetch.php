<?php
$servername = "localhost";
$username = "root";
$password = "1111";
$dbname = "cs485_labs";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT Name FROM Plant";
$result = $conn->query($sql);

// Store the result in an associative array
$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Convert the data to JSON and echo it
echo json_encode($data);

// Close the connection
$conn->close();
?>