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
        <link href="css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" > </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

            <title>PRODUCTS | MCDO Furniture</title>
    
            
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
                                            <li class="nav-item"><a class="nav-link text-dark"  href="user_products.php"><b>FURNITURE</b></a>
                                                
                                            
                                            <li class="nav-item"><a class="nav-link text-dark" href="user_customize.php"><b>CUSTOMIZE</b></a></li>
                                            <li class="nav-item"><a class="nav-link text-dark" href="#"><b>ABOUT</b></a></li>
                                        </ul>
                                </div>
                        </div>
                </div>
            </header>


   
                
                <div class="col-md-12" >
                <br>
            
                



    <center>
  
<?php
                        
$query = mysqli_query($dbconn,"SELECT * FROM order_details WHERE order_id=''") or die (mysqli_error());
$row3 = mysqli_fetch_array($query);
$count = mysqli_num_rows($query);
$prod_id=$row3['prod_id'];
$qty= $row3['prod_qty'];

$query2=mysqli_query($dbconn,"SELECT * FROM furniture WHERE prod_id='$prod_id'") or die (mysqli_error());
$row2=mysqli_fetch_array($query2);
$prod_qty=$row2['prod_qty'];


 mysqli_query($dbconn,"UPDATE furniture SET prod_qty = prod_qty - $qty WHERE prod_id ='$prod_id' AND prod_qty='$prod_qty'");
       

$cart_table = mysqli_query($dbconn,"SELECT sum(total) FROM order_details WHERE order_id=''") or die(mysqli_error());
       $cart_count = mysqli_num_rows($cart_table);
       
        while ($cart_row = mysqli_fetch_array($cart_table)) {

           $total = $_SESSION['total'];
           //$sf = $_SESSION['sf'];
           date_default_timezone_set('Asia/Manila');
           $order_date = date("Y-m-d H:i:s");
           //$tax=$totalprice * 0.12;
           //$sf=$_POST['sf'];
           $telphone=$_POST['telphone'];
           $house_no=$_POST['house_no'];
           $street_name=$_POST['street_name'];
           $barangay=$_POST['barangay'];
           $city=$_POST['city'];
           $province=$_POST['province'];
           echo 'Total: Php'.$total.' | ';
           echo 'Shipping Address: '.$house_no.' '.$street_name.' '.$barangay.' '.$city.' '.$province.' ';

$query = "INSERT INTO `orders` (telphone, house_no, street_name, barangay, city, province, order_date, status, total) 
        VALUES ('$telphone','$house_no','$street_name','$barangay','$city','$province', '$order_date', 'Pending','$total)";  
if (mysqli_query($dbconn,$query)){


}

else {
  echo "Error occurred: " . mysqli_error($dbconn);
}

 mysqli_query($dbconn,"UPDATE order_details SET order_id=order_id+1 WHERE order_id=''")or die(mysqli_error());
mysqli_query ($dbconn,"UPDATE order_details SET total_qty =$prod_qty - $qty WHERE prod_id ='$prod_id' AND total_qty='' ");           


}

?>
        
        
        <br><br>
        <h3 style="margin-top:140px; font-family: 'Zona Pro';"><b>YOUR ORDER HAS BEEN PLACED</b></h3>
        <h3>Delivery process time, minimum of three(2) days and maximum of five(5) working days.</h3><br>
        
        
     
    <button type="button"  href="user_home.php" class="btn btn-success btn-round">Back to Homepage</button>
    
    </center>

</div>



                        </div>
                    </div> 
                </div>
            </div>
        </div>
<!--FOOTER-->
<footer>
    
    <div class="container" style="position: relative; top: 300px;">
    
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