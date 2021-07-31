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
                        <div class="container">
                            <div class="page_head col-sm-6">
                                <h1>WELCOME TO VIVID</h1>
                                <p>HOME</p>
                                <h4> We do crowdsourced software testing and we think it's brilliant.
Register an account with us today and become a freelance software tester. Make money by working from home in your spare time. Sound good? </h4>

<button id="btn_click" class="btn btn-success ">Get Started...</button>
<script >
$('#btn_click').on('click', function() { window.location = 'registration.php'; });
</script>
                          </div>
                        </div>
                </div>
            </div>

</div>
<div class="container_fulid">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 post">
                <h5> THIS IS A HEADING WELCOME TO VIVID</h5>
<P>We do crowdsourced software testing and we think it's brilliant. 
    Register an account with us today and become a freelance software tester.
     Make money by working from home in your spare time. Sound good? </P>
     <P>We do crowdsourced software testing and we think it's brilliant. 
    Register an account with us today and become a freelance software tester.
     Make money by working from home in your spare time. Sound good? </P>
            </div>
            <div class="col-sm-3 post">
                <h3>Resent-Post</h3>
                <h5><a href="">welcome to vivid</a></h5>
                <h5><a href="">welcome to vivid</a></h5>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '2e828068-c53a-498d-9a6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>