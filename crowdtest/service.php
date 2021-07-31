<?php
    include ('connection.php');
    if(isset($_POST["btnSubmit"]))
    {
      $Name            =$_POST["txtNm"];
      $Email           =$_POST["txtEid"];
      $Mobile          =$_POST["txtMob"];
      $Courses         =$_POST["selCources"];   
      $Branch          =$_POST["chk"];
      $Message         =$_POST["txtMsg"];
     


      $q=mysqli_query($conn,"INSERT INTO  quick_enquiry(name, email, contact,course,branch,message)VALUES('$Name','$Email','$Mobile','$Courses','$Branch','$Message')")or die(mysqli_error($conn));

      if($q==1)
      {
?>
      <script type="text/javascript">
        alert("data succefully inserted");
        window.location ="service.php";
      </script>
<?php
      }
    }
?>
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
 .white_box_1
    {
      background-color: #ffffff50;
      height: 180px;
      margin-top: 30px;
      margin-left: 50px;
      margin-right: 10px;
    }
    .box1
    {
      background-color: rgba(100, 100, 100, 0.5);
      height: 35px;
    }
    #box1
    {
      
      font-size: 15px;
      font-weight: bold;
      text-transform: capitalize;
      font-weight: bold;
      text-align: center;
      padding-top: 7px;
      color: white;
    }
   .box2
   {
    background-color:  rgba(100, 100, 100, 0.5);
    height: 50px;
   }
   .txt1
   {
    color: black;
    font-size: 12px;
   }
  .box_1
  {
    background-color: rgba(100, 100, 100, 0.5);
    height: 35px;
  }
  .box_2
   {
    background-color:  rgba(100, 100, 100, 0.5);
    height: 50px;
   }
   #box_1
    {
      
      font-size: 13px;
      font-weight: bold;
      text-transform: capitalize;
      font-weight: bold;
      text-align: center;
      padding-top: 7px;
      color: white;
    }
    .box__1
    {
      background-color: rgba(100, 100, 100, 0.5);
      height: 35px;
    }
    .box__2
    {
      background-color:  rgba(100, 100, 100, 0.5);
      height: 50px;
    }
			.modal-title {
  text-align:center;
  font-size:20px;
  font-weight:bold;
}
@media screen and (min-width: 768px){
  #myModal .modal-dialog {
    webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
  }
}
#myModal .modal-header {
  border-radius: 5px 5px 0 0;
  background-color:#fff;
}
#myModal .modal-content {
  background-color:#fff;
  border-radius: 0;
  padding:20px;
  box-shadow: none;
  background-clip:inherit;
}
#myModal .modal-footer {
  background-color:#fff;
  border-radius: 0 0 5px 5px;
}
@media screen and (min-width: 768px){
  #myModal1 .modal-dialog {
    webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
  }
}
#myModal1 .modal-header {
  border-radius: 5px 5px 0 0;
  background-color:#fff;
}
#myModal1 .modal-content {
  background-color:#fff;
  border-radius: 0;
  padding:20px;
  box-shadow: none;
  background-clip:inherit;
}
#myModal1 .modal-footer {
  background-color:#fff;
  border-radius: 0 0 5px 5px;
}
    	</style>
    </head>
    
    <body>

      <?php include('header.php');?>
      <div class="container-fluid">
    <div class="container">
         <h2 class="header_txt">Courses</h2>
      </div>
      <!--boxone-->

      <div class="col-sm-2 white_box_1">
        <div class="box1">
          <h4 id="box1">Manual Testing</h4>
        </div>
        <div class="box2">
        </div>
        <div>
          <a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal1" class="txt1">Click here for course content and syllabus</a>
        </div>
         <a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal" class="btn btn-primary">Show Batches</a>
                 </div>

<!--boxone-->

      <div class="col-sm-2 white_box_1">
        <div class="box_1">
          <h4 id="box_1">Functional Testing</h4>
        </div>
        <div class="box_2"></div>
        <div>
          <a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal1" class="txt1">Click here for course content and syllabus</a>
        </div>
        <a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal" class="btn btn-primary">Show Batches</a>

               
      </div>
<!--boxone-->

      <div class="col-sm-2 white_box_1">
        <div class="box__1">
          <h4 id="box_1">Automation Testing</h4>
        </div>
        <div class="box__2"></div>
        <div><a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal1" class="txt1">Click here for course content and syllabus</a>
        </div>
        <a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal" class="btn btn-primary">Show Batches</a>
      </div>
  

