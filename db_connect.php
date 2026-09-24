<?php
// 1. Define Database Credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1-D";

// Connect
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>