<?php
		    include ('../connection.php');

  if(empty($_SESSION) && $_SESSION['user_type'] != 'TESTER'){
    header('Location: ../index.php');
  }
  
    	$id=$_GET["cid"];

    	if(isset($_POST["btnUpdate"]))
    	{
    		$Device			=$_POST["txtNm"];
    		$Manufacture			=$_POST["manufacture"];
			$Model           =$_POST["model"];
			$OS        		=$_POST["os"];
			$Browser          	=$_POST["browser"];
			$Version          	=$_POST["version"];



			if(!empty($image))
		{
			
			mysqli_query($conn, "UPDATE mobile SET device_name='$Device',manufacture='$Manufacture',model='$Model',os='$OS ',browser='$Browser',version='$Version' WHERE id='$id'") or die(mysqli_error($conn));   
		}
		else
		{
			mysqli_query($conn, "UPDATE mobile SET device_name='$Device',manufacture='$Manufacture',model='$Model',os='$OS ',browser='$Browser',version='$Version' WHERE id='$id'");   

			header("location:all_device.php");
		
		}
    	}
    	$q=mysqli_query($conn,"SELECT * FROM mobile WHERE id='$id'");
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
<div class="container" style="text-align: center;">
	<div class="col-md-8 col-md-offset-2">
	<div class="page-header"><h1>Edit Form</h1></div>
	<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
	
		<div class="form-group">
			<label for="Device Name" class="col-sm-2" control-label>Device Name</label>
			<div class="col-sm-10">
				<input type="text" name="txtNm" value="<?php echo $data["device_name"]?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="manufacture" class="col-sm-2" control-label>Manufacture</label>
			<div class="col-sm-10">
				<input type="text" name="manufacture" value="<?php echo $data["manufacture"]?>"  class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="model" class="col-sm-2" control-label>Model</label>
			<div class="col-sm-10">
				<input type="text" name="model" value="<?php echo $data["model"]?>"  class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="os" class="col-sm-2" control-label>OS</label>
			<div class="col-sm-10">
				<input type="text" name="os" value="<?php echo $data["os"]?>"  class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="browser" class="col-sm-2" control-label>Browser</label>
			<div class="col-sm-10">
				<input type="text" name="browser" value="<?php echo $data["browser"]?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="version" class="col-sm-2" control-label>Version</label>
			<div class="col-sm-10">
				<input type="text" name="version" value="<?php echo $data["version"]?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<input type="submit" name="btnUpdate" value="Update" class="btn btn-info">
		</div>
	</table>
</form>
</head>
<body>

</body>
</html>