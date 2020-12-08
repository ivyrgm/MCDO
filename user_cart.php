<?php
    session_start();
    include('dbconn.php');
	
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

        $query3=mysqli_query($dbconn,"SELECT * FROM order_details WHERE order_id=''") or die (mysqli_error());
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
                $query=mysqli_query($dbconn,"SELECT * FROM order_details WHERE order_id=''") or die (mysqli_error());
                while($row=mysqli_fetch_array($query)){
                $count=mysqli_num_rows($query);
                $prod_id=$row['prod_id'];

                $query2=mysqli_query($dbconn,"SELECT * FROM furniture WHERE prod_id='$prod_id'") or die (mysqli_error());
                $row2=mysqli_fetch_array($query2);
              ?>


              <tr>
                  <td> <img width="150" height="170" src="images/<?php echo $row2['image'];?>" alt=""/></td>
                  <td><b><?php echo $row2['furniture_name'];?></b><br><br></td>
                  <td><?php echo $row2['category_name'];?></td>
                  <td><br><?php  echo $row['prod_qty']; ?></td>
                  <td><br><?php  echo $row2['furniture_price']; ?></td>
                  <td><br><?php echo $row['total'];?></td>
                   
                  <td>     
                    
                    <br/>
                     <a href="delete1.php?order_details_id=<?php echo $row['order_details_id'];?>" >
                     <button class="btn btn-danger btn-round" onclick="return confirm('Are you sure you want to delete?')" type="button">Remove</button></a>
                  </td>

                  <?php
                 } ?>

              </tr>
        
              <tr>
                  <td></td>
                  <td></td>
                  <td colspan="3" style="text-align: center;"><b>Total Price</b></td>
                  <td> <strong>
                     <?php
                      $result5 = mysqli_query($dbconn,"SELECT sum(total) FROM order_details WHERE order_id=''");
                      while($row5 = mysqli_fetch_array($result5))
                        { 
                        echo 'Php'.$row5['sum(total)'];
                        $_SESSION['total'] = $row5['sum(total)'];
                        echo '<input type="hidden" name="total" value="'.$row5['sum(total)'].'">';
                        }
                      ?></strong>
                  </td>
                  <td></td>
              </tr>

              </tbody>
          </table>
    

                <?php
              if($count2==0 ){
            ?>

                <script type="text/javascript">
                  alert("Shopping Cart Empty! Add an item.");
                  window.location= "user_products.php";
                </script>

               <?php
              }else{
            ?>
           
              
               <!-- Button trigger modal -->
               <button type="submit" id="" onclick="return confirm('Are you sure you want to Checkout?')" 
                name="submit" style="margin-left: 900px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                Check Out
            </button>

            <?php
                }
              ?>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                    <div class="modal-content" style="margin-top: 170px;">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form group">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><b>Enter Your Details</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-append">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" required/>
                                    <br/>
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required/>
                                    <br/>
                                    <input type="tel" class="form-control" name="telphone" placeholder="Cellphone Number" maxlength="12"  required/>
                                    <br/>
                                    <input type="text" class="form-control" name="house_no" placeholder="House No." required/>
                                    <br/>
                                    <input type="text" class="form-control" name="street_name" placeholder="Street Name" required/>
                                    <br/>
                                    <input type="text" class="form-control" name="barangay" placeholder="Barangay" required/>
                                    <br/>
                                    <input type="text" class="form-control" name="city" placeholder="City" required/>
                                    <br/>
                                    <input type="text" class="form-control" name="province" placeholder="Province" required/>
                                </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </form>
            
            
           
            

         <!--FOOTER-->
    <footer>
    
    <div class="container" style="position: relative; top: 200px;">
    <hr>
      <p class="pull-right"><a href="#">Back to Top</a></p>
      <p>&copy; 2018 MCDO FURNITURE 
        &middot; <a href="home.php">HOME</a> 
        &middot; <a href="products.php">FURNITURE</a>
        &middot; <a href="customize.php">CUSTOMIZE</a>
        &middot; <a href="#">ABOUT</a>
        &middot; <a href="reg.php">SIGN UP</a>
        &middot; <a href="login.php">SIGN IN</a>
      </p>
    </div>
</footer>           
        



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    </body>
</html>