<?php
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
	header('Location: ../index.php');
}
$id=$_GET["cid"];

if(isset($_POST["btnUpdate"]))
{
	$FirstName			=$_POST["txtFN"];
	$LastName           =$_POST["txtNm"];
	$Mobile        		=$_POST["txtMno"];
	$Email          	=$_POST["txtEid"];
	$Password          	=$_POST["txtPass"];
	$State          	=$_POST["txtState"];
	$Pincode          	=$_POST["txtPin"];
	$Address          	=$_POST["txtAddress"];
            $Gender           =$_POST["txtGender"];
            $About           =$_POST["txtAbout"];
            $Skype           =$_POST["txtSkype"];
            $Photo           = '';


	$uploads_dir = '../uploads';

	if($_FILES["txtPhoto"]['name'] != ''){
		if ($_FILES["txtPhoto"]["error"] == 0) {
			$tmp_name = $_FILES["txtPhoto"]["tmp_name"];
	          // further validation/sanitation of the filename may be appropriate
			$Photo = time().'_'.basename($_FILES["txtPhoto"]["name"]);
			if(move_uploaded_file($tmp_name, "$uploads_dir/$Photo")) {
				@chmod($uploads_dir.'/'.$Photo, 0755);
			} else {

			}
		}
		$uploads = ", photo = 'uploads/".$Photo."'";
	}



	if($_POST["txtPass"] != '')
	{
		mysqli_query($conn, "UPDATE signup SET first_name='$FirstName',last_name='$LastName',mobile='$Mobile ',email='$Email',password='$Password',state='$State ',pincode='$Pincode',Address='$Address',gender='$Gender',about='$About ',skype='$Skype'".$uploads." WHERE id='$id'") or die(mysqli_error($conn));
		header("location:all_signup.php"); 
	}
	else
	{
		mysqli_query($conn, "UPDATE signup SET first_name='$FirstName',last_name='$LastName',mobile='$Mobile ',email='$Email',state='$State ',pincode='$Pincode',Address='$Address',gender='$Gender',about='$About ',skype='$Skype'".$uploads." WHERE id='$id'");   
		header("location:all_signup.php");
		
	}
}
$q=mysqli_query($conn,"SELECT * FROM signup WHERE id='$id'");
$data=mysqli_fetch_array($q);

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

</head>
<body>

	<?php include 'nav.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="page-header"><h1>Edit Form</h1></div>
				<form method="post" enctype="multipart/form-data" class="form-horizontal" id="form">
					<div class="form-group">
						<label for="First Name" class="col-sm-2" control-label>First Name</label>
						<div class="col-sm-8">
							<input type="text" name="txtFN" value="<?php echo $data["first_name"]?>" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="Last Name" class="col-sm-2" control-label>Last Name</label>
						<div class="col-sm-8">
							<input type="text" name="txtNm" value="<?php echo $data["last_name"]?>"  class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="Mobile" class="col-sm-2" control-label>Mobile</label>
						<div class="col-sm-8">
							<input  type="number" onKeyPress="if(this.value.length==10) return false;" name="txtMno" value="<?php echo $data["mobile"]?>"  class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2" control-label>Email</label>
						<div class="col-sm-8">
							<input type="text" name="txtEid" value="<?php echo $data["email"]?>" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="course" class="col-sm-2" control-label>Password</label>
						<div class="col-sm-8">
							<input type="password" name="txtPass" id="pass" value="" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="course" class="col-sm-2" control-label>Confirm Password</label>
						<div class="col-sm-8">
							<input type="password" name="txtPass" id="confpass" value="" class="form-control">
							<div class="form-group">
								<span class="error" style="color:red"></span><br />
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="state" class="col-sm-2" control-label>State</label>
						<div class="col-sm-8">
							<input type="text" name="txtState" value="<?php echo $data["state"]?>"  class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="pincode" class="col-sm-2" control-label>Pincode</label>
						<div class="col-sm-8">
							<input type="number" onKeyPress="if(this.value.length==6) return false;" name="txtPin" value="<?php echo $data["pincode"]?>"  class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2" control-label>Address</label>
						<div class="col-sm-8">
							<textarea type="text" name="txtAddress" value=""  class="form-control"><?php echo $data["Address"]?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2" control-label>Gender</label>
						<div class="col-sm-8">
							<input type="radio" name="txtGender" value="male" <?php if($data['gender'] == 'male') echo 'checked'; ?>><label style="margin-right: 20px;margin-left: 10px;">Male</label><input type="radio" name="txtGender" value="female" <?php if($data['gender'] == 'female') echo 'checked'; ?>><label style="margin-right: 20px;margin-left: 10px;">Female</label><input type="radio" name="txtGender" value="other" <?php if($data['gender'] == 'other') echo 'checked'; ?>><label style="margin-right: 20px;margin-left: 10px;">Other</label>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2" control-label>About</label>
						<div class="col-sm-8">
							<textarea name="txtAbout" class="form-control" required=""><?php echo $data["about"]?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2" control-label>Skype</label>
						<div class="col-sm-8">
							<input type="text" name="txtSkype" class="form-control" value="<?php echo $data["skype"]?>">
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2" control-label>Photo</label>
						<div class="col-sm-8">
							<input type="File" name="txtPhoto" class="form-control">
							<br>
						<img src="../<?php echo $data['photo'] ?>" width=50>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" name="btnUpdate" value="Update" class="btn btn-info">
					</div>
				</form>
			</div>
		</div>
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
</body>
</html>