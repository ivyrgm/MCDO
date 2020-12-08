<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['admin'])){
		header('location: admin_.php');
	}

	if(isset($_SESSION['client'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM client WHERE user_id=:user_id");
			$stmt->execute(['user_id'=>$_SESSION['user_id']]);
			$user = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
?>