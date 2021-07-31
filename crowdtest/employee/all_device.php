<?php include ('../connection.php'); 
	
  if(empty($_SESSION) && $_SESSION['user_type'] != 'EMPLOYEE'){
    header('Location: ../index.php');
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
	<div class="page-header" align="center"><h1>PC/Laptop</h1><a class="logout-btn" href="logout.php">Logout</a></div>
	<table align="center" class="table table-responsive">
		<table class="table table-hover">
		<tr class="alert-info">
			<th>ID</th>
			<th>Device Name</th>
			<th>Platform</th>
			<th>OS</th>
			<th>Browser</th>
			<th>Version</th>
			<th colspan="2" class="text-center">Action</th>
			
		</tr>
<?php
		$q=mysqli_query($conn,"SELECT * FROM  pc_laptop");

		while($data=mysqli_fetch_array($q))
		{
?>
		<tr>
			<td><?php echo $data["id"]?></td>
			<td><?php echo $data["device_name"]?></td>
			<td><?php echo $data["platform"]?></td>
			<td><?php echo $data["os"]?></td>
			<td><?php echo $data["browser"]?></td>
			<td><?php echo $data["version"]?></td>
			<td><a href="edit.php?cid=<?php echo $data["id"]?>" class="btn btn-primary">Edit</a></td>
			<td><a href="delete.php?did=<?php echo $data["id"]?>" class="btn btn-danger" onclick="return confirm('Are you sure' )">Delete</a></td>
		</tr>
<?php
		}
?>
	</table>
</div>
<div class="container">
	<div class="page-header" align="center"><h1>Mobiles</h1></div>
	<table align="center" class="table table-responsive">
		<table class="table table-hover">
		<tr class="alert-info">
			<th>ID</th>
			<th>Device Name</th>
			<th>Manufacture</th>
			<th>Model</th>
			<th>OS</th>
			<th>Browser</th>
			<th>Version</th>
			<th colspan="2" class="text-center">Action</th>
			
		</tr>
<?php
    include ('../connection.php');
		$q=mysqli_query($conn,"SELECT * FROM  mobile");

		while($data=mysqli_fetch_array($q))
		{
?>
		<tr>
			<td><?php echo $data["id"]?></td>
			<td><?php echo $data["device_name"]?></td>
			<td><?php echo $data["manufacture"]?></td>
			<td><?php echo $data["model"]?></td>
			<td><?php echo $data["os"]?></td>
			<td><?php echo $data["browser"]?></td>
			<td><?php echo $data["version"]?></td>
			<td><a href="edit_1.php?cid=<?php echo $data["id"]?>" class="btn btn-primary">Edit</a></td>
			<td><a href="delete_2.php?did=<?php echo $data["id"]?>" class="btn btn-danger" onclick="return confirm('Are you sure' )">Delete</a></td>
		</tr>
<?php
		}
?>
	</table>
</div>
<div class="container">
	<div class="page-header" align="center"><h1>Tablets</h1></div>
	<table align="center" class="table table-responsive">
		<table class="table table-hover">
		<tr class="alert-info">
			<th>ID</th>
			<th>Device Name</th>
			<th>Manufacture</th>
			<th>Model</th>
			<th>OS</th>
			<th>Browser</th>
			<th>Version</th>
			<th colspan="2" class="text-center">Action</th>
			
		</tr>
<?php
    include ('../connection.php');
		$q=mysqli_query($conn,"SELECT * FROM  tablet");

		while($data=mysqli_fetch_array($q))
		{
?>
		<tr>
			<td><?php echo $data["id"]?></td>
			<td><?php echo $data["device_name"]?></td>
			<td><?php echo $data["manufacture"]?></td>
			<td><?php echo $data["model"]?></td>
			<td><?php echo $data["os"]?></td>
			<td><?php echo $data["browser"]?></td>
			<td><?php echo $data["version"]?></td>
			<td><a href="edit_2.php?cid=<?php echo $data["id"]?>" class="btn btn-primary">Edit</a></td>
			<td><a href="delete_3.php?did=<?php echo $data["id"]?>" class="btn btn-danger" onclick="return confirm('Are you sure' )">Delete</a></td>
		</tr>
<?php
		}
?>
	</table>
</div>
</body>
</html>