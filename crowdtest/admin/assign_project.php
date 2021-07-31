<?php
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
	header('Location: ../index.php');
}
$id=$_GET["cid"];

if(isset($_POST["btnUpdate"]))
{
	$Project_Name         =$_POST["project_name"];
	$Project_id         =$_POST["project_id"];
	$Employee_id           = $_POST["employee_id"];

		$a=mysqli_query($conn,"INSERT INTO  assign_project(project_name, employee_id, project_id)VALUES('$Project_Name',$Employee_id,Project_id)")or die(mysqli_error($conn));

	if($a==1)
	{
		?>
		<script type="text/javascript">
			alert("Project assigned successfully");
			window.location ="all_projects.php";
		</script>
		<?php
	}
}

$q=mysqli_query($conn,"SELECT * FROM project WHERE id=".$id);
$data=mysqli_fetch_array($q);

$e=mysqli_query($conn,"SELECT * FROM employee_login");

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

	<?php include 'navbar.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="page-header"><h1>Project Assign to employee Form</h1></div>
				<form method="post" enctype="multipart/form-data" class="form-horizontal" id="form">
					<div class="form-group">
						<label for="name" class="col-sm-2" control-label>Project Name</label>
						<div class="col-sm-8">
							<input type="hidden" name="project_id" value="<?php echo $data["id"]?>" class="form-control">
							<input type="text" name="project_name" value="<?php echo $data["name"]?>" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-sm-2" control-label>Employee Name</label>
						<div class="col-sm-8">
							<select data-placeholder="Select " class="form-control input-lg" name="employee_id" required="">
	                            <option></option> 
								<?php
									while ($val = mysqli_fetch_object($e)) {
								?>
	                            	<option value="<?php echo $val->id ?>" ><?php echo $val->first_name ?></option>
								<?php
									}
								?>
	                        </select>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" name="btnUpdate" value="Update" class="btn btn-info">
					</div>
				</form>
			</div>
		</div>
</body>
</html>