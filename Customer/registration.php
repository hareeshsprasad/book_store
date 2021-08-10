<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <div class="container">
        <div class="row">  
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">                
                <form action="" method="post">                    
                    <div class="form-group">
                      <label for="exampleInputFirstName">First Name</label>
                      <input type="text" name="firstname" class="form-control" >                
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLastName">Last Name</label>
                        <input type="text" name="lastname" class="form-control" >                
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputPassword1">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword2">
                      </div>                    
                    <input type="submit" name="submit" value="Register" class="btn btn-primary"></button>
                    <div>
                        <small>Already have an account?</small> <a href="login.php"><small>Sign In</small></a>
                    </div>
                  </form>            
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div>
                    <h3>Sign Up</h3>
                </div>                
                <div class="lg-image">
                    <img src="img/cover.jpeg" class="img-fluid">
                </div>                
            </div> 
        </div>        
    </div>
    <?php
            if(isset($_POST['submit']))
            {                
                $firstname=$_POST['firstname'];
                $lastname=$_POST['lastname'];
                $email=$_POST['email'];
                $password=$_POST['password'];                
                $confirmpassword=$_POST['confirmpassword'];
                if($confirmpassword!=$password){
                    ?>
                    <div class="alert alert-danger col-lg-12 col-lg-push-0">
                    <strong style="color:red">Passwords do not match</strong>                 
                    </div>
                    <?php
                }
                $checkUsername=mysqli_query($link,"select * from user where email='$email'");
                if (mysqli_num_rows($checkUsername) > 0) {        
        $row = mysqli_fetch_assoc($checkUsername);
        if($email==isset($row['email']))
        {
            ?>
                <div class="alert alert-danger col-lg-12 col-lg-push-0">
                <strong style="color:red">Email</strong> already exists.                 
                </div>
                <?Php
        }
    }
        else{             
                $query="INSERT INTO `user`( `first_name`, `last_name`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')";               
                mysqli_query($link,$query);
              }
            ?>
        <div class="alert alert-success col-lg-12 col-lg-push-0">
        Registration successfully completed
        </div>

        <?php
    }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"
    ></script>
    <script src="js/hekpme.js"></script>
</body>
</html>