<?php
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'EMPLOYEE'){
	header('Location: ../index.php');
}
if(isset($_POST["btnSignup"]))
{
	$Project_Name         =$_POST["name"];
	$Description          =$_POST["description"];
	$Deadline             = $_POST["date"];
	$Price              =$_POST["price"];
	$Start_date  		= $_POST["start_date"];   
	$Tester              =$_POST["tester_id"];   
	$Status           = $_POST["status"];   

	$q=mysqli_query($conn,"INSERT INTO  project(name, description, date, price,	status,tester_id,start_date)VALUES('$Project_Name','$Description','$Deadline','$Price ','$Status',$Tester,'$Start_date')")or die(mysqli_error($conn));

	if($q==1)
	{
		?>
		<script type="text/javascript">
			alert("Project added successfully");
			window.location ="all_projects.php";
		</script>
		<?php
	}
}

$tester = mysqli_query($conn,'select * from signup');


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
				<div class="page-header"><h1>Add Project</h1></div>
				<form method="post" enctype="multipart/form-data" class="form-horizontal" id="form">

					<table border="0" style="width: 80%;margin: 0 auto" aline="center" class="table table-responsive">
						<tr>
							<td><label for="project_name">Project name</label></td>
							<td><input id="project_name" type="text" name="name" class="form-control input-lg" required="" placeholder="Enter Your Project Name"></td>
						</tr>
						<tr>
							<td><label for="description">Description</label></td>
							<td><textarea id="description" name="description" class="form-control input-lg"> </textarea></td>
						</tr>
						<tr>
							<td><label for="example1"> Project Deadline</label></td>
							<td><input  type="date" id="example1" name="date" class="form-control input-lg " required="">
								
                    		</td>
						</tr>
						<tr>
							<td><label for="example1"> Start Date</label></td>
							<td><input  type="date" id="example1" name="start_date" class="form-control input-lg " required="">
                    		</td>
						</tr>
						<tr>
							<td><label for="">Project Price</label></td>
							<td><input type="number" name="price" class="form-control input-lg" required=""></td>
						</tr>
						<tr>
							<td><label for="tester_id">Assignee Tester</label></td>
							<td><select id="tester_id" data-placeholder="Select Tester" class="form-control input-lg" name="tester_id" required="">
	                            <option></option>
	                        <?php
	                        	while($row = mysqli_fetch_object($tester)){
	                        ?>
	                            <option value="<?php echo $row->id ?>"><?php echo $row->first_name.' '.$row->last_name ?></option> 
	                        <?php 
	                        	}
	                        ?>
	                        </select></td>
						</tr>
						<tr>
							<td><label for="status">Project Status</label></td>
							<td><select id="status" data-placeholder="Select Status" class="form-control input-lg" name="status" required="">
	                            <option></option>
	                            <option value="PENDING">PENDING</option> 
	                            <option value="ACCEPTED">ACCEPTED</option>
	                            <option value="REJECTED">REJECTED</option>
	                            <option value="COMPLETED">COMPLETED</option> 
	                        </select></td>
						</tr>
						
					</div>
					<tr>
						<td><button class="btn btn-info" type="submit" name="btnSignup" value="Submit">Submit</botton></td>
							<td><button class="btn btn-warnig" id="cancel"type="reset" name="btnCancel" value="cancel">Cancel</button></td>
						</tr>

					</table>

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