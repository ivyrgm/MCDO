<?php include 'includes/session.php'; ?>
<?php
	$slug = $_GET['category'];

	$conn = $pdo->open();

	try{
		$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
		$stmt->execute(['slug' => $slug]);
		$cat = $stmt->fetch();
		$catid = $cat['category_id'];
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

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
                                <?php session_start(); ?>
                                  <ul class="nav justify-content-end">
                                    <li class="nav-item"><a class="nav-link text-dark" href="#"><b>Hello, <?php echo htmlentities($_SESSION['client']['fname'], ENT_QUOTES, 'UTF-8'); ?></b></a></li>
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
                                        <li class="nav-item dropdown">
                                                <a class="nav-link text-dark dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <b>CATEGORY</b>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="nav-link text-dark dropdown-item"  href="user_products.php"><b>FURNITURE</b></a>
                                                <div class="dropdown-divider"></div>
                                                <a class="nav-link text-dark dropdown-item" href="user_prod_custom.php"><b>CUSTOM FURNITURE</b></a>
                                                </div>
                                            </li>
                                        </li>
                                            
                                            <li class="nav-item"><a class="nav-link text-dark" href="user_customize.php"><b>CUSTOMIZE</b></a></li>
                                            <li class="nav-item"><a class="nav-link text-dark" href="#"><b>ABOUT</b></a></li>
                                        </ul>
                                </div>
                        </div>
                </div>
            </header>

	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
		            <h1 class="page-header"><?php echo $cat['category_name']; ?></h1>
		       		<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM furniture WHERE category_id = :category_id");
						    $stmt->execute(['category_id' => $catid]);
						    
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 







	        	<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    </body>
</html>