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

            <title>CUSTOMIZE | MCDO Furniture</title>
    
            
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
        <form action="" method="post">    
                <!--MAIN-->
                <div id="custom" class="text-center">
                        <label><b>FURNITURE</b></label>
                        <br/>
                    
                        <input type="text" id="item" placeholder="Kind of Furniture"  class="form-control" required>
                        <br/>
                        <br/>
                    

                        <label><b>TYPE OF WOOD</b></label>
                        <br/>
                    
                            <select name="woods" class="form-control" required>
                                <option>Acacia</option>
                                <option>Ash</option>
                                <option>Kamagong/Ebony</option>
                                <option>Mahogany</option>
                                <option>Molave</option>
                                <option>Narra</option>
                                <option>Oak</option>
                                <option>Tanguile</option>
                                <option>Yakal</option>
                            </select>
                            <br/>
                            <br/>
                    

                        <label><b>MEASUREMENTS <i>(ft.)</i></b></label>
                            <br/>
                    
                            <input type="text" id="measurement" placeholder="Height" class="form-control" required>
                            <br/>
                            <input type="text" id="measurement" placeholder="Length" class="form-control" required>
                            <br/>
                            <input type="text" id="measurement" placeholder="Width" class="form-control" required>
                            <br/>
                            <br/>
                    

                        <label><b>FABRIC COLOR</b></label>
                            <br/>
                            
                            <div class="btn-toolbar-center" role="toolbar">
                                <button class="btn btn-default">
                                    <img src="fabrics/c1.jpg" style="height: 30px; width: 30px;"/>
                                </button>

                                <button class="btn btn-default">
                                    <img src="fabrics/c2.jpg" style="height: 30px; width: 30px;"/>
                                </button>

                                <button class="btn btn-default">
                                    <img src="fabrics/c3.jpg" style="height: 30px; width: 30px;"/>
                                </button>

                                <button class="btn btn-default">
                                    <img src="fabrics/c4.jpg" style="height: 30px; width: 30px;"/>
                                </button>
                            </div>
                            <br/>
                            <br/>
                   

                        <label><b>QUANTITY</b></label>
                            <br/>
                            
                            <select name="quantity" class="form-control" required>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <br/>
                            <br/>
                        
                        
                    
                        <label><b>UPLOAD YOUR IMAGE</b></label>
                        
                        <input type="file" accept="image/*" onchange="loadFile(event)" class="form-control" >
                            <img id="output" style="max-width: 150px; max-height: 150px; margin-top: 10px;"/>
                                <script>
                                    var loadFile = function(event) {
                                        var output = document.getElementById('output');
                                        
                                        output.src = URL.createObjectURL(event.target.files[0]);
                                    };
                                </script>
                            
                            <br/>
                            <br/>
                        

                        <input type="submit" value="Submit" href="login.php" style="height: 44px; width: 179px;">

                        <input type="reset" value="Reset" style="height: 44px; width: 179px; margin-left: 30px;">
                  

                </div>

                <br/>
                <br/>
        </form>   
                
                <!--FOOTER-->
           
            <footer>
            
              <div class="container" style="position: relative; top: 1200px;">
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