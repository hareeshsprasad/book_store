<?php
session_start();
include "connection.php";
include "header.php";
?>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Category</h4>
                  <p class="card-description">
                    Category
                  </p>
                  <form class="forms-sample" action="" method="post">
                    <!-- <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category Name</label>
                      <input type="text" class="form-control" name="category"  placeholder="Category Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <input type="text" class="form-control" name="description" placeholder="Description">
                    </div>                
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="index.php"><button type="button" class="btn btn-light">Cancel</button></a>
                  </form>
                  <?php
                  if(isset($_POST['submit'])){
                      $category_name=$_POST['category'];
                      $description=$_POST['description'];
                      $sql="INSERT INTO `category`(`category_name`, `description`) VALUES ('$category_name','$description')";
                      mysqli_query($link,$sql);
                  }
                  
                  ?>
                </div>
              </div>
            </div>