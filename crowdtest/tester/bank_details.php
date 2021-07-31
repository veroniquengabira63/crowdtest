<?php 
include ('../connection.php');

if(empty($_SESSION) && $_SESSION['user_type'] != 'TESTER'){
	header('Location: ../index.php');
}
$q=mysqli_query($conn,"SELECT * FROM  bank_details where tester_id = ".$_SESSION['id']);
$row = mysqli_fetch_object($q);

$id=$_GET["cid"];

if(isset($_POST["btnUpdate"]))
{
	$account_type        =$_POST["account_type"];
    $holder_name         =$_POST["holder_name"];
    $holder_account      =$_POST["holder_account"];
    $bank_branch         =$_POST["bank_branch"];     
    $ifsc_code           =$_POST["ifsc_code"];
    $paypal_email_id     =$_POST["paypal_email_id"]; 
    $tester_id     =	$_SESSION["id"]; 
    $id     =	$_POST["id"]; 

	if($_POST['account_type'] == 'indian') {
		if ($_POST['id'] == '') {
			mysqli_query($conn,"INSERT INTO bank_details(tester_id,account_type,holder_name,holder_account,bank_branch,ifsc_code,paypal_email_id) values($tester_id,'$account_type','$holder_name','$holder_account','$bank_branch','$ifsc_code','')");
			header('Location: bank_details.php');
			exit();
		} else {
			$update = mysqli_query($conn, "UPDATE bank_details SET tester_id=$tester_id,account_type='$account_type',holder_name='$holder_name',holder_account='$holder_account ',bank_branch='$bank_branch',ifsc_code='$ifsc_code',paypal_email_id='' WHERE id=".$_POST['id']);
			header('Location: bank_details.php');
			exit();
		}
	}
	if($_POST['account_type'] == 'nonindian') {
		if ($_POST['id'] == '') {
			mysqli_query($conn,"INSERT INTO bank_details(tester_id,account_type,holder_name,holder_account,bank_branch,ifsc_code,paypal_email_id) values($tester_id,'$account_type','','','','','','$paypal_email_id')");
			header('Location: bank_details.php');
			exit();
		}else {
			$update = mysqli_query($conn, "UPDATE bank_details SET tester_id=$tester_id,account_type='$account_type',holder_name='',holder_account=' ',bank_branch='',ifsc_code='',paypal_email_id='$paypal_email_id' WHERE id=".$_POST['id']);
			header('Location: bank_details.php');
			exit();
		}
	}
	
}

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
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="page-header custom-header-page">
					<h1>Edit Form</h1>
				</div>
				<form method="post"  class="form-grop" action="" enctype="multipart/form-data" novalidate>
					<table border="0" aline="center" class="table table-responsive">
						<tr>
							<input type="hidden" name="id" value="<?php echo isset($row->id) ? $row->id : ''; ?>">
							<td><label>Payment Transfer Details</label></td>
							<td>
								<input type="radio" id="indian" name="account_type" value="indian" <?php if($row->account_type == 'indian') echo 'checked' ?>>
								<label for="indian" style="margin-right: 20px;margin-left: 10px;">Indian</label>
								<input type="radio" id="nonindian" name="account_type" value="nonindian" <?php if($row->account_type == 'nonindian') echo 'checked' ?>>
								<label for="nonindian" style="margin-right: 20px;margin-left: 10px;">Non Indian</label>
							</td>
						</tr>
						<tr class="nonindian box">
							<td><label>  Paypal Email Id</label></td>
							<td><input type="email" name="paypal_email_id" class="form-control input-lg" required="true" placeholder="Enter Paypal Email Id" value="<?php echo $row->paypal_email_id; ?>"></td>
						</tr>
						<tr class="indian box">
							<td><label> Holder Name</label></td>
							<td><input type="text" name="holder_name" class="form-control input-lg" required="" placeholder="Enter holder name" value="<?php echo $row->holder_name; ?>"></td>
						</tr>
						<tr class="indian box">
							<td><label>Holder account No.</label></td>
							<td><input type="text" name="holder_account" class="form-control input-lg" required="" placeholder="Enter Account Number" value="<?php echo $row->holder_account; ?>"></td>
						</tr>
						<tr class="indian box">
							<td><label>Bank Branch</label></td>
							<td><input type="text" name="bank_branch" class="form-control input-lg" required="" placeholder="Enter Bank branch" value="<?php echo $row->bank_branch; ?>"></td>
						</tr>
						<tr class="indian box">
							<td><label>Ifsc Code</label></td>
							<td><input type="text" name="ifsc_code" class="form-control input-lg" placeholder="Enter IFSC Code" required="" value="<?php echo $row->ifsc_code; ?>"></td>
						</tr>
					</div>
					<tr>
						<td><button class="btn btn-info" type="submit" name="btnUpdate" value="Submit">Submit</botton></td>
							<td><button class="btn btn-warnig" id="cancel"type="reset" name="btnCancel" value="cancel">Cancel</button></td>
						</tr>

					</table>

				</form>
				<table class="table" border="1" cellpadding="1" cellspacing="0">
					<tr>
						<th>Payment Transfer Details</th>
						<th>Paypal Email Id</th>
						<th>Account holder name</th>
						<th>Account Number</th>
						<th>Ifsc Code</th>
						<th>Branch Name</th>
						<th>Action</th>
					</tr>
					<?php if($row->account_type != ''){ ?>
					<tr>
						<td><?php echo $row->account_type; ?></td>
						<td><?php echo $row->paypal_email_id; ?></td>
						<td><?php echo $row->holder_name; ?></td>
						<td><?php echo $row->holder_account; ?></td>
						<td><?php echo $row->ifsc_code; ?></td>
						<td><?php echo $row->bank_branch; ?></td>
						<td><a href="delete_bank.php?id=<?php echo $_SESSION["id"]; ?>">Delete</a></td>
					</tr>
				<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //$(".box").hide();
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
<?php if($row->account_type == 'indian'){ ?>
	<script type="text/javascript">
        $(".indian").show();
        $(".nonindian").hide();
	</script>
<?php } else {
?>	
	<script type="text/javascript">
        $(".nonindian").show();
        $(".indian").hide();
	</script>

<?php
} ?>
<script>
	var allowsubmit = false;
	$(function(){
      //on keypress 
      $('#confpass').keyup(function(e){
        //get values 
        var pass = $('#pass').val();
        var confpass = $(this).val();
        
        //check the strings
        if(pass == confpass){
          //if both are same remove the error and allow to submit
          $('.error').text('');
          allowsubmit = true;
      }else{
          //if not matching show error and not allow to submit
          $('.error').text('Password not matching');
          allowsubmit = false;
      }
  });
      
      //jquery form submit
      $('#form').submit(function(){
      	
      	var pass = $('#pass').val();
      	var confpass = $('#confpass').val();

        //just to make sure once again during submit
        //if both are true then only allow submit
        if(pass == confpass){
        	allowsubmit = true;
        }
        if(allowsubmit){
        	return true;
        }else{
        	return false;
        }
    });
  });
</script>