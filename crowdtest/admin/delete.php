<?php
		    include ('../connection.php');
  if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
    header('Location: ../index.php');
  }
	$_GET["did"];
	{
		$id = $_GET["did"];

		mysqli_query($conn,"DELETE FROM signup WHERE id='$id'");

		
		header("location:all_signup.php");
	}
	$q = mysqli_query($conn,"SELECT * FROM signup");
?>
