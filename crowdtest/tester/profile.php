<?php 
    include ('../connection.php');

  if(empty($_SESSION) && $_SESSION['user_type'] != 'TESTER'){
    header('Location: ../index.php');
  }
		$q=mysqli_query($conn,"SELECT * FROM  signup where id = ".$_SESSION['id']);
		$row = mysqli_fetch_object($q);
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
	<div class="container emp-profile">
		<form method="post">
			<div class="row">
				<div class="col-md-4">
					<div class="profile-img">
						<img src="../<?php echo $row->photo; ?>" alt="" width='150' height='200'/>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row" style="border-bottom: 1px solid;padding: 10px 0px;margin-bottom: 20px;">
						<div class="pull-left" style="font-size: 18px;">Profile</div>
						<div class="pull-right">
							<a href="edit_profile.php">Edit Profile</a> |  
						<a href="change_password.php">Change Password</a>
						</div>
					</div>
					<div class="tab-content profile-tab" id="myTabContent">
						<div class="tab-pane fade active in" id="home" role="tabpanel" aria-labelledby="home-tab">
							<div class="row">
								<div class="col-md-6">
									<label>Full Name</label>
								</div>
								<div class="col-md-6">
									<p><?php echo $row->first_name; ?> <?php echo $row->last_name; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Email</label>
								</div>
								<div class="col-md-6">
									<p><?php echo $row->email; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Gender</label>
								</div>
								<div class="col-md-6">
									<p><?php echo $row->gender; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Phone</label>
								</div>
								<div class="col-md-6">
									<p><?php echo $row->mobile; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Address</label>
								</div>
								<div class="col-md-6">
									<p><?php echo $row->Address; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Pincode</label>
								</div>
								<div class="col-md-6">
									<p><?php echo $row->pincode; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>About</label>
								</div>
								<div class="col-md-6">
									<p><?php echo $row->about; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Skype</label>
								</div>
								<div class="col-md-6">
									<p><?php echo $row->skype; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>           
	</div>
</body>
</html>