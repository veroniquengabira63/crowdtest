<?php 
    include ('../connection.php');

  if(empty($_SESSION) && $_SESSION['user_type'] != 'EMPLOYEE'){
    header('Location: ../index.php');
  }

	$q=mysqli_query($conn,"SELECT * FROM  task where assignee_id = ".$_SESSION['id']." AND status = 'ACCEPTED' OR status = 'PENDING'");

	echo $_SESSION['id'];
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
	<div class="page-header" align="center"><h1>All Task</h1>
	<table align="center" class="table table-responsive">
		<table class="table table-hover">
		<tr class="alert-info">
			<th>ID</th>
			<th>Task Name</th>
			<th>Details</th>
			<th>Duration</th>
			<th>Status</th>
			<th>Action</th>
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
			<td><?php echo $data["status"]?></td>
			<td>
				<?php if($data['status'] != 'ACCEPTED') { ?>
				<a href="update_task.php?id=<?php echo $data['id']; ?>&status=ACCEPTED">Accept</a> | 
				<?php } if($data['status'] != 'REJECTED') { ?>
				<a href="update_task.php?id=<?php echo $data['id']; ?>&status=REJECTED">Reject</a>  
				<?php } /*if($data['status'] != 'COMPLETED') { ?>
				<a href="update_task.php?id=<?php echo $data['id']; ?>&status=COMPLETED">Complete</a>
				<?php }*/ ?>
			</td>
		</tr>
<?php
		}
?>
	</table>
</table>
</div>
</body>
</html>