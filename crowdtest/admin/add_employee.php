<?php
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'EMPLOYEE'){
	header('Location: ../index.php');
}
        if(isset($_POST["btnSignup"]))
        {
	        $First_Name         =$_POST["txtNm1"];
	        $Last_Name          =$_POST["txtNm2"];
	        $Mobile             =$_POST["txtCont"];
	        $Email              =$_POST["txtEid"];   
	        $Password           =md5($_POST["txtPass"]);   
            $State             =$_POST["txtstate"];
            $Pin                =$_POST["txtPin"]; 
            $Address           =$_POST["txtArea"];


            $q=mysqli_query($conn,"INSERT INTO  employee_login(first_name, 	last_name,mobile,email,password,state,	pincode,Address
                )VALUES('$First_Name','$Last_Name','$Mobile','$Email ','$Password','$State','$Pin','$Address ')")or die(mysqli_error($conn));

            if($q==1)
            {
?>
            <script type="text/javascript">
                alert("Participant added successfully");
                window.location ="all_employee.php";
            </script>
<?php
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
</head>
<body>
	<?php include 'nav.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="page-header"><h1>Add Employee</h1></div>
				<form method="post" enctype="multipart/form-data" class="form-horizontal" id="form">

					<table border="0" style="width: 80%;margin: 0 auto" aline="center" class="table table-responsive">
						<tr>
							<td><label>  first name</label></td>
							<td><input type="text" name="txtNm1" class="form-control input-lg" required="" placeholder="Enter First Name"></td>
						</tr>
						<tr>
							<td><label>  last name</label></td>
							<td><input type="text" name="txtNm2" class="form-control input-lg" required="" placeholder="Enter Last Name"></td>
						</tr>
						<tr>
							<td><label> contact</label></td>
							<td><input type="number" onKeyPress="if(this.value.length==10) return false;" name="txtCont" class="form-control input-lg" required="" placeholder="9876543210"></td>
						</tr>
						<tr>
							<td><label> email id</label></td>
							<td><input type="email" name="txtEid" class="form-control input-lg" required="" placeholder="Enter Email Id"></td>
						</tr>
						<tr>
							<td><label> password</label></td>
							<td><input type="password" name="txtPass" class="form-control input-lg" id="pass" required="" placeholder="******"></td>
						</tr>
						<tr>
							<td><label>confirm password</label></td>
							<td><input type="password" name="conf_txtPass" class="form-control input-lg" id="confpass" required="" placeholder="******">
				            <div class="form-group">
				              <span class="error" style="color:red"></span><br />
				            </div>
				        </td>
						</tr>

						<tr>
							<td><label>state</label></td>
							<td><input type="text" name="txtstate" class="form-control input-lg" required="" placeholder="Enter State"></td>
						</tr>
						<tr>
							<td><label>pin code</label></td>
							<td><input type="number" onKeyPress="if(this.value.length==6) return false;" name="txtPin" class="form-control input-lg" required=""></td>
						</tr>
						<tr>
							<td><label>Addreses</label></td>
							<td><textarea name="txtArea" class="form-control input-lg"> </textarea></td>
						</tr>
					</div>
					<tr>
						<td><button class="btn btn-info" type="submit" name="btnSignup" value="Submit">Submit</botton></td>
							<td><button class="btn btn-warnig" id="cancel"type="reset" name="btnCancel" value="cancel">Cancel</button></td>
						</tr>

					</table>

				</form>
			</div>
		</div>

	</body>
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
	</html>