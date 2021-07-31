<?php
include ('../connection.php');
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
      $Tester                =$_SESSION["id"];  

      $q=mysqli_query($conn,"INSERT INTO mobile(device_name,manufacture,model,os,browser,version,tester_id)VALUES('$Name','$Manufacture','$Model','$OSPC','Browser','$Version','$Tester')") or die(mysqli_error($conn));
      

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
      <div class="carousel-inner">
                        <div class="container style="text-align: center;"">
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
            
              <label for="manufacture" class="col-sm-2 " control-label >Manufacture(Mobile)</label>
                <div class="col-sm-3">

                  <select name="manufacture" class="form-control">
                    <option value="None">None</option><option value="(Depreciated)">
                                                    (Depreciated)
                                                </option><option value="360">
                                                    360
                                                </option><option value="Acer">
                                                    Acer
                                                </option><option value=Advan"">
                                                    Advan
                                                </option><option value="AGM">
                                                    AGM
                                                </option><option value="Alcatel">
                                                    Alcatel
                                                </option><option value="Allview">
                                                    Allview
                                                </option><option value="Amazon">
                                                    Amazon
                                                </option><option value="Apple">
                                                    Apple
                                                </option><option value="Archos">
                                                    Archos
                                                </option><option value="Asus">
                                                    Asus
                                                </option><option value="Asus">
                                                    Asus
                                                </option><option value="BBK">
                                                    BBK
                                                </option><option value="BenQ">
                                                    BenQ
                                                </option><option value="Blackberry">
                                                    Blackberry
                                                </option><option value="Blackview">
                                                    Blackview
                                                </option><option value="BLU">
                                                    BLU
                                                </option><option value="Bq">
                                                    Bq
                                                </option><option value="Bush">
                                                    Bush
                                                </option><option value="Caterpillar">
                                                    Caterpillar
                                                </option><option value="Celkon">
                                                    Celkon
                                                </option><option value="Cherry Mobile">
                                                    Cherry Mobile
                                                </option><option value="China Mobile">
                                                    China Mobile
                                                </option><option value="Commodore">
                                                    Commodore
                                                </option><option value="Condor">
                                                    Condor
                                                </option><option value="Coolpad">
                                                    Coolpad
                                                </option><option value="Cubot">
                                                    Cubot
                                                </option><option value="Cubot">
                                                    Cubot
                                                </option><option value="Dell">
                                                    Dell
                                                </option><option value="Doogee">
                                                    Doogee
                                                </option><option value="Elephone">
                                                    Elephone
                                                </option><option value="Energizer">
                                                    Energizer
                                                </option><option value="Essential">
                                                    Essential
                                                </option><option value="Fairphone">
                                                    Fairphone
                                                </option><option value="Fero">
                                                    Fero
                                                </option><option value="Fly">
                                                    Fly
                                                </option><option value="Freelander">
                                                    Freelander
                                                </option><option value="Freetel">
                                                    Freetel
                                                </option><option value="Fujitsu">
                                                    Fujitsu
                                                </option><option value="General Mobile">
                                                    General Mobile
                                                </option><option value="Geotel">
                                                    Geotel
                                                </option><option value="Gigabyte">
                                                    Gigabyte
                                                </option><option value="Gigaset">
                                                    Gigaset
                                                </option><option value="Gionee">
                                                    Gionee
                                                </option><option value="GoClever">
                                                    GoClever
                                                </option><option value="Google">
                                                    Google
                                                </option><option value="Gplus">
                                                    Gplus
                                                </option><option value="Helio">
                                                    Helio
                                                </option><option value="Hisense">
                                                    Hisense
                                                </option><option value="Homtom">
                                                    Homtom
                                                </option><option value="HP">
                                                    HP
                                                </option><option value="HTC">
                                                    HTC
                                                </option><option value="Huawei">
                                                    Huawei
                                                </option><option value="i-mobile">
                                                    i-mobile
                                                </option><option value="iBall">
                                                    iBall
                                                </option><option value="iMI">
                                                    iMI
                                                </option><option value="iNew">
                                                    iNew
                                                </option><option value="Infinix">
                                                    Infinix
                                                </option><option value="Infinix">
                                                    Infinix
                                                </option><option value="InFocus">
                                                    InFocus
                                                </option><option value="InnJoo">
                                                    InnJoo
                                                </option><option value="INQ">
                                                    INQ
                                                </option><option value="Intex">
                                                    Intex
                                                </option><option value="iRulu">
                                                    iRulu
                                                </option><option value="itel">
                                                    itel
                                                </option><option value="JiaYu">
                                                    JiaYu
                                                </option><option value="Jinga">
                                                    Jinga
                                                </option><option value="Karbonn">
                                                    Karbonn
                                                </option><option value="Kyocera">
                                                    Kyocera
                                                </option><option value="Land Rover">
                                                    Land Rover
                                                </option><option value="Lava">
                                                    Lava
                                                </option><option value="Leagoo">
                                                    Leagoo
                                                </option><option value="LeEco">
                                                    LeEco
                                                </option><option value="Leeco">
                                                    Leeco
                                                </option><option value="Lenovo">
                                                    Lenovo
                                                </option><option value="LG">
                                                    LG
                                                </option><option value="Logic">
                                                    Logic
                                                </option><option value="LYF">
                                                    LYF
                                                </option><option value="Marshall">
                                                    Marshall
                                                </option><option value="Meizu">
                                                    Meizu
                                                </option><option value="Micromax">
                                                    Micromax
                                                </option><option value="Micromax">
                                                    Micromax
                                                </option><option value="Microsoft">
                                                    Microsoft
                                                </option><option value="Motorola">
                                                    Motorola
                                                </option><option value="MyPhone">
                                                    MyPhone
                                                </option><option value="Newman">
                                                    Newman
                                                </option><option value="Nextbit">
                                                    Nextbit
                                                </option><option value="Nokia">
                                                    Nokia
                                                </option><option value="Nomu">
                                                    Nomu
                                                </option><option value="Nubia">
                                                    Nubia
                                                </option><option value="NUU">
                                                    NUU
                                                </option><option value="OneFive">
                                                    OneFive
                                                </option><option value="OnePlus">
                                                    OnePlus
                                                </option><option value="Oppo">
                                                    Oppo
                                                </option><option value="Oukitel">
                                                    Oukitel
                                                </option><option value="Oysters">
                                                    Oysters
                                                </option><option value="Panasonic">
                                                    Panasonic
                                                </option><option value="Pantech">
                                                    Pantech
                                                </option><option value="PCD">
                                                    PCD
                                                </option><option value="Prestigio">
                                                    Prestigio
                                                </option><option value="Q-Mobile">
                                                    Q-Mobile
                                                </option><option value="Qbex">
                                                    Qbex
                                                </option><option value="Qiku">
                                                    Qiku
                                                </option><option value="Ramos">
                                                    Ramos
                                                </option><option value="Razer">
                                                    Razer
                                                </option><option value="Samsung">
                                                    Samsung
                                                </option><option value="Sanyo">
                                                    Sanyo
                                                </option><option value="Sharp">
                                                    Sharp
                                                </option><option value="Siswoo">
                                                    Siswoo
                                                </option><option value="Sony">
                                                    Sony
                                                </option><option value="Spice">
                                                    Spice
                                                </option><option value="Stream System">
                                                    Stream System
                                                </option><option value="Symphony">
                                                    Symphony
                                                </option><option value="T-Mobile">
                                                    T-Mobile
                                                </option><option value="Tecno Mobile">
                                                    Tecno Mobile
                                                </option><option value="Telefunken">
                                                    Telefunken
                                                </option><option value="THL">
                                                    THL
                                                </option><option value="Toshiba">
                                                    Toshiba
                                                </option><option value="Turing">
                                                    Turing
                                                </option><option value="Ulefone">
                                                    Ulefone
                                                </option><option value="UMI">
                                                    UMI
                                                </option><option value="Vernee">
                                                    Vernee
                                                </option><option value="Videocon">
                                                    Videocon
                                                </option><option value="Vivo">
                                                    Vivo
                                                </option><option value="Vivo">
                                                    Vivo
                                                </option><option value="Vizio">
                                                    Vizio
                                                </option><option value="VKWorld">
                                                    VKWorld
                                                </option><option value="Vodafone">
                                                    Vodafone
                                                </option><option value="Wiko">
                                                    Wiko
                                                </option><option value="Wileyfox">
                                                    Wileyfox
                                                </option><option value="Xiaomi">
                                                    Xiaomi
                                                </option><option value="Xolo">
                                                    Xolo
                                                </option><option value="ZTE">
                                                    ZTE
                                                </option><option value="ZUK">
                                                    ZUK
                                                </option></select></div></div>

