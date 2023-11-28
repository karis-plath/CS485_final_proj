<?php include ("menu.php")?>

<?php
$servername = "localhost";
$username = "root";
$password = "1111";
$dbname = "cs485_labs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the query parameter
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    // Fetch additional details based on the ID
    $sql = "SELECT * FROM Plant JOIN Flower ON Plant.PlantID = Flower.PlantID JOIN Fruit ON Plant.PlantID = Fruit.PlantID JOIN Leaf ON Plant.PlantID = Leaf.PlantID JOIN Stem ON Plant.PlantID = Stem.PlantID WHERE Plant.PlantID = '$id'"; // Assuming your primary key column is named 'id'
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_row();
        // Display details
        echo "<h2>Details for Plant: " . $row[1] . "</h2>";
        echo "<p>Scientific Name: " . $row[2] . "</p>";
        echo "<p>Habitat: " . $row[3] . "</p>";
        echo "<p>Type: " . $row[4] . "</p>"; // Adjust the column names as per your database
        echo "<p>Origin: " . $row[5] . "</p>";
        echo "<img src='" . $row[6] . "' alt='Plant Image'>";
        
        echo"<h2>Flower</h2>";
        echo "<p>Color: " . $row[8] . "</p>";
        echo "<p>Type: " . $row[9] . "</p>";
        
        echo"<h2>Fruit</h2>";
        echo "<p>Color: " . $row[11] . "</p>";
        echo "<p>Edible: " . $row[12] . "</p>";
        echo "<p>Season: " . $row[13] . "</p>";
        
        echo"<h2>Leaf</h2>";
        echo "<p>Texture: " . $row[15] . "</p>";
        echo "<p>Edges: " . $row[16] . "</p>";
        echo "<p>Shape: " . $row[17] . "</p>";
        echo "<p>Type: " . $row[18] . "</p>";
        
        echo"<h2>Stem</h2>";
        echo "<p>Color: " . $row[20] . "</p>";
        echo "<p>Texture: " . $row[21] . "</p>";
        echo "<p>Shape: " . $row[22] . "</p>";

        // Add more details as needed
        
        // Fetch and display postings
        $postingsSql = "SELECT * FROM postings WHERE PlantID = '$id'";
        $postingsResult = $conn->query($postingsSql);
        
        if ($postingsResult->num_rows > 0) {
            echo "<h2>Postings</h2>";
            while ($postingsRow = $postingsResult->fetch_row()) {
                echo "<p>Post Title: " . $postingsRow[1] . "</p>";
                echo "<p>Post Content: " . $postingsRow[2] . "</p>";
                // Add more details as needed
            }
        } else {
            echo "<p>No postings found for this plant.</p>";
        }
        
    } else {
        echo "Plant not found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
