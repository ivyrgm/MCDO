<?php
    session_start();
	
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
        
            <title>MCDO Furniture</title>
       <style></style>

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
                                        <a href="index.php"><img class="logo" alt="Logo" src="images/logo.png" /></a>
                                    </div>
                    

                                <!--NAVIGATION-->    
                        
                                <div class="main-navi">
                                    
                                      
                                        <ul class="nav justify-content-center">
                                            <li class="nav-item"><a class="nav-link text-dark"  href="user_products.php"><b>FURNITURE</b></a></li>
                                            
                                            <li class="nav-item"><a class="nav-link text-dark" href="user_customize.php"><b>CUSTOMIZE</b></a></li>
                                            <li class="nav-item"><a class="nav-link text-dark" href="#"><b>ABOUT</b></a></li>
                                        </ul>
                                        
                                </div>
                        </div>
                </div>
            </header>
 


        


<!--CAROUSEL-->
                  <div class="container"></div>
             
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover" style="margin-top: 154px;">
             <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        
                      </ol>
                  
             <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active" >
                          <img src="images/car1.png" alt="Couch" style="width:100%; height: 447px;">
                        </div>
                  
                        <div class="item">
                          <img src="images/aaaaaa.jpg" alt="Dining" style="width:100%; height: 447px;">
                        </div>
                      
                        <div class="item">
                          <img src="images/door.jpg" alt="Door" style="width:100%; height: 447px;">
                        </div>
                      </div>
                 
             <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                </div>




                <div class="text-center" style="font-family: 'Zona Pro Light'; font-size: 25px; margin-top: 60px;">
                  <b>TELL US WHAT YOU WANT & WE WILL BUILD IT FOR YOU!</b><br /><br /><br />
                  Specializing in the design and build of furniture in residential homes and<br />commercial spaces,
                       that ensure quality and sophistication<br />for every renovation work and project.
                      </div>
                
              
                  <div class="text-center"><img src="images/step.png" style="margin-top: 60px;"/></div>
          
                
                
                 
                  
                  


<!--FEATURED PRODUCTS-->    

                  


            <!--FOOTER-->
            <hr/>
            <footer>
              <div class="container">
                <p class="pull-right"><a href="#">Back to Top</a></p>
                <p>&copy; 2018 MCDO FURNITURE 
                  &middot; <a href="index.php">HOME</a> 
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