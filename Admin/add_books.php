<?php
session_start();
include "connection.php";
include "header.php";
?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description">
                    Basic form elements
                </p>
                <form class="forms-sample" action="" method="post">
                <div class="form-group">
                  <select name="category" class="form-control">
                  <option selected='selected' disabled='disabled'>Select Category</option>
                  <?php
                  $res=mysqli_query($link,"select * from category");
                  while($row=mysqli_fetch_array($res))
                  {
                    echo "<option>";
                    echo $row["category_name"];
                    echo "</option>";                   
                  }
                  ?>
                  </select>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Book Name</label>
                      <input type="text" class="form-control"  name="book_name" placeholder="Book Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">AUthor Name</label>
                      <input type="text" name="author_name" class="form-control"  placeholder="Author Name">
                    </div>
                    <div class="form-group">
                      <label for="qty">Quantity</label>
                      <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="form-group">
                      <label for="Availabe">Available Quantity</label>
                      <input type="text" name="available_quantity" class="form-control" placeholder="available quantity">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Price</label>
                      <input type="text" name="price" class="form-control" placeholder="Price">
                    </div>
                    <!-- <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div> -->                    
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary me-2" value="Submit">
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <?php
                  if(isset($_POST['submit']))
                  {                    
                    $category=$_POST['category'];
                    $name=$_POST['book_name'];
                    $author=$_POST['author_name'];
                    $quantity=$_POST['quantity'];
                    $available_quantity=$_POST['available_quantity'];
                    $price=$_POST['price'];
                    $description=$_POST['description'];
                    $query="INSERT INTO `books`( `category`, `book_name`, `author`, `quantity`, `avaiable_quantity`, `price`, `description`) 
                    VALUES (' $category','$name','$author','$quantity','$available_quantity','$price','$description')"; 
                    mysqli_query($link,$query);
                  }
                  ?>
             </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>