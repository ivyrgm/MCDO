<?php
    session_start();
    include('dbconn.php');
  
?>
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
$id=$_REQUEST['order_details_id'];
$sql = "SELECT * from order_details where order_details_id='".$id."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head runat="server">
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
        <!---CSS--->
        <link href="./css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" > </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

            <title>CART | MCDO Furniture</title>
    
            
        </head>

<?php
  $status = "";
  if(isset($_POST['new']) && $_POST['new']==1)
  {
  $id = $_REQUEST['order_details'];
  $furniture_name = $_REQUEST['furniture_name'];
  $category_name = $_REQUEST['category_name'];
  $prod_qty = $_REQUEST['prod_qty'];
  $furniture_price = $_REQUEST['furniture_price'];



  $update = "UPDATE order_details SET furniture_name='".$furniture_name."', category_name='".$category_name."', prod_qty='".$prod_qty."',furniture_price='".$furniture_price."' WHERE order_details='".$id."'";
  mysqli_query($conn, $update) or die(mysqli_error());
  $status = "Record Updated Successfully. </br></br><a href='user_cart.php'>View Updated Record</a>";
  echo '<p style="color:#FF0000;">'.$status.'</p>';
  }else {
?>

        <body>

            <header>
            
            <div class="text-center" id="add">Add A Tough Style To Your Home
                         <!--FIRST NAV-->
                        <div class= "border-bottom border-light" style="background-color:#fdfdf9; z-index: 99999;" >
                                <div id="top-bar" class="top-navi">
                                
                                  <ul class="nav justify-content-end">
                                  <li class="nav-item"><a class="nav-link text-dark" href="#"><b>Hello, <?php echo htmlentities($_SESSION['user']['fname'], ENT_QUOTES, 'UTF-8'); ?></b></a></li>
                                    <li class="nav-item"><a href="user_cart.php"><img class="cart" alt="Cart" src="images/cart.png"></a></li>
                                    <li class="nav-item"><a class="nav-link text-dark" class="nav-link text-dark" href="out.php">Log Out</a></li>
                                  </ul>
                                
                                </div>    
                

                                <!--LOGO--> 
                                    <div class="text-center">
                                        <a href="user_home.php"><img class="logo" alt="Logo" src="images/logo.png" /></a>
                                    </div>
                    

                                <!--NAVIGATION-->    
                        
                                <div class="main-navi">
                                    
                                        <ul class="nav justify-content-center">
                                            <li class="nav-item"><a class="nav-link text-dark"  href="user_products.php"><b>FURNITURE</b></a></li>
                                            
                                            <li class="nav-item"><a class="nav-link text-dark" href="user_customize.php"><b>CUSTOMIZE</b></a></li>
                                            <li class="nav-item"><a class="nav-link text-dark" href="#"><b>ABOUT</b></a></li>
                                        </ul>
                                        </ul>
                                </div>
                        </div>
                </div>
            </header>
 
          
            <a class="btn btn-default btn-lg" href="user_products.php" style="margin-top: 190px; margin-left: 50px;">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Shop More
            </a>
            
           
            <div class="col-md-10" style="margin-left: 100px;">
             
            <?php 
        $user_id = $_SESSION['user'];

        $query3=mysqli_query($dbconn,"SELECT * FROM order_details WHERE order_details_id=''") or die (mysqli_error());
        $count2=mysqli_num_rows($query3);
      ?>

  <form method="post" action="user_payment.php">

   

    <h5 style="margin-top: 50px;">[ <small><?php echo $count2;?> </small>] products in your Cart.</h5>  


      <table class="table table-condensed table-hover">
              <thead class="thead-light">
                <tr>
                <th width="200"></th>
                  <th width="200">Furniture Name</th>
                  <th width="100">Category</th>
                  <th width="100">Quantity</th>
                  <th width="100">Price</th>
                  <th width="100">Total</th>
                  <th width="100">Option</th>
                </tr>
               
              </thead>

              <tbody>

              <?php 
                $query=mysqli_query($dbconn,"SELECT * FROM order_details WHERE order_details_id=''") or die (mysqli_error());
                while($row=mysqli_fetch_array($query)){
                $count=mysqli_num_rows($query);
                $prod_id=$row['prod_id'];

                $query2=mysqli_query($dbconn,"SELECT * FROM furniture WHERE prod_id='$prod_id'") or die (mysqli_error());
                $row2=mysqli_fetch_array($query2);
                }
              ?>
              <th>
              <div>
              <form name="form" method="post" action="">
              <input type="hidden" name="new" value="1" />
              <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
              <td> <img width="150" height="170" src="images/<?php echo $row2['image'];?>" alt=""/></td>

              <td>
              <p><input type="text" name="furniture_name" placeholder="furniture_name" required 
              value="<?php echo $row['furniture_name'];?>" /></p>
              </td>
                                
              <td>
              <p><input type="text" name="category_name" placeholder="category_name" required 
              value="<?php echo $row['category_name'];?>" /></p>
              </td>
                                
              <td>
              <p><input type="text" name="prod_qty" placeholder="prod_qty" required 
              value="<?php echo $row['prod_qty'];?>" /></p>
              </td>
                                
              <td>
              <p><input type="text" name="furniture_price" placeholder="furniture_price" required 
              value="<?php echo $row['furniture_price'];?>" /></p>
              </td>
                                <td><br><?php echo $row['total'];?></td>
              <p><input name="submit" type="submit" value="Edit" /></p>
              </td>
              </form>


              <?php } ?>
              </table>
    
<!--FOOTER-->
           
<footer>
            
            <div class="container" style="position: relative; top: 1200px;">
            <hr/>
              <p class="pull-right"><a href="#">Back to Top</a></p>
              <p>&copy; 2018 MCDO FURNITURE 
                &middot; <a href="user_home.php">HOME</a> 
                &middot; <a href="user_products.php">FURNITURE</a>
                &middot; <a href="user_customize.php">CUSTOMIZE</a>
                &middot; <a href="#">ABOUT</a>
              </p>
            </div>
        </footer>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
  </body>
  </html>
