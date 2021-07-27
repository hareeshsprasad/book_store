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
                      echo'<table class="table table-dark">';
                      echo'<thead>';
                      echo'<tr>';
                    //   echo'<th>';
                    //   echo  ' No';
                    //   echo  '</th>';
                      echo  '<th>';
                      echo  'Category';
                      echo  '</th>';
                      echo  '<th>';
                      echo  'Book Name';
                      echo  '</th>';
                      echo  '<th>';
                      echo  'Author Name';
                      echo  '</th>';
                      echo  '<th>';
                      echo  'Quantity';
                      echo  '</th>';
                      echo  '<th>';
                      echo  'Available';
                      echo  '</th>';
                      echo  '<th>';
                      echo  'Price';
                      echo  '</th>';
                      echo  '<th>';
                      echo  'Description';
                      echo  '</th>';
                      echo  '</tr>';
                      echo  '</thead>';
                      while($row=mysqli_fetch_array($res)){
                      echo  '<tbody>';
                      echo  '<tr>';
                    //   echo  '<td>';
                    //   echo  '1';
                    //   echo  '</td>';
                      echo  '<td>';
                      echo $row['category'];
                      echo  '</td>';
                      echo  '<td>';
                      echo $row['book_name'];  
                      echo  '</td>';
                      echo  '<td>';
                      echo $row['author'];   
                      echo  '</td>';
                      echo  '<td>';
                      echo $row['quantity'];  
                      echo  '</td>';
                      echo  '<td>';
                      echo $row['avaiable_quantity'];   
                      echo  '</td>';
                      echo  '<td>';
                      echo $row['price	'];  
                      echo  '</td>';
                      echo  '<td>';
                      echo $row['description'];  
                      echo  '</td>';
                      echo  '</tr>';                     
                      echo  '</tbody>';
                      echo  '   </table>';
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>