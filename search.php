<?php
// Report all error information on the webpage
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_name = "cs485_labs";
$db_user = "root";
$db_passwd = "111111";
$name = $_POST["searchBox"];

$db = new mysqli("localhost", $db_user, $db_passwd, $db_name);
// db location, user, passwd, database
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
} else {
    $sql = "SELECT Name FROM `Plant` WHERE Name LIKE '%" . $name . "%'";
    $r = $db->query($sql);
    if (mysqli_num_rows($r) === 0) {
        echo "No matching results";
    }
    // $result = array();
    while ($row = $r->fetch_assoc()) {
        echo '<a href="plant_info.php?id=' . $row['Name'] . '">' . $row['Name'] . '</a><br><br>';
    }
}
$db->close();
?> 