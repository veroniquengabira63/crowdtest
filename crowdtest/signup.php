<?php
        include ('connection.php');
        if(isset($_POST["btnSignup"]))
        {
            $First_Name          =$_POST["txtNm1"];
            $Last_Name          =$_POST["txtNm2"];
            $Mobile             =$_POST["txtCont"];
            $Email              =$_POST["txtEid"];   
            $Password             =md5($_POST["txtPass"]);   
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
			$Photo = time().'_'.basename($_FILES["txtPhoto"]["name"]);
			if(move_uploaded_file($tmp_name, "$uploads_dir/$resume")) {
				@chmod($uploads_dir.'/'.$resume, 0755);
			} else {

			}
		}
	}
            $q=mysqli_query($conn,"INSERT INTO  signup(first_name, 	last_name,mobile,email,password,state,	pincode,Address, gender, about, skype, photo)VALUES('$First_Name','$Last_Name','$Mobile','$Email ','$Password','$State','$Pin','$Address','$Gender','$About','$Skype','$Photo')")or die(mysqli_error($conn));

            if($q==1)
            {
?>
            <script type="text/javascript">
                alert(" You are added now...");
                window.location ="term_condition.php";
            </script>
<?php
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Crowd Test</title>

        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap_files/bootstrap.min.css">
  <script src="bootstrap_files/jquery.min.js"></script>
  <script src="bootstrap_files/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="css/vivid_style.css"  rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        
    <link rel="stylesheet" type="text/css" href="DataTables/css/dataTable.bootstrap.min.css">

		<style type="text/css">
    		.singup{
    max-width:700px;
    margin: 20px auto;
}
			.modal-content{
    background-color: #0516271a;
}
.modal-header{
    color: #fff;
    background-color:#131c65e6;
    border-radius: 5px 5px 0px 0px;
}
			.close{
    margin-top: 10px !important;
    font-size: 38px !important;
}
   .strong
			{
				color: white;
			}
			
    	</style>
    </head>
    
    <body>

      <div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="singup" class="modal modal-dialog" role="dialog">
				<div class="modal-content">
					<div class="modal-header">
						<div class="close" data-dismiss="modal"><a href="index.php">&times;</a></div>
						<h2>Sing Up</h2>
					</div>
						<div class="modal-body">				
							<form method="post"  class="form-grop" action="" enctype="multipart/form-data">
								<table border="0" aline="center" class="table table-responsive">
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
										<td><input type="text" name="txtCont" class="form-control input-lg" required="" placeholder="9876543210"></td>
									</tr>
									<tr>
										<td><label> email id</label></td>
										<td><input type="email" name="txtEid" class="form-control input-lg" required="" placeholder="Enter Email Id"></td>
									</tr>
									<tr>
										<td><label> password</label></td>
										<td><input type="password" name="txtPass" class="form-control input-lg" required="" placeholder="******"></td>
									</tr>

										<tr>
											<td><label>state</label></td>
											<td><input type="text" name="txtstate" class="form-control input-lg" required="" placeholder="Enter State"></td>
										</tr>
											<tr>
											<td><label>pin code</label></td>
											<td><input type="text" name="txtPin" class="form-control input-lg" required=""></td>
										</tr>
											<tr>
											<td><label>Addreses</label></td>
											<td><textarea name="txtArea" class="form-control input-lg"> </textarea></td>
										</tr>
										<tr>
											<td><label>Gender</label></td>
											<td><input type="radio" name="txtGender" value="male"><label style="margin-right: 20px;margin-left: 10px;">Male</label><input type="radio" name="txtGender" value="female"><label style="margin-right: 20px;margin-left: 10px;">Female</label><input type="radio" name="txtGender" value="other"><label style="margin-right: 20px;margin-left: 10px;">Other</label></td>
										</tr>
										<tr>
											<td><label>About</label></td>
											<td><textarea name="txtAbout" class="form-control input-lg" required=""></textarea>
											</td>
										</tr>
										<tr>
											<td><label>Skype</label></td>
											<td><input type="text" name="txtSkype" class="form-control input-lg"></td>
										</tr>
										<tr>
											<td><label>Photo</label></td>
											<td><input type="File" name="txtPhoto" class="form-control input-lg"></td>
										</tr>
						</div>
					
							
								<tr>
									<td><button class="btn btn-info" type="submit" name="btnSignup" value="Submit">Submit</botton></td>
									<td><button class="btn btn-warnig" id="cancel"type="reset" name="btnCancel" value="cancel">Cancel</button></td>
								</tr>
								
								</table>

							</form>
					<strong><a href="tester_login.php" id="cancel"> do you have a account please log in</a></strong>

				</div>
			</div>
		</div>
	</div>
</div>
</div>


                          </div>
                       
            </div>

</div>

              <div class="vivid-top-bar" id="vivid-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            
                            Copyright © 2018 | All Rights Reserved
                    </div>
                    <div id="email" class="pull-right">
                            
                    </div>
                </div>
            </div>
        </div>
<?php include 'footer.php'; ?>

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '2e828068-c53a-498d-9a6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>
