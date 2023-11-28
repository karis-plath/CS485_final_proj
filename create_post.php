<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Posting</title>
</head>
<body>
	<?php include ("menu.php")?>
    <h1>Plant Posting Form</h1>

    <?php
    $User = $_SESSION["Username"];
    $servername = "localhost";
    $username = "root";
    $password = "1111";
    $dbname = "cs485_labs";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $plantName = $_POST["plantName"];
        $plantDescription = $_POST["plantDescription"];
        
        // Insert data into the 'Postings' table
        $sql = "INSERT INTO Postings VALUES ($Count, '$User', '$plantName', 0, '$plantDescription')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>

    <form action="" method="post">
        <label for="plantName">Plant Name:</label>
        <input type="text" id="plantName" name="plantName" required>

        <br>

        <label for="plantDescription">Plant Description:</label>
        <textarea id="plantDescription" name="plantDescription" required></textarea>

        <br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
