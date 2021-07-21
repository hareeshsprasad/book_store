<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <form class="box" action="" method="post">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login">
    </form>
    <?php
    if(isset($_POST['login']))
    $email=$_POST['email'];
    $password=$_POST['password'];
    $count=0;
    $res=mysqli_query($link,"select * from admin where email='$email' && password='$password'");
    $count=mysqli_num_rows($res);
    if($count==o){
        ?>
       <!-- <div class="alert-alert danger">
       <strong style="color:white">Invalid Username Or Password </strong>.
       </div>     -->
        <?php
    } else{
        $_SESSION["admin"]=$_POST["email"];
    
    header("location:index.html");
}   
    ?>
</body>
</html>