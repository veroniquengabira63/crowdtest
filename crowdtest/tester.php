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
		   #text_box h3{
    color: #fff;
}
		   .text_slide{
     margin-bottom: 100px;
     margin-left: 30px;
    margin-right: 30px;
    color: #000c;
}
.text_slide h5{
     float: right;
     color: #fff;
}
.text_slide span{
     color: #4f9ed1;
     font-weight: bold;
}
		   #text_box{
    background-color: #000c;
    margin: 30px 0px;
}
		    .subheader {
    font-family: 'Open Sans', sans-serif;
    font-weight: normal;
    margin-top: 12px;
    font-size: 12px;
    color: #fff;
}
		   .tester{
    background-color: #fff;
    min-height: 122px;
    margin-top: 40px;
    padding: 10px 25px;
    font-size: 14px; 
    border: 1px solid #000;
    border-radius: 5px !important;
}
		   .tester{
    background-color: #fff;
    min-height: 122px;
    margin-top: 40px;
    padding: 10px 25px;
    font-size: 14px; 
    border: 1px solid #000;
    border-radius: 5px !important;
}
#container_box{
    background-color: #f8f3f3;
}
.box{
    width:188px;
    background-color: #fff;
    margin: 40px auto;
    padding: 10px;
    border: 2px solid #504b4b1a;
}
.pera{
    margin: 50px auto;
}
.pera a{
    color:blue;
}
.pera p{
    margin: 10px auto;
    font-size: 18px;
}
.pera button{
    text-align: center;
    float:right;
    border: 1px solid #fff;
    border-radius: 8px !important;
}
		   #bg_img {
    background: url('images/vivid_bg2.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    overflow-x: hidden;
    margin-bottom:0;
    height: auto;
    margin-top: 20px;
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
<div class="vivid-top-bar" id="vivid-top">
            <div class="container">
                <div class="subheader">
                  <h4>Getting started is easy , follow these simple steps</h4>
                </div>
            </div>
        </div>
        <div class="container_fulid" id="container_box">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-lg-2 col-xs-12 col-md-4" id="col-sm-4">
                        <div class="box">
                            <h4>Step-1</h4>
                            <img src="images/step-1.png">
                            <p>Create a Vivid Testerstester account</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-2 col-xs-12 col-md-4" id="col-sm-4">
                        <div class="box">
                            <h4>Step-2</h4>
                            <img src="images/step-2.png">
                            <p>Add your hardware and software</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-2 col-xs-12 col-md-4" id="col-sm-4">
                        <div class="box">
                            <h4>Step-3</h4>
                            <img src="images/step-3.png">
                            <p>Receive test project alerts by email</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-2 col-xs-12 col-md-4" id="col-sm-4">
                        <div class="box">
                            <h4>Step-4</h4>
                            <img src="images/step-4.png">
                            <p>Use your skills to find bugs and defects</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-2 col-xs-12 col-md-4" id="col-sm-4">
                        <div class="box">
                            <h4>Step-5</h4>
                            <img src="images/step-5.png">
                            <p>Bugs are reviewed for accuracy</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-2 col-xs-12 col-md-4" id="col-sm-4">
                        <div class="box">
                            <h4>Step-6</h4>
                            <img src="images/step-6.png">
                            <p>Get paid weekly via PayPal or Payoneer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_fulid">
            <div class="container">
                <div class="pera">
                    <h3>How it works</h3>
                    <p>As a tester with Vivid Testing, you get paid for every valid bug that you identify. You'll work head-to-head with others testers to identify bugs in functionality and code across a range of mobile apps, websites and softwar</p>
                    <p>Simply create an account and complete your profile. We'll alert you to new project launches as soon as they are available - you'll be earning extra money in no time</p>

                    <a href="registration.php" class="btn btn-success butt">Create Account</a>
                </div>
            </div>
        </div>on
<div class="container_fulid" id="bg_img">
            <div class="container" >
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12" id="text_box">
                        <h3>What our testers say</h3>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">  
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="text_slide">
                                        <div class="tester">
                                            <p>When you become part of the Vivid testing community, you will be able to earn money and improve your testing experience working with some fantastic clients and brands.</p>
                                        </div>
                                             <h5><span>Buggeek</span> - Vivid Tester since December 2018</h5>
                                    </div>
                              </div>
                                <div class="item">
                                    <div class="text_slide">
                                        <div class="tester">
                                            <p>Vivid testing is a good place when you can earn quick money from brief projects.</p>
                                         </div>
                                             <h5><span>Alexey</span> - Vivid Tester since December 2018</h5>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="text_slide">
                                        <div class="tester">
                                            <p>Being a member of the Vivid testing team is rewarding!</p>
                                         </div>
                                             <h5><span>Renata</span> - Vivid Tester since December 2018</h5>
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
                <div class="pera">
                    <h3>Why work with us?</h3>
                    <p>When you become part of the Vivid Testers community, you will be able to earn money and improve your testing experience working with some fantastic clients and brands.</p>
                    <p>With Vivid Testers you will gain access not only to some incredible projects, testing on unreleased mobile apps and next generation websites, but also to <a href="">our forum</a> where you can share your expertise with other testers. </p>
                </div>
            </div>
        </div>
       <div class="vivid-top-bar" id="vivid-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            
                            Copyright © 2018 | All Rights Reserved
                    </div>
                    <div id="email" class="pull-right">
                            
                    </div>
                </div>
            </div>
        </div>
<?php include 'footer.php'; ?>

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '2e828068-c53a-498d-9a6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>