<?php
session_start();
include "connection.php";
include "header.php";
?>

<div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Book Details</h4>                  
                  <div class="table-responsive pt-3">
                  <?php
                                $res=mysqli_query($link,"select * from books");
                                echo"<table class='table table-bordered'>";
                                echo"<tr>";                               
                                echo"<th>";echo "Category"; echo"</th>";
                                echo"<th>";echo "Book Name"; echo"</th>";
                                echo"<th>";echo "Author"; echo"</th>";
                                echo"<th>";echo "Quantity"; echo"</th>";
                                echo"<th>";echo "Available Quantity"; echo"</th>";
                                echo"<th>";echo "Price"; echo"</th>";
                                echo"<th>";echo "Description"; echo"<t/h>";                                
                                echo"<th>";echo "Edit"; echo"</th>";
                                echo"<th>";echo "Delete"; echo"</th>";
                                echo"</tr>";
                                while($row=mysqli_fetch_array($res)){
                                
                                echo"<tr>";                                
                                echo"<td>";echo $row["category"]; echo"</td>";
                                echo"<td>";echo $row["book_name"]; echo"</td>";
                                echo"<td>";echo $row["author"];echo"</td>";
                                echo"<td>";echo $row["quantity"]; echo"</td>";
                                echo"<td>";echo $row["available_quantity"]; echo"</td>";
                                echo"<td>";echo $row["price"]; echo"</td>";
                                echo"<td>";echo $row["description"];echo"</td>";                                
                                echo"<td>";?><a href="edit_book.php?id=<?php echo $row["id"];?>">Edit</a> <?php echo"</td>";
                                echo"<td>";?><a href="delete_book.php?id=<?php echo $row["id"];?>">Delete</a> <?php echo"</td>";
                                echo"</tr>";
                                 }
                                 echo"</table>";
                                ?>
                  </div>
                </div>
              </div>
            </div>