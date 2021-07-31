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
    		.header
    		{
    			text-align: center;
    			padding-bottom: 30px;
    			color: black;
    			padding-top: 20px;
    		}
    		.form_1
    		{
    			padding-bottom: 100px;
    		}
    	</style>
    </head>
    
    <body>

      <?php include('header.php');?>
      <div class="carousel-inner">
                        <div class="container">
                        	<h1 class="header">Create an account</h1>
                        	<form method="post" enctype="multipart/form-data" class="form-horizontal form_1">
			<div class="col-sm-3"></div>
			<div class="form-group">
				<label for="First Name" class="col-sm-2 " control-label> First Name</label>
				<div class="col-sm-3">
					<input type="txt" name="txtNm1" class="form-control" required="">
				</div>
			</div>
			<div class="col-sm-3"></div>
				<div class="form-group">
					<label for="Last Name" class="col-sm-2" control-label>Last Name</label>
					<div class="col-sm-3">
						<input type="txt" name="txtNm2" class="form-control" required="">
					</div>
				</div>
			<div class="col-sm-3"></div>	
				<div class="form-group">
				<label for="Email" class="col-sm-2" control-label>Email</label>			
					<div class="col-sm-3">
						<input type="email" name="txtEid" class="form-control" required="">
					</div>
				</div>
			<div class="col-sm-3"></div>	
				<div class="form-group">
				<label for="password" class="col-sm-2" control-label>Password</label>			
					<div class="col-sm-3">
						<input type="password" name="txtPass" class="form-control" required="">
					</div>
				</div>
				<div class="col-sm-3"></div>
				<div class="form-group">
					<label for="Mobile" class="col-sm-2" control-label>Mobile</label>
					<div class="col-sm-3">
						<input type="txt" name="txtMob" class="form-control" required="">
					</div>
				</div>
				
			<div class="col-sm-3"></div>	
				<tr>
					<td><input type="Submit" name="btnSubmit" value="Create Account" class="btn btn-info"></td>
				</tr>
			</div>
	</form>
	</div>
	</div>
	<?php include 'footer.php'; ?>

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '2e828068-c53a-498d-9a6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>
<?php
		include ('connection.php');
		if(isset($_POST["btnSubmit"]))
		{
			$FirstName			=$_POST["txtNm1"];
			$LastName          	=$_POST["txtNm2"];
			$Email        		=$_POST["txtEid"];   
			$Password           =$_POST["txtPass"];
			$Mobile        		=$_POST["txtMob"];


			$q=mysqli_query($conn,"INSERT INTO  registration(first_name, last_name,
				email,password,mobile)VALUES('$FirstName','$LastName','$Email','$Password ','$Mobile')")or die(mysqli_error($conn));

			if($q==1)
			{
?>
			<script type="text/javascript">
				alert("data succefully inserted");
				window.location ="registration.php";
			</script>
<?php
			}
		}
?>