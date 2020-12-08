<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/

$servername = "localhost";
 
$username = "root";
 
$password = "";
 
$dbname = "furnitureshop";
 
// Create connection
 
$conn = new mysqli($servername, $username, $password, $dbname);
$id=$_REQUEST['order_details_id'];
$query = "DELETE FROM order_details WHERE order_details_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: \MCDO/user_cart.php"); 
?>