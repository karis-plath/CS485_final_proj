<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Karis and Lindsey">
        <link rel="stylesheet" href="Style_sheet.css">
        <title>Login</title>
    </head>
    
    <h1>Welcome</h1>

    <form action="test_login.php" method="POST">
    	<input id ="inputSize" type="submit" name="submitLogout" value="Logout">
    </form>
    
    <?php
    if (isset($_POST['sub'])) {
    
        $servername = "localhost";
        $username = "root"; // user name
        $password = "1111"; // password used to login MySQL server
        $dbname = "cs485_labs";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
    
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Use prepared statement in SQL
        $stmt = $conn->prepare("INSERT INTO login (username, password) VALUES (?, ?)");
    
        $name = $_POST['user'];
        $pass = $_POST['pass'];
    
        $stmt->bind_param("ss", $name, $pass); // ss lists types of parameters, they two strings
        $stmt->execute();
    
        echo "New records created successfully";
    
        $stmt->close();
        $conn->close();
    }
    
    ?>

</html>
