<?php
session_start();
include "connection.php";
include "header.php";
?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Change Password</h4>               
                <form class="forms-sample" action="" method="post">                
                    <div class="form-group">
                      <label for="currentpassword">Current Password</label>
                      <input type="text" class="form-control"  name="currentPassword" placeholder="Current Password">
                    </div>
                    <div class="form-group">
                      <label for="New Password">New Password</label>
                      <input type="text" name="newPassword" class="form-control"  placeholder="New Password">
                    </div>
                    <div class="form-group">
                      <label for="qty">Confirm Password</label>
                      <input type="text" name="confirmPassword" class="form-control" placeholder="Confirm Password">
                    </div>                    
                    <input type="submit" name="submit" class="btn btn-primary me-2" value="Submit">
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <?php
                           if(isset($_POST['submit'])){
                               $username=$_SESSION["admin"];                                                       
                               $currentpass=$_POST['currentPassword'];                           
                               $newpass=$_POST['newPassword'];                            
                               $confirmpass=$_POST['confirmPassword'];
                               $checkPassword=mysqli_query($link,"select * from admin where email='$username'");                                                   
                               while($row=mysqli_fetch_array($checkPassword)){
                                   $currentPassword=$row['password'];                                   
                               }
                               if($currentpass!=$currentPassword){
                                ?>
                                <div class="alert alert-danger col-lg-12 col-lg-push-0">
                                    <strong style="color:white">Incorrect  current Password.</strong>
                               </div><?Php
                               }
                               elseif($newpass!=$confirmpass)
                               {
                                ?>
                                <div class="alert alert-danger col-lg-12 col-lg-push-0">
                                    <strong style="color:white">New Password And Confirm Password do not matching. </strong>
                               </div><?Php
                               }
                               else{
                                ?>
                                <div class="alert alert-success col-lg-12 col-lg-push-0">
                                    <strong style="color:white">Password updated. </strong>
                               </div><?Php
                                   mysqli_query($link,"update admin set password='$newpass' where email='$username'");
                               }
                           }
                           
                           ?>
             </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>