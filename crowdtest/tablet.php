<?php
include ('connection.php');
  if(empty($_SESSION) && $_SESSION['user_type'] != 'TESTER'){
    header('Location: index.php');
  }
    if(isset($_POST["btnSubmit"]))
    {
      $Name                   =$_POST["txtNm"];
      $Manufacture            =$_POST["manufacture"];
      $Model                  =$_POST["txtmodel"];
      $OSPC                   =$_POST["os"];
      $Browser                =$_POST["browser"];   
      $Version                =$_POST["version"];  

      $q=mysqli_query($conn,"INSERT INTO tablet(device_name,manufacture,model,os,browser,version)VALUES('$Name','$Manufacture','$Model','$OSPC','Browser','$Version')") or die(mysqli_error($conn));
      

      if($q==1)
      {
?>
      <script type="text/javascript">
        alert("data succefully inserted");
        window.location ="select_type.php";
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
    		.header
    		{
    			text-align: center;
    			padding-bottom: 30px;
    			color: black;
    			padding-top: 20px;
    		}
    		.form_1
    		{
    			padding-bottom: 100px;
    		}
    	</style>
    </head>
    
    
    <body>

  <?php include 'header.php'; ?>
      <div class="carousel-inner">
                        <div class="container">
                          <h1 class="header">Select Your Devices</h1>
                          <form method="post" enctype="multipart/form-data" class="form-horizontal form_1">
      <div class="col-sm-3"></div>
      <div class="form-group">
        <label for="Device Name" class="col-sm-2 " control-label> Device Name</label>
        <div class="col-sm-3">
          <input type="txt" name="txtNm" class="form-control" required="">
        </div>
      </div>
      <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="manufacture" class="col-sm-2 " control-label >Manufacture</label>
                <div class="col-sm-3">
                  <select name="manufacture" required="" class="form-control">
                  <option value="Acer">
                                                    Acer
                                                </option><option value=" Ainol&nbsp;Novo">
                                                    Ainol&nbsp;Novo
                                                </option><option value="Aldi">
                                                    Aldi
                                                </option><option value="Alldocube">
                                                    Alldocube
                                                </option><option value="Allwinner">
                                                    Allwinner
                                                </option><option value="Allwinner">
                                                    Allwinner
                                                </option><option value="Allwinner">
                                                    Allwinner
                                                </option><option value="Amazon">
                                                    Amazon
                                                </option><option value="Apple">
                                                    Apple
                                                </option><option value="Archos">
                                                    Archos
                                                </option><option value="Argos">
                                                    Argos
                                                </option><option value="">
                                                    Asus
                                                </option><option value="Barnes &amp; Noble">
                                                    Barnes &amp; Noble
                                                </option><option value="Blackberry">
                                                    Blackberry
                                                </option><option value="Bq">
                                                    Bq
                                                </option><option value="Bravis">
                                                    Bravis
                                                </option><option value="Bush">
                                                    Bush
                                                </option><option value="Cherry Mobile">
                                                    Cherry Mobile
                                                </option><option value="Chuwi">
                                                    Chuwi
                                                </option><option value="Colorovo">
                                                    Colorovo
                                                </option><option value="CSC">
                                                    CSC
                                                </option><option value="Cube">
                                                    Cube
                                                </option><option value="Datawind">
                                                    Datawind
                                                </option><option value="Dell">
                                                    Dell
                                                </option><option value="Digiflip">
                                                    Digiflip
                                                </option><option value="Everis">
                                                    Everis
                                                </option><option value="Evolio">
                                                    Evolio
                                                </option><option value="General Mobile">
                                                    General Mobile
                                                </option><option value="GoClever">
                                                    GoClever
                                                </option><option value="Google">
                                                    Google
                                                </option><option value="HCL">
                                                    HCL
                                                </option><option value="HP">
                                                    HP
                                                </option><option value="HTC">
                                                    HTC
                                                </option><option value="Huawei">
                                                    Huawei
                                                </option><option value="iBall">
                                                    iBall
                                                </option><option value="Imuz">
                                                    Imuz
                                                </option><option value="iRulu">
                                                    iRulu
                                                </option><option value="Karbonn">
                                                    Karbonn
                                                </option><option value="Laser">
                                                    Laser
                                                </option><option value="Lenovo">
                                                    Lenovo
                                                </option><option value="LG">
                                                    LG
                                                </option><option value="Micromax">
                                                    Micromax
                                                </option><option value="Microsoft">
                                                    Microsoft
                                                </option><option value="Motorola">
                                                    Motorola
                                                </option><option value="Nokia">
                                                    Nokia
                                                </option><option value="Notion Ink">
                                                    Notion Ink
                                                </option><option value="NVIDIA">
                                                    NVIDIA
                                                </option><option value="Odys">
                                                    Odys
                                                </option><option value="Oysters">
                                                    Oysters
                                                </option><option value="PiPO">
                                                    PiPO
                                                </option><option value="PocketBook">
                                                    PocketBook
                                                </option><option value="Prestigio">
                                                    Prestigio
                                                </option><option value="Qbex">
                                                    Qbex
                                                </option><option value="Quanta">
                                                    Quanta
                                                </option><option value="Ramos">
                                                    Ramos
                                                </option><option value="RCA">
                                                    RCA
                                                </option><option value="Samsung">
                                                    Samsung
                                                </option><option value="Sary">
                                                    Sary
                                                </option><option value="Sony">
                                                    Sony
                                                </option><option value="Stream System">
                                                    Stream System
                                                </option><option value="Teclast">
                                                    Teclast
                                                </option><option value="Tecno Mobile">
                                                    Tecno Mobile
                                                </option><option value="Tesco">
                                                    Tesco
                                                </option><option value="Toshiba">
                                                    Toshiba
                                                </option><option value="Ulefone">
                                                    Ulefone
                                                </option><option value="Umax">
                                                    Umax
                                                </option><option value="Velocity Micro">
                                                    Velocity Micro
                                                </option><option value="Verizon">
                                                    Verizon
                                                </option><option value="Versus">
                                                    Versus
                                                </option><option value="ViewSonic">
                                                    ViewSonic
                                                </option><option value="Vizio">
                                                    Vizio
                                                </option><option value="Vodafone">
                                                    Vodafone
                                                </option><option value="Vonino">
                                                    Vonino
                                                </option><option value="Wexler">
                                                    Wexler
                                                </option><option value="Wolder">
                                                    Wolder
                                                </option><option value="WonderMedia">
                                                    WonderMedia
                                                </option><option value="Xiaomi">
                                                    Xiaomi
                                                </option><option value="Xoro">
                                                    Xoro
                                                </option><option value="Zatec">
                                                    Zatec
                                                </option></select></div></div>
  <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="model" class="col-sm-2 " control-label >Model</label>
                <div class="col-sm-3">
                  <select name="txtmodel" required="" class="form-control">
                                                <option value="Iconia B1-710">
                                                    Iconia B1-710
                                                </option><option value="Iconia One 10">
                                                    Iconia One 10
                                                </option><option value="Iconia One 10 B3-A32">
                                                    Iconia One 10 B3-A32
                                                </option><option value="Iconia One 7 B1-730">
                                                    Iconia One 7 B1-730
                                                </option><option value="Iconia One 7 B1-770">
                                                    Iconia One 7 B1-770
                                                </option><option value=" Iconia One 8">
                                                    Iconia One 8

                                                </option><option value="Iconia One 8 B1-820">
                                                    Iconia One 8 B1-820
                                                </option><option value="Iconia Tab 10 A3-A30">
                                                    Iconia Tab 10 A3-A30
                                                </option><option value="Iconia Tab 8 W">
                                                    Iconia Tab 8 W
                                                </option><option value="Iconia Tab A1-810">
                                                    Iconia Tab A1-810
                                                </option><option value="Iconia Tab A1-840">
                                                    Iconia Tab A1-840
                                                </option><option value="Iconia Tab A100">
                                                    Iconia Tab A100
                                                </option><option value="Iconia Tab A200">
                                                    Iconia Tab A200
                                                </option><option value="Iconia Tab A3-A30">
                                                    Iconia Tab A3-A30
                                                </option><option value="Iconia Tab A500">
                                                    Iconia Tab A500
                                                </option><option value="Iconia Tab A501">
                                                    Iconia Tab A501
                                                </option><option value="Iconia Tab A510">
                                                    Iconia Tab A510
                                                </option><option value="Iconia Tab A511">
                                                    Iconia Tab A511
                                                </option><option value=" Iconia Tab A700">
                                                    Iconia Tab A700
                                                </option><option value="Iconia Tab A701">
                                                    Iconia Tab A701
                                                </option><option value="Iconia Tab B1-A71">
                                                    Iconia Tab B1-A71
                                                </option><option value="Iconia Tab W500">
                                                    Iconia Tab W500
                                                </option><option value="Iconia W700">
                                                    Iconia W700
                                                </option><option value="Predator 8">
                                                    Predator 8
                                                </option></select></div></div>
                                                <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="os" class="col-sm-2 " control-label >OS</label>
                <div class="col-sm-3">
                  <select name="os" required="" class="form-control"><option >
                                                    None
                                                </option><option value=" Android 9.0">
                                                    Android 9.0
                                                </option><option value="Android 8.1.0">
                                                    Android 8.1.0
                                                </option><option value="Android 8.0.0">
                                                    Android 8.0.0
                                                </option><option value=" Android 8.0.0 DP3">
                                                    Android 8.0.0 DP3
                                                </option><option value="Android 7.1.2">
                                                    Android 7.1.2
                                                </option><option value="Android 7.1.1">
                                                    Android 7.1.1
                                                </option><option value="Android 7.1">
                                                    Android 7.1
                                                </option><option value="Android 7.0">
                                                    Android 7.0
                                                </option><option value="Android 6.0.2">
                                                    Android 6.0.2
                                                </option><option value="Android 6.0.1">
                                                    Android 6.0.1
                                                </option><option value="Android 6.0.0">
                                                    Android 6.0.0
                                                </option><option value="Android 5.1.1">
                                                    Android 5.1.1
                                                </option><option value=" Android 5.1">
                                                    Android 5.1
                                                </option><option value="Android 5.0.2">
                                                    Android 5.0.2
                                                </option><option value="Android 5.0.1">
                                                    Android 5.0.1
                                                </option><option value="Android 5.0">
                                                    Android 5.0
                                                </option><option value="Android 4.4.4">
                                                    Android 4.4.4
                                                </option><option value="Android 4.4.3">
                                                    Android 4.4.3
                                                </option><option value="Android 4.4.2">
                                                    Android 4.4.2
                                                </option><option value="Android 4.4">
                                                    Android 4.4
                                                </option><option value="Android 4.3">
                                                    Android 4.3
                                                </option><option value="Android 4.2.2">
                                                    Android 4.2.2
                                                </option><option value="Android 4.2.1">
                                                    Android 4.2.1
                                                </option><option value="Android 4.2">
                                                    Android 4.2
                                                </option><option value="Android 4.1.2">
                                                    Android 4.1.2
                                                </option><option value="Android 4.1.1">
                                                    Android 4.1.1
                                                </option><option value="Android 4.1">
                                                    Android 4.1
                                                </option><option value="Android 4.0.4">
                                                    Android 4.0.4
                                                </option><option value="Android 4.0.3">
                                                    Android 4.0.3
                                                </option><option value="Android 4.0.2">
                                                    Android 4.0.2
                                                </option><option value="Android 4.0.1">
                                                    Android 4.0.1
                                                </option><option value="Android 4.0.0">
                                                    Android 4.0.0
                                                </option><option value="Android 3.2">
                                                    Android 3.2
                                                </option><option value="Android 3.1">
                                                    Android 3.1
                                                </option><option value="Android 3">
                                                    Android 3
                                                </option><option value="Android 2.5">
                                                    Android 2.5
                                                </option><option value="Android 2.4">
                                                    Android 2.4
                                                </option><option value="Android 2.3.7">
                                                    Android 2.3.7
                                                </option><option value="Android 2.3.6">
                                                    Android 2.3.6
                                                </option><option value="Android 2.3.5">
                                                    Android 2.3.5
                                                </option><option value="Android 2.3.4">
                                                    Android 2.3.4
                                                </option><option value="Android 2.3.3">
                                                    Android 2.3.3
                                                </option><option value="Android 2.3">
                                                    Android 2.3
                                                </option><option value="Android 2.2.3">
                                                    Android 2.2.3
                                                </option><option value="Android 2.2.2">
                                                    Android 2.2.2
                                                </option><option value="Android 2.2.1">
                                                    Android 2.2.1
                                                </option><option value=" Android 2.2">
                                                    Android 2.2
                                                </option><option value=" Android 2.1">
                                                    Android 2.1
                                                </option><option value="Android 2.0">
                                                    Android 2.0
                                                </option><option value="Android 1.6">
                                                    Android 1.6
                                                </option><option value="Android 1.5">
                                                    Android 1.5
                                                </option></select></div></div>
                                                <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="browser" class="col-sm-2 " control-label >Browser</label>
                <div class="col-sm-3"><select name="browser" required="" class="form-control"><option value=" Opera Mini">
                                                Opera Mini
                                            </option><option value="Chrome (Android)">
                                                Chrome (Android)
                                            </option><option value="Opera Mobile (Android)">
                                                Opera Mobile (Android)
                                            </option><option value="Firefox (Android)">
                                                Firefox (Android)
                                            </option><option value="Skyfire (Android)">
                                                Skyfire (Android)
                                            </option><option value="Android Browser">
                                                Android Browser
                                            </option><option value="Dolphin Browser (Android)">
                                                Dolphin Browser (Android)
                                            </option><option value="Dolphin Browser HD">
                                                Dolphin Browser HD
                                            </option><option value="Maxthon (Android)">
                                                Maxthon (Android)
                                            </option><option value="Silk browser">
                                                Silk browser
                                            </option><option value="UC Browser">
                                                UC Browser
                                            </option><option value="QQ Browser">
                                                QQ Browser
                                            </option><option value="Microsoft Edge (Mobile)">
                                                Microsoft Edge (Mobile)
                                            </option></select></div></div>
                                            <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="version" class="col-sm-2 " control-label >Version</label>
                <div class="col-sm-3">
                  <select name="version" required="" class="form-control"><option value="7">7</option><option value="6">6</option><option value="7.5">7.5</option><option value="8">8</option><option value="9">9</option><option value="7.6.4">7.6.4</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="28">28</option><option value="29">29</option><option value="16">16</option><option value="32">32</option><option value="21">21</option><option value="33">33</option><option value="37">37</option><option value="38">38</option><option value="39">39</option></select></div></div>
                                                <div class="col-sm-3"></div>
            <div class="form-group">
            
                <div class="col-sm-3">
                <tr>
              <td><input class="btn btn-primary" type="Submit" name="btnSubmit" value="Submit"></td>
              </tr>
                                              </form>
                                            </div>
                                          </div>

       <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '2e828068-c53a-498d-9a6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>
