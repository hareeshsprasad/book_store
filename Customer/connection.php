<?php
$servername = "localhost";
$username = "user";
$password = "123";
$dbname	="book_store";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>