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
        	$First_Name          =$_POST["txtNm1"];
            $Last_Name          =$_POST["txtNm2"];
            $Mobile             =$_POST["txtCont"];
            $Email              =$_POST["txtEid"];     
            $State             =$_POST["txtstate"];
            $Pin                =$_POST["txtPin"]; 
            $Address           =$_POST["txtArea"];
            $Gender           =$_POST["txtGender"];
            $About           =$_POST["txtAbout"];
            $Skype           =$_POST["txtSkype"];
            $Photo           = '';

	$uploads_dir = 'uploads';

	if($_FILES["txtPhoto"]['name'] != ''){
		if ($_FILES["txtPhoto"]["error"] == 0) {
			$tmp_name = $_FILES["txtPhoto"]["tmp_name"];
	          // further validation/sanitation of the filename may be appropriate
			$resume = time().'_'.basename($_FILES["txtPhoto"]["name"]);
			if(move_uploaded_file($tmp_name, "$uploads_dir/$resume")) {
				@chmod($uploads_dir.'/'.$resume, 0755);
			} else {

			}
		}
		$update_resume = ", photo = '$resume'";
	}

	$update = mysqli_query($conn, "UPDATE signup SET first_name='$First_Name',last_name='$Last_Name',mobile='$Mobile ',email='$Email',gender='$Gender',about='$About ',pincode='$Pin',address='$Address',state='$State ',skype='$Skype '".$update_resume." WHERE id=".$_SESSION['id']);

	if($update) {
		header("location:profile.php");
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
				<div class="page-header custom-header-page">
					<h1>Edit Form</h1>
				</div>
				<form method="post"  class="form-grop" action="" enctype="multipart/form-data">
					<table border="0" aline="center" class="table table-responsive">
						<tr>
							<td><label>  first name</label></td>
							<td><input type="text" name="txtNm1" class="form-control input-lg" required="" placeholder="Enter First Name" value="<?php echo $row->first_name; ?>"></td>
						</tr>
						<tr>
							<td><label>  last name</label></td>
							<td><input type="text" name="txtNm2" class="form-control input-lg" required="" placeholder="Enter Last Name" value="<?php echo $row->last_name; ?>"></td>
						</tr>
						<tr>
							<td><label> contact</label></td>
							<td><input type="text" name="txtCont" class="form-control input-lg" required="" placeholder="9876543210" value="<?php echo $row->mobile; ?>"></td>
						</tr>
						<tr>
							<td><label> email id</label></td>
							<td><input type="email" name="txtEid" class="form-control input-lg" required="" placeholder="Enter Email Id" value="<?php echo $row->email; ?>"></td>
						</tr>
						<tr>
							<td><label>state</label></td>
							<td><input type="text" name="txtstate" class="form-control input-lg" required="" placeholder="Enter State" value="<?php echo $row->state; ?>"></td>
						</tr>
						<tr>
							<td><label>pin code</label></td>
							<td><input type="text" name="txtPin" class="form-control input-lg" required="" value="<?php echo $row->pincode; ?>"></td>
						</tr>
						<tr>
							<td><label>Addreses</label></td>
							<td><textarea name="txtArea" class="form-control input-lg"><?php echo $row->Address; ?> </textarea></td>
						</tr>
						<tr>
							<td><label>Gender</label></td>
							<td><input type="radio" name="txtGender" value="male" <?php if($row->gender == 'male') echo 'checked' ?>><label style="margin-right: 20px;margin-left: 10px;">Male</label><input type="radio" name="txtGender" value="female" <?php if($row->gender == 'female') echo 'checked' ?>><label style="margin-right: 20px;margin-left: 10px;">Female</label><input type="radio" name="txtGender" value="other" <?php if($row->gender == 'other') echo 'checked' ?>><label style="margin-right: 20px;margin-left: 10px;">Other</label></td>
						</tr>
						<tr>
							<td><label>About</label></td>
							<td><textarea name="txtAbout" class="form-control input-lg" required=""><?php echo $row->about; ?></textarea>
							</td>
						</tr>
						<tr>
							<td><label>Skype</label></td>
							<td><input type="text" name="txtSkype" class="form-control input-lg" value="<?php echo $row->skype; ?>"></td>
						</tr>
						<tr>
							<td><label>Photo</label></td>
							<td><input type="File" name="txtPhoto" class="form-control input-lg"></td>
						</tr>
					</div>
					<tr>
						<td><button class="btn btn-info" type="submit" name="btnUpdate" value="Submit">Submit</botton></td>
							<td><button class="btn btn-warnig" id="cancel"type="reset" name="btnCancel" value="cancel">Cancel</button></td>
						</tr>

					</table>

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