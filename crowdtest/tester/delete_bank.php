<?php
		    include ('../connection.php');
		    
  if(empty($_SESSION) && $_SESSION['user_type'] != 'TESTER'){
    header('Location: ../index.php');
  }
	$_GET["id"];
	{
		$id = $_GET["id"];

		mysqli_query($conn,"DELETE FROM bank_details WHERE tester_id='$id'");

		
		header("location:bank_details.php");
	}
?>
