<!DOCTYPE html>
<html lang="en">
    <head>
		<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Crowd Test</title>

        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap_files/bootstrap.min.css">
  <script src="bootstrap_files/jquery.min.js"></script>
  <script src="bootstrap_files/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="css/vivid_style.css"  rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
        
    <link rel="stylesheet" type="text/css" href="DataTables/css/dataTable.bootstrap.min.css">

    	<style type="text/css">
    		.Quick-Enquiry
    		{
    			padding-top: 90px;
    		}
            .page_head{ 
    color:#fff;
    margin: 10% 0px;
    background-color: #0009;
    padding: 10px; 
}
    	</style>
    </head>
    
    <body>

      <?php include('header.php');?>
       <div class="carousel-inner">

                            <div class="container_fulid">
  <div class="container">
    <div class="row">
     
      <div class="col-sm-9 ">
      <div class="carousel-inner">
                        <div class="container">
                            <div class="page_head col-sm-6">
                                <h1>REQUEST A CALL BACK</h1>
                                <p>HOME</p>
                                <form method="post" enctype="multipart/form-data">
                                <input class="form-control" id="mob" type="text" name="txtNm" placeholder="Name" required="">
                                <input class="form-control" id="mob" type="text" name="txtMob" placeholder="+919098765432" required="">
                                <button class="btn btn-success" id="callme" name="btnCall">Call Me</button>
                                </form>
                                <h4> We do crowdsourced software testing and we think it's brilliant.
                                    Register an account with us today and become a freelance software tester. Make money by working from home in your spare time. Sound good? </h4>
                          </div>
                        </div>
                </div>
    </div>
 <div class="col-sm-3 Quick-Enquiry">
        <h4>Contact Details</h4>
<form method="post" action="">
  <div id="frm" class="form-group form">
    <input class="form-control" type="text" name="txtNm" placeholder="Name" required="">
    <input class="form-control"type="email" name="txtEid" placeholder="Email" required="">
    <input class="form-control"type="email" name="txtEid2" placeholder="Bussiness Email" required="">
    <input class="form-control" type="text" name="txtMob" placeholder="Contact" required="">
    
    <textarea class="form-control" name="txtMsg" placeholder="Message"></textarea>
    <button type="btn" name="btnSubmit" class="btn btn-info">Submit</button>
 
</form>
 </div>
    </div>
       
    </div> 
  </div>
  </div>
                        
                </div>
            </div>

</div>
<div class="container_fulid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="address"><p>address</p></div>
                <div class="address">
                    <p>0987654321</p>
                <p>vividtesting@gmail.com</p>
            </div>
            </div>
             <div class="col-sm-6 live-map">
                <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.4902433793104!2d85.8103792498546!3d20.27996531822803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a77e089f6a3d%3A0xe7a1b8bf9f15b1d7!2sCRP+-+DAV+Rd%2C+Bhubaneswar%2C+Odisha+751015!5e0!3m2!1sen!2sin!4v1566140257907!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

</body>
</html>

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '2e828068-c53a-498d-9a6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>
<?php
        include ('connection.php');
        if(isset($_POST["btnCall"]))
        {
            $Name          =$_POST["txtNm"]; 
            $Mobile             =$_POST["txtMob"];


            $q=mysqli_query($conn,"INSERT INTO  Call_detail(name,mobile_no)VALUES('$Name','$Mobile')")or die(mysqli_error($conn));

            if($q==1)
            {
?>
            <script type="text/javascript">
                alert(" We will contact you soon...");
                window.location ="contact_us.php";
            </script>
<?php
            }
        }
?>
<?php
        include ('connection.php');
        if(isset($_POST["btnSubmit"]))
        {
            $Name          =$_POST["txtNm"];
            $Email              =$_POST["txtEid"];   
            $BussinessEmail              =$_POST["txtEid2"];   
            $Mobile             =$_POST["txtMob"];
            $Message             =$_POST["txtMsg"];


            $q=mysqli_query($conn1,"INSERT INTO  contact_form(name, email,
                bussiness_email,mobile_no,message)VALUES('$Name','$Email','$BussinessEmail','$Mobile ','$Message')")or die(mysqli_error($conn1));

            if($q==1)
            {
?>
            <script type="text/javascript">
                alert(" we will contact you...");
                window.location ="contact_us.php";
            </script>
<?php
            }
        }
?>
