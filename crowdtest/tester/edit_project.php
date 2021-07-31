<?php
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
	header('Location: ../index.php');
}
$id=$_GET["cid"];

if(isset($_POST["btnUpdate"]))
{
	$Project_Name         =$_POST["name"];
	$Description          =$_POST["description"];
	$Deadline             =$_POST["date"];
	$Price              =$_POST["price"];   
	$Status           = $_POST["status"];

	mysqli_query($conn, "UPDATE project SET name='$Project_Name',description='$Description',date='$Deadline ',price='$Price',status='$Status' WHERE id='$id'") or die(mysqli_error($conn)); 

	header("location:all_projects.php"); 

}
$q=mysqli_query($conn,"SELECT * FROM project WHERE id=".$id);
$data=mysqli_fetch_array($q);

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
				<div class="page-header"><h1>Edit Form</h1></div>
				<form method="post" enctype="multipart/form-data" class="form-horizontal" id="form">
					<div class="form-group">
						<label for="name" class="col-sm-2" control-label>Project Name</label>
						<div class="col-sm-8">
							<input type="text" name="name" value="<?php echo $data["name"]?>" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-2" control-label>Description</label>
						<div class="col-sm-8">
							<textarea type="text" name="description" value=""  class="form-control"><?php echo $data["description"]?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="example1" class="col-sm-2" control-label>Project Deadline</label>
						<div class="col-sm-8">
							<input  type="text" id="example1" name="date" value="<?php echo $data["date"]?>"  class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="price" class="col-sm-2" control-label>Project Price</label>
						<div class="col-sm-8">
							<input type="number" name="price" value="<?php echo $data["price"]?>"  class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-sm-2" control-label>Project Status</label>
						<div class="col-sm-8">
							<select data-placeholder="Select Status" class="form-control input-lg" name="status" required="">
	                            <option></option>
	                            <option <?php if($data["status"] == 'PENDING') echo 'selected' ?> value="PENDING">PENDING</option> 
	                            <option <?php if($data["status"] == 'ACCEPTED') echo 'selected' ?> value="ACCEPTED">ACCEPTED</option>
	                            <option <?php if($data["status"] == 'REJECTED') echo 'selected' ?> value="REJECTED">REJECTED</option>
	                            <option <?php if($data["status"] == 'COMPLETED') echo 'selected' ?> value="COMPLETED">COMPLETED</option>   
	                        </select>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" name="btnUpdate" value="Update" class="btn btn-info">
					</div>
				</form>
			</div>
		</div>
		 <script type="text/javascript">
             $('#example1').datepicker({
			    autoclose: true,  
			    format: "dd/mm/yyyy"
			}); 
        </script>
</body>
</html>