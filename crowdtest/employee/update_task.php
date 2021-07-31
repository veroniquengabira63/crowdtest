<?php
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
	header('Location: ../index.php');
}
	$id         =$_GET["id"];
	$status         =$_GET["status"];

	$q = mysqli_query($conn, "UPDATE task SET status='$status' WHERE id='$id'") or die(mysqli_error($conn)); 

	if($q==1)
	{
		?>
		<script type="text/javascript">
			alert("Task Updated successfully");
			window.location ="all_task.php";
		</script>
		<?php
	}

$sql = 'SELECT * FROM employee_login';
$employees = mysqli_query($conn, $sql);

$sql = 'SELECT * FROM task where id = '.$_GET['cid'];
$task = mysqli_query($conn, $sql);
$task = mysqli_fetch_object($task);

?>