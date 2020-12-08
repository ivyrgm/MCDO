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
        
            <title>MCDO Furniture</title>
       <style></style>

        </head>



        

        <body>

            <header>
            
                <div class="text-center" id="add">Add A Tough Style To Your Home
                         <!--FIRST NAV-->
                        <div class= "border-bottom border-light" style="background-color:#fdfdf9; z-index: 99999;" >
                                <div id="top-bar" class="top-navi">
                                <?php session_start(); ?>
                                  <ul class="nav justify-content-end">
                                  <li class="nav-item"><a class="nav-link text-dark" href="#"><b>Hello, <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></b></a></li>
                                    <li class="nav-item"><a class="nav-link text-dark" href="out.php">Log Out</a></li>
                                  </ul>
                                
                                </div>    
                

                                <!--LOGO--> 
                                    <div class="text-center">
                                        <a href="admin_home.php"><img class="logo" alt="Logo" src="images/logo.png" /></a>
                                    </div>
                    

                                <!--NAVIGATION-->    
                        
                                <div class="main-navi">
                                    
                                        <ul class="nav justify-content-center">
                                        <li class="nav-item"><a class="nav-link text-dark" href="admin_products.php"><b>FURNITURE</b></a></li>
                                        <li class="nav-item"><a class="nav-link text-dark" href="admin_customize.php"><b>CUSTOMIZE</b></a></li>
                                        <li class="nav-item"><a class="nav-link text-dark" href="#"><b>ABOUT</b></a></li>
                                    </ul>
                                </div>
                        </div>
                </div>
            </header>
 


        



<!--FEATURED PRODUCTS

                  


       
            <hr/>
            <footer>
              <div class="container">
                <p class="pull-right"><a href="#">Back to Top</a></p>
                <p>&copy; 2018 MCDO FURNITURE 
                  &middot; <a href="user_home.php">HOME</a> 
                  &middot; <a href="user_products.php">FURNITURE</a>
                  &middot; <a href="user_customize.php">CUSTOMIZE</a>
                  &middot; <a href="#">ABOUT</a>
                </p>
              </div>
          </footer>

          -->    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    </body>
</html>