<!DOCTYPE html>
 
<html lang = "en" >
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Style_sheet.css" />
 <h1 style = "margin-top:0px; height:0px;">
<?php
session_start();
$user = $_SESSION["Username"];
?>
                <!-- Navbar -->
                
     <header id=bar_up>
    <h1>
        <div id=menu>
            <ul>
               <li class="nav-item"><a class="nav-link" href="search_page.php">Search</a></li>
               <li class="nav-item"><a class="nav-link" href="create_post.php">Postings</a></li>
               <li class="nav-item"><a class="nav-link" href="user_profile.php">Profile</a></li>
               <li class="nav-item"><a class="nav-link" href="Login.php">Logout</a></li>
            </ul>
        </div>
    </h1>
 
        <p id = "content"> </p>
    </header>
 
 
</html>