<?php 
    include ('../connection.php');

  if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
    header('Location: ../index.php');
  }
		$q=mysqli_query($conn,"SELECT task.*,employee_login.first_name,employee_login.last_name  FROM  task join employee_login ON task.assignee_id = employee_login.id");
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
	<div class="page-header" align="center"><h1>All Task</h1><a class="logout-btn" href="add_task.php">Add Task</a>
	<table align="center" class="table table-responsive">
		<table class="table table-hover">
		<tr class="alert-info">
			<th>ID</th>
			<th>Task Name</th>
			<th>Details</th>
			<th>Duration</th>
			<th>Start Date</th>
			<th>Assignee</th>
			<th>Status</th>
			<th colspan="2" class="text-center">Action</th>
			
		</tr>
<?php
		while($data=mysqli_fetch_array($q))
		{
?>
		<tr>
			<td><?php echo $data["id"]?></td>
			<td><?php echo $data["task_name"]?></td>
			<td><?php echo $data["details"]?></td>
			<td><?php echo $data["duration"]?></td>
			<td><?php echo $data["start_date"]?></td>
			<td><?php echo $data["first_name"]?></td>
			<td><?php echo $data["status"]?></td>
			<td><a href="edit_task.php?cid=<?php echo $data["id"]?>" class="btn btn-primary">Edit</a></td>
			<td><a href="delete_task.php?did=<?php echo $data["id"]?>" class="btn btn-danger" onclick="return confirm('Are you sure' )">Delete</a></td>
		</tr>
<?php
		}
?>
	</table>
</table>
</div>
</body>
</html>