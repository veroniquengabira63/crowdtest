<?php 
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'TESTER'){
	header('Location: ../index.php');
}
$q=mysqli_query($conn,"SELECT * FROM  signup where id = ".$_SESSION['id']);
$row = mysqli_fetch_object($q);

$id=$_GET["cid"];

if(isset($_POST["btnUpdate"]))
{
	$Password       =md5($_POST["txtpass"]);

	$update = mysqli_query($conn, "UPDATE signup SET password='$Password' WHERE id=".$_SESSION['id']);

	if($update) {
?>
	<script> 
        alert("Please login again with new password");
        window.location = "logout.php"
    </script>
<?php
	} else {
		echo 'fail to update';
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vivid testing</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap_files/bootstrap.min.css">
	<script src="../bootstrap_files/jquery.min.js"></script>
	<script src="../bootstrap_files/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'>
	<link href="../css/vivid_style.css"  rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../DataTables/css/dataTable.bootstrap.min.css">
	<style type="text/css">
		.logout-btn {
			position: absolute;
			right: 0;
			top: 20px;
		}
		.page-header {
			position: relative;
		}
	</style>
</head>
<body>
	<?php include 'navbar.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="page-header custom-header-page"><h1>Change Password</h1></div>
				<form method="post" enctype="multipart/form-data" class="form-horizontal" id="form">
					<div class="form-group">
						<label for="Price" class="col-sm-2" control-label>Password</label>
						<div class="col-sm-8">
							<input type="password" name="txtpass" class="form-control" id="pass">
						</div>
					</div> 
					<div class="form-group">
						<label for="confirmPassword" class="col-sm-2" control-label>Confirm Password</label>
						<div class="col-sm-8">
							<input type="password" name="txtconpass" class="form-control" id="confpass">
						</div>
						<div class="form-group">
							<span class="error" style="color:red"></span><br />
						</div>
					</div> 
					<div class="form-group" style="text-align: center;">
						<input type="submit" name="btnUpdate" value="Update" class="btn btn-info">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	var allowsubmit = false;
	$(function(){
      //on keypress 
      $('#confpass').keyup(function(e){
        //get values 
        var pass = $('#pass').val();
        var confpass = $(this).val();
        
        //check the strings
        if(pass == confpass){
          //if both are same remove the error and allow to submit
          $('.error').text('');
          allowsubmit = true;
      }else{
          //if not matching show error and not allow to submit
          $('.error').text('Password not matching');
          allowsubmit = false;
      }
  });
      
      //jquery form submit
      $('#form').submit(function(){

      	var pass = $('#pass').val();
      	var confpass = $('#confpass').val();

        //just to make sure once again during submit
        //if both are true then only allow submit
        if(pass == confpass){
        	allowsubmit = true;
        }
        if(allowsubmit){
        	return true;
        }else{
        	return false;
        }
    });
  });
</script>