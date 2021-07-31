<?php
		    include ('../connection.php');
		    
  if(empty($_SESSION) && $_SESSION['user_type'] != 'EMPLOYEE'){
    header('Location: ../index.php');
  }
	$_GET["did"];
	{
		$id = $_GET["did"];

		mysqli_query($conn,"DELETE FROM pc_laptop WHERE id='$id'");

		
		header("location:all_device.php");
	}
	$q = mysqli_query($conn,"SELECT * FROM pc_laptop");
?>