<!--boxone-->

      <div class="col-sm-2 white_box_1">
        <div class="box__1">
          <h4 id="box1">Linux</h4>
        </div>
        <div class="box__2"></div>
        <div><a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal1" class="txt1">Click here for course content and syllabus</a></div>
      <a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal" class="btn btn-primary">Show Batches</a>
      </div>
 


      <div class="col-sm-2 white_box_1">
        <div class="box__1">
          <h4 id="box1">Database</h4>
        </div>
        <div class="box__2">
        </div>
        <div>
          <a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal1" class="txt1">Click here for course content and syllabus</a>
        </div>
        <a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal" class="btn btn-primary">Show Batches</a>
      </div>

<!--boxone-->

      <div class="col-sm-2 white_box_1">
        <div class="box_1">
          <h4 id="box_1">VoIP Protocol(SIP)</h4>
        </div>
        <div class="box_2"></div>
        <div><a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal1" class="txt1">Click here for course content and syllabus</a></div>
      <a data-toggle="modal" href="2.html" data-remote="1.html #modal-section" data-target="#myModal" class="btn btn-primary">Show Batches</a>
      </div>
		<div class="col-sm-3 Quick-Enquiry">
        <h4>Quick Enquiry</h4>
<form method="post" action="">
  <div id="frm" class="form-group form">
    <input class="form-control" type="text" name="txtNm" placeholder="Name">
    <input class="form-control"type="email" name="txtEid" placeholder="Email">
    <input class="form-control" type="text" name="txtMob" placeholder="Contact">
    <select name="selCources" class="form-control">
      <option  class="form-control">Select-cources</option>
      <option  class="form-control">Manual Testing</option>
      <option  class="form-control">Function Testing</option>
      <option  class="form-control">Automation</option>
      <option  class="form-control">Linux</option>
      <option  class="form-control">Database</option>
      <option  class="form-control">VoIP Protocol(SIP)</option>
    </select>
    <select name="chk" class="form-control">
      <option  class="form-control">Select-Branch</option>
      <option  class="form-control">Khordha</option>
      <option  class="form-control">Online</option>
    </select>
    <textarea class="form-control" name="txtMsg" ></textarea>
    <button type="btn" name="btnSubmit" class="btn btn-info">Submit</button>
 
</form>
 </div>
 
<!--boxone-->

<script type="text/javascript">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
$(document).on('hidden.bs.modal', function (e) {
    var target = $(e.target);
    target.removeData('bs.modal')
    .find(".clearable-content").html('');
});
</script>
</body>
</html></script>
<div id="myModal" class="modal fade" role="dialog">
     <div class="modal-dialog">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <p class="modal-title"><div class="page-header" align="center"><h1>Upcoming Batches</h1></div>
                    
    <table  align="center" class="table table-hover table table-responsive">
    <tr>
      <td>Branch</td>
      <td>Date</td>
      <td>Time</td>
      <td>Batch Timing</td>
      <td>Contact</td>
    </tr>
    <tr>
      <td>BTM Layout</td>
      <td>10/01/2019  </td>
      <td>7:30 AM </td>
      <td>Morning</td>
      <td>9980500900</td>
    </tr>
    <tr>
      <td>BTM Layout  </td>
      <td>19/01/2019  </td>
      <td>9:00 AM </td>
      <td>Weekend</td>
      <td>9980500900</td>
    </tr>
    <tr>
      <td>BTM Layout  </td>
      <td>21/01/2019  </td>
      <td>7:00 AM</td>
      <td>Morning</td>
      <td>9980500900</td>
    </tr>
    </table>
    </div>
      </div>
</p>
      </div>
      <!-- Modal content-->
      <div class="modal-content clearable-content">
      </div>
     </table></p>
  </div>
</div><div id="myModal1" class="modal fade" role="dialog">
     <div class="modal-dialog">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <p class="modal-title"><div class="page-header" align="center"><h1>PYTHON - SELENIUM</h1></div>
                    
    <h4>Basics of Scripting languages</h4>
    <h4>Installation</h4>
      </div>
      <!-- Modal content-->
      <div class="modal-content clearable-content">
      </div>
     </table></p>
  </div>
</div>
<?php include 'footer.php'; ?>

     <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '2e828068-c53a-498d-9a6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>
</body>
