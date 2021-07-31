<?php 
    include ('../connection.php');

  if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
    header('Location: ../index.php');
  }
		$q=mysqli_query($conn,"SELECT * FROM  signup");
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
	<div class="page-header" align="center"><h1>All Testers</h1></div>
	<table align="center" class="table table-responsive">
		<table class="table table-hover">
		<tr class="alert-info">
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>State</th>
			<th>Pincode</th>
			<th>Address</th>
			
		</tr>
<?php
		while($data=mysqli_fetch_array($q))
		{
?>
		<tr>
			<td><?php echo $data["id"]?></td>
			<td><?php echo $data["first_name"]?></td>
			<td><?php echo $data["last_name"]?></td>
			<td><?php echo $data["mobile"]?></td>
			<td><?php echo $data["email"]?></td>
			<td><?php echo $data["state"]?></td>
			<td><?php echo $data["pincode"]?></td>
			<td><?php echo $data["Address"]?></td>
		</tr>
<?php
		}
?>
	</table>
</table>
</div>
</body>
</html>