<div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="model" class="col-sm-2 " control-label >Model</label>
                <div class="col-sm-3">
                  <select name="txtmodel" class="form-control">
                    <option value="None">None</option><option value="Aquaris 5 HD">
                                                    Aquaris 5 HD
                                                </option><option value="Aquaris U Plus">
                                                    Aquaris U Plus
                                                </option><option value=" Aquarius X5">
                                                    Aquarius X5
                                                </option><option value="Strike">
                                                    Strike
                                                </option></select></div></div>
               <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="model" class="col-sm-2 " control-label >OS</label>
                <div class="col-sm-3">
                  <select name="os" class="form-control">
                  <option value="None">None</option><option value="Android 9.0">
                                                    Android 9.0
                                                </option><option value="Android 8.1.0">
                                                    Android 8.1.0
                                                </option><option value="Android 8.0.0">
                                                    Android 8.0.0
                                                </option><option value="Android 8.0.0 DP3">
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
                                                </option><option value=" Android 6.0.0">
                                                    Android 6.0.0
                                                </option><option value="Android 5.1.1">
                                                    Android 5.1.1
                                                </option><option value="Android 5.1">
                                                    Android 5.1
                                                </option><option value="Android 5.0.2">
                                                    Android 5.0.2
                                                </option><option value="Android 5.0.1">
                                                    Android 5.0.1
                                                </option><option value="Android 5.0">
                                                    Android 5.0
                                                </option><option value=" Android 4.4.4">
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
                                                </option><option value=" Android 4.0.4">
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
                                                </option><option value=" Android 3.1">
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
                                                </option><option value=" Android 2.3.4">
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
                                                </option><option value="Android 2.1">
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
                <div class="col-sm-3"><select name="browser" class="form-control">
					<option value="none">
                                               none
                                            </option><option value="Opera Mini">
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
            
              <label for="version" class="col-sm-2 " control-label >version</label>
                <div class="col-sm-3">
                  <select name="version" class="form-control"><option value="9">7</option><option value="10">6</option><option value="">7.5</option><option value="">8</option><option value="">9</option><option value="">7.6.4</option><option value="">10</option><option value="">11</option><option value="">12</option><option value="">13</option><option value="">14</option><option value="">28</option><option value="">29</option><option value="">16</option><option value="">32</option><option value="">21</option><option value="">33</option><option value="">37</option><option value="">v38</option><option value="">39</option></select></div></div>
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

