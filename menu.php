<!DOCTYPE html>

<html lang = "en">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Style_sheet.css" />

<header id= "bar">
<h1 style = "margin-top:0px; height:12px;">
<?php
session_start();
$user = $_SESSION["Username"];
?>
                <!-- Navbar -->
		<nav class="navbar navbar-expand-lg nav-bg fixed-top">
		<div class="navbar-collapse" id="navbarNavAltMarkup">
				<ul class="nav justify-content-center">
					<li class="nav-item"><a class="nav-link" href="search_page.php">Search</a></li>
					<li class="nav-item"><a class="nav-link" href="create_post.php">Post</a></li>
					<li class="nav-item"><a class="nav-link" href="user_profile.php">Profile</a></li>
	<li class="nav-item"><a class="nav-link" href="Login.php">Logout</a></li>
			</ul>
		</div>
		</nav>
    <header>
        <p id = "content"> </p>
    </header>


</html>