<?php 
    include ('../connection.php');

  if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
    header('Location: ../index.php');
  }
		$q=mysqli_query($conn,"SELECT project.*,signup.first_name,signup.last_name FROM  project join signup ON project.tester_id = signup.id");
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
	<?php include 'nav.php'; ?>
	<div class="container">
	<div class="page-header" align="center"><h1>All Projects</h1></div>
	<table align="center" class="table table-responsive">
		<table class="table table-hover">
		<tr class="alert-info">
			<th>ID</th>
			<th>Project Name</th>
			<th>Description</th>
			<th>Deadline</th>
			<th>Start date</th>
			<th>Price</th>
			<th>Assignee Employee</th>
			<th>Status</th>
			<th colspan="2" class="text-center">Action</th>
			
		</tr>
<?php
		while($data=mysqli_fetch_array($q))
		{
?>
		<tr>
			<td><?php echo $data["id"]?></td>
			<td><?php echo $data["name"]?></td>
			<td><?php echo $data["description"]?></td>
			<td><?php echo $data["date"]?></td>
			<td><?php echo $data["start_date"]?></td>
			<td>₹​ <?php echo $data["price"]?></td>
			<td><?php echo $data["first_name"].' '.$data["last_name"]?></td>
			<td><?php echo $data["status"]?></td>
			<td><a href="delete_project.php?did=<?php echo $data["id"]?>" class="btn btn-danger" onclick="return confirm('Are you sure' )">Delete</a></td>
		</tr>
<?php
		}
?>
	</table>
</table>
</div>
</body>
</html>