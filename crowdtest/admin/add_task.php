<?php
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
	header('Location: ../index.php');
}
if(isset($_POST["btnSignup"]))
{

	$Task_Name         =$_POST["name"];
	$Description          =$_POST["description"];
	$Duration             =$_POST["duration"];
	$Start_date  		= $_POST["start_date"];
	$assignee_id              =$_POST["assignee_id"];   
	$Status           = $_POST["status"];   

	$q=mysqli_query($conn,"INSERT INTO  task(task_name, details, duration, assignee_id, status,start_date)VALUES('$Task_Name','$Description','$Duration','$assignee_id','$Status','$Start_date')")or die(mysqli_error($conn));

	if($q==1)
	{
		?>
		<script type="text/javascript">
			alert("Task added successfully");
			window.location ="all_task.php";
		</script>
		<?php
	}
}

$sql = 'SELECT * FROM employee_login';
$employees = mysqli_query($conn, $sql);
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
	<?php include 'nav.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="page-header"><h1>Add Task</h1></div>
				<form method="post" enctype="multipart/form-data" class="form-horizontal" id="form">

					<table border="0" style="width: 80%;margin: 0 auto" aline="center" class="table table-responsive">
						<tr>
							<td><label for="project_name">Task name</label></td>
							<td><input id="project_name" type="text" name="name" class="form-control input-lg" required="" placeholder="Enter Your Task Name"></td>
						</tr>
						<tr>
							<td><label for="description">Details</label></td>
							<td><textarea id="description" name="description" class="form-control input-lg"> </textarea></td>
						</tr>
						<tr>
							<td><label for="example1"> Task Duration</label></td>
							<td><input  type="text" id="example1" name="duration" class="form-control input-lg " required="">
								
                    		</td>
						</tr>
						<tr>
							<td><label for="example1"> Task Start Date</label></td>
							<td><input  type="date" id="example1" name="start_date" class="form-control input-lg " required="">
								
                    		</td>
						</tr>
						<tr>
						<td><label for="">Assignee</label></td>
						<td>
							<select id="status" data-placeholder="Select Assignee" class="form-control input-lg" name="assignee_id" required="">
	                            <option></option>
	                        <?php
	                        	while ($row = mysqli_fetch_object($employees)) {
	                        ?>
	                            <option value="<?php echo $row->id ?>"><?php echo $row->first_name; ?></option> 
	                        <?php
	                        	}
	                        ?>
	                        </select>
	                    </td>
						</tr>
						<tr>
							<td><label for="status">Task Status</label></td>
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