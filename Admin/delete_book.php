<?php
session_start();
include "connection.php";
$id=$_GET['id'];
mysqli_query($link,"Delete from books where id='$id'");
header("location:view_books.php");
?>