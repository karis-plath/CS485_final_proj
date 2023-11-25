<!DOCTYPE html>

<html lang = "en">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Style_sheet.css" />

<header id= "bar">
<h1 style = "margin-top:0px; margin-left:0px; margin-right:0px;">
<?php
session_start();
$user = $_SESSION["username"];
?>
                <!-- Navbar -->
		<nav class="navbar navbar-expand-lg nav-bg fixed-top">
		<div class="navbar-collapse" id="navbarNavAltMarkup">
				<ul class="nav justify-content-center">
					<li class="nav-item"><a class="nav-link" href="#">Search</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Postings</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
	<li class="nav-item"><a class="nav-link" href="Login.php">Logout</a></li>
			</ul>
		</div>
		</nav>
    <header>
        <p id = "content"> </p>
    </header>


</html>