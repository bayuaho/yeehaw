<?php

session_start();

if ($_SESSION["isloggin"] != "login") {
    header ("Location: login.php");
} 
?>


<h1 style="text-align:center">Halaman Dashboard</h1>
<h3>wandahoyyy</h3>
<a href="logout.php">Logout</a>