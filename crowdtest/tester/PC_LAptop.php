<?php
include ('../connection.php');
  if(empty($_SESSION) && $_SESSION['user_type'] != 'TESTER'){
    header('Location: index.php');
  }
    if(isset($_POST["btnSubmit"]))
    {
      $Name                   =$_POST["txtNm"];
      $Platform               =$_POST["platformpc"];
      $OSPC                   =$_POST["ospc"];
      $Browser                =$_POST["browser"];   
      $Version                =$_POST["version"];  
      $Tester                =$_SESSION["id"];  

      $q=mysqli_query($conn,"INSERT INTO pc_laptop(device_name,platform,os,browser,version,tester_id)VALUES('$Name','$Platform','$OSPC','$Browser','$Version','$Tester')") or die(mysqli_error($conn));
      

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
                        <div class="container" style="text-align: center;">
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
            
              <label for="platform" class="col-sm-2 " control-label >Platform(PC/Laptop)</label>
                                                  <div class="col-sm-3">

                  <select name="platformpc" class="form-control" required="">

                    <option value="None">None</option>
                    <option value="Windows">Windows</a></option>
                    <option value="Linux">Linux</option>
                    <option value="MacOS">MacOS</option>
                    <option value="Chrome OS">Chrome OS</option>
                    <option value="Cloud ready">Cloud ready</option>
                  </select>
</div>
</div>
                <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="platform" class="col-sm-2 " control-label >OS(PC/Laptop)</label>
                                    <div class="col-sm-3">

                  <select name="ospc" class="form-control" required="">

                    <option value="None">None</option>
                    <option value="Windows XP">Windows XP</a></option>
                    <option value="Window Vista">Window Vista</option>
                    <option value="Window 7">Window 7</option>
                    <option value="Window 8">Window 8</option>
                    <option value="Window 8.1">Window 8.1</option>
                    <option value="Window 10">Window 10</option>
                  </select>
</div>
</div>
<div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="platform" class="col-sm-2 " control-label >Browser</label>
                                    <div class="col-sm-3">
                                      <select name="browser" required="" class="form-control"><option value="Chrome (Win)">
                                                Chrome (Win)
                                            </option><option value="Internet Explorer">
                                                Internet Explorer
                                            </option><option value=" Firefox (Win)">
                                                Firefox (Win)
                                            </option><option value="Safari (Win)">
                                                Safari (Win)
                                            </option><option value="Opera (Win)">
                                                Opera (Win)
                                            </option><option value=" Maxthon (Windows)">
                                                Maxthon (Windows)
                                            </option><option value="Microsoft Edge">
                                                Microsoft Edge
                                            </option><option value="Sogou Explorer">
                                                Sogou Explorer
                                            </option><option value="Qihoo 360">
                                                Qihoo 360
                                            </option><option value="Baidu Browser">
                                                Baidu Browser
                                            </option><option value="Yandex Browser">
                                                Yandex Browser
                                            </option></select>
                                          </div></div>
                                            <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="version" class="col-sm-2 " control-label >Version</label>
                                    <div class="col-sm-3">
                                      <select name="version" required="" class="form-control"><option value="18">18</option><option value="17">17</option><option value="16">16</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option></select></div></div>
                                    <div class="form-group">
            
										<div class="col-sm-3"></div>
                <tr>
              <td><input class="btn btn-primary" aling="center" type="Submit" name="btnSubmit" value="Submit"></td>
              </tr>
                                              </form>
                                            </div>
                                          </div>
       <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '2e828068-c53a-498d-9a6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>

   
