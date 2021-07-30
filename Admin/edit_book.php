<?php
session_start();
include "connection.php";
include "header.php";
$id=$_GET['id'];
$result=mysqli_query($link,"select * from books where id='$id'");
while($row=mysqli_fetch_array($result)) {
    $category=$row['category'];
    $name=$row['book_name'];
    $author=$row['author'];
    $quantity=$row['quantity'];
    $available_quantity=$row['available_quantity'];
    $price=$row['price'];
    $description=$row['description'];    
}
?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Books</h4>                
                <form class="forms-sample" action="" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Category</label>
                      <input type="text" class="form-control"  name="category" value=<?php echo $category;?>>
                    </div>          
                    <div class="form-group">
                      <label for="exampleInputName1">Book Name</label>
                      <input type="text" class="form-control"  name="book_name" value=<?php echo $name;?>>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">AUthor Name</label>
                      <input type="text" name="author_name" class="form-control"  value=<?php echo $author;?>>
                    </div>
                    <div class="form-group">
                      <label for="qty">Quantity</label>
                      <input type="text" name="quantity" class="form-control" value=<?php echo $quantity;?>>
                    </div>
                    <div class="form-group">
                      <label for="Availabe">Available Quantity</label>
                      <input type="text" name="available_quantity" class="form-control" value=<?php echo $available_quantity;?>>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Price</label>
                      <input type="text" name="price" class="form-control" value=<?php echo $price;?>>
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
                      <label for="exampleInputPassword4">Description</label>
                      <input type="text" name="description" class="form-control" value=<?php echo $description;?>>
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
                    $query=("UPDATE `books` SET `category`='$category',`book_name`='$name',
                    `author`='$author',`quantity`='$quantity',`available_quantity`='$available_quantity',
                    `price`='$price',`description`='$description' WHERE id='$id'");                    
                    mysqli_query($link,$query);                
                  }
                  
                  ?>
                  
             </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>