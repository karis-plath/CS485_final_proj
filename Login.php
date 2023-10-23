<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="author" content="Karis and Lindsey">
<link rel="stylesheet" href="Style_sheet.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<title>Login</title>
</head>
<div class="d-flex justify-content-center container">

<h1>Login</h1>
	<form method=POST>
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input id="user" type="text" class="form-control well-sm input-lg" name="email"
				placeholder="Username">
		</div>
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input id="pass" type="text" class="form-control well-sm input-lg"
				name="password" placeholder="Password">
		</div>
		 <button name="sub" type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
    <?php
    if (isset($_POST['sub'])) {
        $servername = "localhost";
        $username = "root"; // user name
        $password = "111111"; // password used to login MySQL server
        $dbname = "cs485_labs";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Use prepared statement in SQL
        $name = $_POST['user'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM login WHERE username = '$name' AND password = '$pass'";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { // info about query"https://www.w3schools.com/php/php_mysql_select.asp
                if ($row["username"] == $name) {
                    $check = 1;
                    if ($row["password"] != $pass) {
                        echo '<script>alert("Username does not match password")</script>';
                    } else {
                        session_start();
                        $_SESSION["username"] = $name;
                        header("Location: search_page.php");
                        exit();
                    }
                }
            }
            if ($check == 0) {
                echo '<script>alert("Username does not exist")</script>';
            }
        }
        $result->close();
        $conn->close();
    }
    ?> 
</html>
