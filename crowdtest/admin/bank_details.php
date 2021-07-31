<?php 
    include ('../connection.php');

  if(empty($_SESSION) && $_SESSION['user_type'] != 'ADMIN'){
    header('Location: ../index.php');
  }
		$q=mysqli_query($conn,"SELECT bank_details.*,signup.first_name,signup.last_name FROM  bank_details join signup on bank_details.tester_id = signup.id");
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
	<div class="page-header" align="center"><h1>Tester's Bank Details</h1></div>
	<table align="center" class="table table-responsive">
		<table class="table table-hover">
		<tr class="alert-info">
			<th>ID</th>
			<th>Tester Name</th>
			<th>Account Type</th>
			<th>Holder Name</th>
			<th>Holder Account</th>
			<th>Bank Branch</th>
			<th>IFSC Code</th>
			<th>Paypal Email Id</th>
			
		</tr>
<?php
		while($data=mysqli_fetch_array($q))
		{
?>
		<tr>
			<td><?php echo $data["id"]?></td>
			<td><?php echo $data["first_name"].' '.$data["first_name"]; ?></td>
			<td><?php echo $data["account_type"]?></td>
			<td><?php echo $data["holder_name"]?></td>
			<td><?php echo $data["holder_account"]?></td>
			<td><?php echo $data["bank_branch"]?></td>
			<td><?php echo $data["ifsc_code"]?></td>
			<td><?php echo $data["paypal_email_id"]?></td>
		</tr>
<?php
		}
?>
	</table>
</table>
</div>
</body>
</html>