<?php
    session_start();

?>
<?php

include('dbconn.php');
$prod_id=$_GET['prod_id'];
//$user_id=$_GET['id'];
$query = "SELECT * FROM furniture WHERE prod_id='$prod_id'";
$result = mysqli_query($dbconn,$query);
while($res = mysqli_fetch_array($result)){

            $prod_id=$res['prod_id'];
            $furniture_price=$res['furniture_price'];
           //$user_id = $_SESSION['id'];


            if (isset($_POST['submit'])){

                $prod_id=$prod_id;
                $furniture_price=$furniture_price;
                $prod_qty = $_POST['prod_qty'];                                       
                $total = $furniture_price * $_POST['prod_qty'];         
                //$user_id = $user_id;

                $date=date("Y-m-d");


                if(empty($prod_qty)){    

                    if(empty($prod_qty)) {
                    echo "<br><center><h4><font color='red'><b>Error!</b> Enter Product Quantity.</font></h4></center>";
                }

                } else {

                    mysqli_query($dbconn,"INSERT INTO order_details (prod_id, prod_qty,total) 
                    VALUES ('$prod_id','$prod_qty','$total')") or die(mysqli_error());
                 ?>
                                         
                                            <script type="text/javascript">
                                                alert("Product Added To Cart!");
                                                window.location = "user_cart.php";
                                            </script>
   
                                            <?php 
                                        }
                                        }
                                            } ?>


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
 
            <?php
                include('dbconn.php');
                $prod_id=$_GET['prod_id'];
                $query = "SELECT * FROM furniture WHERE prod_id='$prod_id'";
                $result = mysqli_query($dbconn,$query);
                while($res = mysqli_fetch_array($result)) {  
                    //getting product id
           
            ?>   

               

                <div class="container">
                <nav aria-label="breadcrumb" style="margin-top: 190px;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="user_home.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="user_products.php">Furniture</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Furniture Details</li>
                    </ol>
                </nav>
                        <div id="prods">
                        
                            <?php if($res['image'] != ""): ?>
                            <img style="width: 300px; height: 400px;  float: left;" 
                                class="d-block" src="images/<?php echo $res['image']; ?>" >
                            <?php else: ?>
                            <img src="images/1.png">
                            <?php endif; ?>
                            </div>
               
                        
                            
                            
                   

       
        <h4 class="inline-block" style=" margin-left: 300px; float: center;"><br><br>
        <ul style="font-size: 30px; color: #2e3d50;"><b>
        <?php echo $res['furniture_name']; ?>
        </b> 
        </ul>   
      <br/>
        
        <ul style="font-size: 25px; color: #b3603d;"><b>
        <?php echo '₱ '.$res['furniture_price'].''; ?>
        </b>
        </ul>

        <ul><b>Category: </b>
        <?php echo $res['category_name']; ?>
        </ul>

        <ul>
        <?php  $prod_qty = $res['prod_qty'];?> 
        <?php
        if ($prod_qty <= 0){
        ?>
         <span style="color:red;">Product Sold Out!</span>   
         <?php
        }else{
       ?>
       <b>Items in stock: </b><?php echo $res['prod_qty'];?>
       </ul>
       <?php 
    }
?>
        <?php }?> 
        <div class="form-group col-6">
            <hr>
   </div>
        </h4>

        
        <!-- Button trigger modal -->
            <button type="button" style="margin-left: 150px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                Add To Cart
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                    <div class="modal-content">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form group">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"><b>Enter Quantity</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-append">
                                    <?php
                                        echo "<select class='btn btn-warning btn-round dropdown-toggle' size='1' name='prod_qty' id='prod_qty'>";
                                        $i=1; $prod_qty=$prod_qty;
                                        while ($i <= $prod_qty ){
                                            echo "<option value=".$i.">".$i."</option>";
                                            $i++;
                                        }
                                        echo "</select>";
                                    ?>
                                </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                        

<!--FOOTER-->
<footer>
    
    <div class="container" style="margin-top: 400px;">
    <hr>
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