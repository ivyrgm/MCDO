<?php include('functions.php') ?>
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

            <title>Welcome to MCDO Furniture</title>
    
            
        </head>



        <body>

                <header>
                
                <div class="text-center" id="add">Add A Tough Style To Your Home
                             <!--FIRST NAV-->
                            <div class= "border-bottom border-light" style="background-color:#fdfdf9; z-index: 99999;" >
                                    <div id="top-bar" class="top-navi">
                                        <ul class="nav justify-content-end">
                                            <li class="nav-item"><a href="#"><img class="cart" alt="Cart" src="images/cart.png"></a></li>
                                            <li class="nav-item active"><a class="nav-link text-dark" href="reg.php">Sign Up</a></li>
                                            <li class="nav-item active"><a class="nav-link text-dark" href="login.php">Sign In</a></li>
                                        </ul>
                                    
                                    </div>  
                    
    
                                    <!--LOGO--> 
                                        <div class="text-center">
                                            <a href="index.php"><img class="logo" alt="Logo" src="images/logo.png" /></a>
                                        </div>
                        
    
                                    <!--NAVIGATION-->    
                            
                                    <div class="main-navi">
                                        
                                            <ul class="nav justify-content-center">
                                            <li class="nav-item"><a class="nav-link text-dark" href="products.php"><b>FURNITURE</b></a></li>
                                            <li class="nav-item"><a class="nav-link text-dark" href="customize.php"><b>CUSTOMIZE</b></a></li>
                                            <li class="nav-item"><a class="nav-link text-dark" href="#"><b>ABOUT</b></a></li>
                                        </ul>
                                    </div>
                            </div>
                    </div>
                </header>


                <div class="container"></div>
        <form action="reg.php" method="post">    
                <!--MAIN-->
                <div id="signup" class="text-center">
                        <label><b><u>CREATE ACCOUNT</u></b></label>
                        <br/>
                        <br/>
                       
                    <div class="input-group">   
                        <label><b>First Name</b></label>
                        <br/>
                        <input type="text" name="fname" placeholder="First Name" class="form-control" required>
                        <br/>
                    </div>

                    <br/>
                    <div class="input-group">   
                        <label><b>Last Name</b></label>
                        <br/>
                        <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
                        <br/>
                    </div>

                    <br/>
                    <div class="input-group">   
                        <label><b>Username</b></label>
                        <br/>
                        <input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo $username; ?>">
                        <br/>
                    </div>

                    <br/>
                    <div class="input-group">   
                        <label><b>Email</b></label>
                        <br/>
                        <input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>">
                        <br/>
                    </div>

                    <br/>
                    <div class="input-group">   
                        <label><b>Password</b></label>
                        <br/>
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                        <br/>
                    </div>

                    <br/>
                    <div class="input-group">   
                        <label><b>Confirm Password</b></label>
                        <br/>
                        <input type="password" name="confirmpw" placeholder="Confirm Password" class="form-control" required>
                        <br/>
                    </div>

               <br/>

                        <div class="input-group">
                            <button type="submit" class="btn btn-secondary" name="register_btn">Register</button>
                        </div>
                        <br/>
                        <p>
                            Already a member? <a href="login.php">Sign in</a>
                        </p>
            </div>
        </form>   
     
    
    <!--FOOTER-->
        <footer>
            
            <div class="container" style="position: relative; top: 850px;">
            <hr/>
              <p class="pull-right"><a href="#">Back to Top</a></p>
              <p>&copy; 2018 MCDO FURNITURE 
                &middot; <a href="index.php">HOME</a> 
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