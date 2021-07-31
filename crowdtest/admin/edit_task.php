<?php
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
	header('Location: ../index.php');
}
if(isset($_POST["btnSignup"]))
{

	$id         =$_POST["id"];
	$Task_Name         =$_POST["task_name"];
	$Description          =$_POST["details"];
	$Duration             =$_POST["duration"];
	$Start_date  = $_POST["start_date"];
	$assignee_id              =$_POST["assignee_id"];   
	$Status           = $_POST["status"];   

	$q = mysqli_query($conn, "UPDATE task SET task_name='$Task_Name',details='$Description',duration ='$Duration ',assignee_id='$assignee_id',status='$Status',start_date='$Start_date' WHERE id='$id'") or die(mysqli_error($conn)); 

	if($q==1)
	{
		?>
		<script type="text/javascript">
			alert("Task Updated successfully");
			window.location ="all_task.php";
		</script>
		<?php
	}
}

$sql = 'SELECT * FROM employee_login';
$employees = mysqli_query($conn, $sql);

$sql = 'SELECT * FROM task where id = '.$_GET['cid'];
$task = mysqli_query($conn, $sql);
$task = mysqli_fetch_object($task);

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
				<div class="page-header"><h1>Edit Task</h1></div>
				<form method="post" enctype="multipart/form-data" class="form-horizontal" id="form">

					<table border="0" style="width: 80%;margin: 0 auto" aline="center" class="table table-responsive">
						<tr>
							<input type="hidden" name="id" value="<?php echo $task->id ?>">
							<td><label for="project_name">Task name</label></td>
							<td><input id="project_name" type="text" name="task_name" class="form-control input-lg" required="" placeholder="Enter Your Task Name" value="<?php echo $task->task_name ?>"></td>
						</tr>
						<tr>
							<td><label for="details">Details</label></td>
							<td><textarea id="details" name="details" class="form-control input-lg"><?php echo $task->details ?> </textarea></td>
						</tr>
						<tr>
							<td><label for="example1"> Task Duration</label></td>
							<td><input  type="text" id="example1" name="duration" class="form-control input-lg " required="" value="<?php echo $task->duration ?>">
								
                    		</td>
						</tr>
						<tr>
							<td><label for="example1"> Task Start date</label></td>
							<td><input  type="date" id="example1" name="start_date" class="form-control input-lg " required="" value="<?php echo $task->start_date ?>" onfocus="(this.type='date')" onfocusout="(this.type='text')" placeholder="<?php echo $task->start_date ?>">
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
	                            <option value="<?php echo $row->id ?>" <?php if($task->assignee_id == $row->id) echo 'selected' ?>><?php echo $row->first_name; ?></option> 
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
	                            <option <?php if($task->status == 'PENDING') echo 'selected' ?> value="PENDING">PENDING</option> 
	                            <option <?php if($task->status == 'ACCEPTED') echo 'selected' ?> value="ACCEPTED">ACCEPTED</option>
	                            <option <?php if($task->status == 'REJECTED') echo 'selected' ?> value="REJECTED">REJECTED</option>
	                            <option <?php if($task->status == 'COMPLETED') echo 'selected' ?> value="COMPLETED">COMPLETED</option> 
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