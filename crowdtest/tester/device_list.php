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
        <label for="Device Name" class="col-sm-2 " control-label> Type</label>
        <div class="col-sm-3">
            <div><label><input type="radio" name="type" value="1">
                                                PC / Laptop
                                            </label></div>
            <div><label><input type="radio" name="type" value="2">
                                                Mobile
                                            </label></div>
                                            <div><label><input type="radio" name="type" value="3">
                                                Tablet
                                            </label></div>
                                          </div>
                                        </div>

            <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="platform" class="col-sm-2 " control-label >Platform(PC/Laptop)</label>
                                                  <div class="col-sm-3">

                  <select name="platformpc" class="form-control" required="">

                    <option value="">None</option>
                    <option value="">Windows</a></option>
                    <option value="">Linux</option>
                    <option value="">MacOS</option>
                    <option value="">Chrome OS</option>
                    <option value="">Cloud ready</option>
                  </select>
</div>
</div>
                <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="platform" class="col-sm-2 " control-label >OS(PC/Laptop)</label>
                                    <div class="col-sm-3">

                  <select name="ospc" class="form-control" >

                    <option value="">None</option>
                    <option value="">Windows XP</a></option>
                    <option value="">Window Vista</option>
                    <option value="">Window 7</option>
                    <option value="">Window 8</option>
                    <option value="">Window 8.1</option>
                    <option value="">Window 10</option>
                  </select>
</div>
</div>
<div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="manufacture" class="col-sm-2 " control-label >Manufacture(Mobile)</label>
                <div class="col-sm-3">

                  <select name="manufacturemobile" class="form-control">
                    <option value="546">None</option><option value="184">
                                                    (Depreciated)
                                                </option><option value="172">
                                                    360
                                                </option><option value="10">
                                                    Acer
                                                </option><option value="201">
                                                    Advan
                                                </option><option value="174">
                                                    AGM
                                                </option><option value="43">
                                                    Alcatel
                                                </option><option value="177">
                                                    Allview
                                                </option><option value="11">
                                                    Amazon
                                                </option><option value="1">
                                                    Apple
                                                </option><option value="32">
                                                    Archos
                                                </option><option value="33">
                                                    Asus
                                                </option><option value="33">
                                                    Asus
                                                </option><option value="115">
                                                    BBK
                                                </option><option value="12">
                                                    BenQ
                                                </option><option value="6">
                                                    Blackberry
                                                </option><option value="154">
                                                    Blackview
                                                </option><option value="83">
                                                    BLU
                                                </option><option value="143">
                                                    Bq
                                                </option><option value="158">
                                                    Bush
                                                </option><option value="140">
                                                    Caterpillar
                                                </option><option value="180">
                                                    Celkon
                                                </option><option value="139">
                                                    Cherry Mobile
                                                </option><option value="116">
                                                    China Mobile
                                                </option><option value="118">
                                                    Commodore
                                                </option><option value="173">
                                                    Condor
                                                </option><option value="117">
                                                    Coolpad
                                                </option><option value="52">
                                                    Cubot
                                                </option><option value="198">
                                                    Cubot
                                                </option><option value="13">
                                                    Dell
                                                </option><option value="127">
                                                    Doogee
                                                </option><option value="149">
                                                    Elephone
                                                </option><option value="183">
                                                    Energizer
                                                </option><option value="164">
                                                    Essential
                                                </option><option value="120">
                                                    Fairphone
                                                </option><option value="205">
                                                    Fero
                                                </option><option value="72">
                                                    Fly
                                                </option><option value="48">
                                                    Freelander
                                                </option><option value="145">
                                                    Freetel
                                                </option><option value="156">
                                                    Fujitsu
                                                </option><option value="75">
                                                    General Mobile
                                                </option><option value="187">
                                                    Geotel
                                                </option><option value="81">
                                                    Gigabyte
                                                </option><option value="182">
                                                    Gigaset
                                                </option><option value="71">
                                                    Gionee
                                                </option><option value="85">
                                                    GoClever
                                                </option><option value="91">
                                                    Google
                                                </option><option value="119">
                                                    Gplus
                                                </option><option value="166">
                                                    Helio
                                                </option><option value="78">
                                                    Hisense
                                                </option><option value="204">
                                                    Homtom
                                                </option><option value="14">
                                                    HP
                                                </option><option value="4">
                                                    HTC
                                                </option><option value="15">
                                                    Huawei
                                                </option><option value="137">
                                                    i-mobile
                                                </option><option value="74">
                                                    iBall
                                                </option><option value="138">
                                                    iMI
                                                </option><option value="79">
                                                    iNew
                                                </option><option value="194">
                                                    Infinix
                                                </option><option value="141">
                                                    Infinix
                                                </option><option value="125">
                                                    InFocus
                                                </option><option value="121">
                                                    InnJoo
                                                </option><option value="16">
                                                    INQ
                                                </option><option value="80">
                                                    Intex
                                                </option><option value="68">
                                                    iRulu
                                                </option><option value="188">
                                                    itel
                                                </option><option value="84">
                                                    JiaYu
                                                </option><option value="136">
                                                    Jinga
                                                </option><option value="46">
                                                    Karbonn
                                                </option><option value="82">
                                                    Kyocera
                                                </option><option value="181">
                                                    Land Rover
                                                </option><option value="54">
                                                    Lava
                                                </option><option value="163">
                                                    Leagoo
                                                </option><option value="153">
                                                    LeEco
                                                </option><option value="206">
                                                    Leeco
                                                </option><option value="34">
                                                    Lenovo
                                                </option><option value="8">
                                                    LG
                                                </option><option value="192">
                                                    Logic
                                                </option><option value="168">
                                                    LYF
                                                </option><option value="123">
                                                    Marshall
                                                </option><option value="17">
                                                    Meizu
                                                </option><option value="45">
                                                    Micromax
                                                </option><option value="193">
                                                    Micromax
                                                </option><option value="38">
                                                    Microsoft
                                                </option><option value="7">
                                                    Motorola
                                                </option><option value="167">
                                                    MyPhone
                                                </option><option value="47">
                                                    Newman
                                                </option><option value="159">
                                                    Nextbit
                                                </option><option value="2">
                                                    Nokia
                                                </option><option value="178">
                                                    Nomu
                                                </option><option value="191">
                                                    Nubia
                                                </option><option value="135">
                                                    NUU
                                                </option><option value="134">
                                                    OneFive
                                                </option><option value="76">
                                                    OnePlus
                                                </option><option value="73">
                                                    Oppo
                                                </option><option value="200">
                                                    Oppo
                                                </option><option value="195">
                                                    Oppo
                                                </option><option value="171">
                                                    Oukitel
                                                </option><option value="165">
                                                    Oysters
                                                </option><option value="9">
                                                    Panasonic
                                                </option><option value="21">
                                                    Pantech
                                                </option><option value="19">
                                                    PCD
                                                </option><option value="51">
                                                    Prestigio
                                                </option><option value="128">
                                                    Q-Mobile
                                                </option><option value="185">
                                                    Qbex
                                                </option><option value="197">
                                                    Qiku
                                                </option><option value="44">
                                                    Ramos
                                                </option><option value="102">
                                                    Razer
                                                </option><option value="3">
                                                    Samsung
                                                </option><option value="23">
                                                    Sanyo
                                                </option><option value="24">
                                                    Sharp
                                                </option><option value="155">
                                                    Siswoo
                                                </option><option value="5">
                                                    Sony
                                                </option><option value="144">
                                                    Spice
                                                </option><option value="161">
                                                    Stream System
                                                </option><option value="170">
                                                    Symphony
                                                </option><option value="25">
                                                    T-Mobile
                                                </option><option value="133">
                                                    Tecno Mobile
                                                </option><option value="162">
                                                    Telefunken
                                                </option><option value="69">
                                                    THL
                                                </option><option value="22">
                                                    Toshiba
                                                </option><option value="122">
                                                    Turing
                                                </option><option value="189">
                                                    Ulefone
                                                </option><option value="124">
                                                    UMI
                                                </option><option value="152">
                                                    Vernee
                                                </option><option value="27">
                                                    Videocon
                                                </option><option value="196">
                                                    Vivo
                                                </option><option value="114">
                                                    Vivo
                                                </option><option value="28">
                                                    Vizio
                                                </option><option value="132">
                                                    VKWorld
                                                </option><option value="29">
                                                    Vodafone
                                                </option><option value="131">
                                                    Wiko
                                                </option><option value="169">
                                                    Wileyfox
                                                </option><option value="30">
                                                    Xiaomi
                                                </option><option value="67">
                                                    Xolo
                                                </option><option value="31">
                                                    ZTE
                                                </option><option value="130">
                                                    ZUK
                                                </option></select></div></div>

<div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="model" class="col-sm-2 " control-label >Model(Mobile)</label>
                <div class="col-sm-3">
                  <select name="modelmobile" class="form-control">
                    <option value="546">None</option><option value="2313">
                                                    Aquaris 5 HD
                                                </option><option value="2725">
                                                    Aquaris U Plus
                                                </option><option value="2569">
                                                    Aquarius X5
                                                </option><option value="3155">
                                                    Strike
                                                </option></select></div></div>
               <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="model" class="col-sm-2 " control-label >OS(Mobile)</label>
                <div class="col-sm-3"><select name="osmobile" class="form-control">
                  <option value="546">None</option><option value="546">
                                                    Android 9.0
                                                </option><option value="519">
                                                    Android 8.1.0
                                                </option><option value="490">
                                                    Android 8.0.0
                                                </option><option value="482">
                                                    Android 8.0.0 DP3
                                                </option><option value="476">
                                                    Android 7.1.2
                                                </option><option value="455">
                                                    Android 7.1.1
                                                </option><option value="454">
                                                    Android 7.1
                                                </option><option value="432">
                                                    Android 7.0
                                                </option><option value="431">
                                                    Android 6.0.2
                                                </option><option value="417">
                                                    Android 6.0.1
                                                </option><option value="396">
                                                    Android 6.0.0
                                                </option><option value="345">
                                                    Android 5.1.1
                                                </option><option value="340">
                                                    Android 5.1
                                                </option><option value="338">
                                                    Android 5.0.2
                                                </option><option value="337">
                                                    Android 5.0.1
                                                </option><option value="322">
                                                    Android 5.0
                                                </option><option value="312">
                                                    Android 4.4.4
                                                </option><option value="311">
                                                    Android 4.4.3
                                                </option><option value="307">
                                                    Android 4.4.2
                                                </option><option value="294">
                                                    Android 4.4
                                                </option><option value="282">
                                                    Android 4.3
                                                </option><option value="267">
                                                    Android 4.2.2
                                                </option><option value="251">
                                                    Android 4.2.1
                                                </option><option value="125">
                                                    Android 4.2
                                                </option><option value="269">
                                                    Android 4.1.2
                                                </option><option value="80">
                                                    Android 4.1.1
                                                </option><option value="79">
                                                    Android 4.1
                                                </option><option value="32">
                                                    Android 4.0.4
                                                </option><option value="31">
                                                    Android 4.0.3
                                                </option><option value="87">
                                                    Android 4.0.2
                                                </option><option value="86">
                                                    Android 4.0.1
                                                </option><option value="30">
                                                    Android 4.0.0
                                                </option><option value="29">
                                                    Android 3.2
                                                </option><option value="85">
                                                    Android 3.1
                                                </option><option value="84">
                                                    Android 3
                                                </option><option value="83">
                                                    Android 2.5
                                                </option><option value="82">
                                                    Android 2.4
                                                </option><option value="28">
                                                    Android 2.3.7
                                                </option><option value="27">
                                                    Android 2.3.6
                                                </option><option value="26">
                                                    Android 2.3.5
                                                </option><option value="25">
                                                    Android 2.3.4
                                                </option><option value="24">
                                                    Android 2.3.3
                                                </option><option value="10">
                                                    Android 2.3
                                                </option><option value="275">
                                                    Android 2.2.3
                                                </option><option value="274">
                                                    Android 2.2.2
                                                </option><option value="273">
                                                    Android 2.2.1
                                                </option><option value="23">
                                                    Android 2.2
                                                </option><option value="81">
                                                    Android 2.1
                                                </option><option value="354">
                                                    Android 2.0
                                                </option><option value="78">
                                                    Android 1.6
                                                </option><option value="89">
                                                    Android 1.5
                                                </option></select></div></div>
    <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="model" class="col-sm-2 " control-label >Manufacture(Tablet)</label>
                <div class="col-sm-3">
                  <select name="manufacturetab" class="form-control">
                    <option value="546">None</option><option value="10">
                                                    Acer
                                                </option><option value="53">
                                                    Ainol&nbsp;Novo
                                                </option><option value="59">
                                                    Aldi
                                                </option><option value="210">
                                                    Alldocube
                                                </option><option value="58">
                                                    Allwinner
                                                </option><option value="58">
                                                    Allwinner
                                                </option><option value="58">
                                                    Allwinner
                                                </option><option value="11">
                                                    Amazon
                                                </option><option value="1">
                                                    Apple
                                                </option><option value="32">
                                                    Archos
                                                </option><option value="57">
                                                    Argos
                                                </option><option value="33">
                                                    Asus
                                                </option><option value="42">
                                                    Barnes &amp; Noble
                                                </option><option value="6">
                                                    Blackberry
                                                </option><option value="143">
                                                    Bq
                                                </option><option value="146">
                                                    Bravis
                                                </option><option value="158">
                                                    Bush
                                                </option><option value="139">
                                                    Cherry Mobile
                                                </option><option value="157">
                                                    Chuwi
                                                </option><option value="160">
                                                    Colorovo
                                                </option><option value="89">
                                                    CSC
                                                </option><option value="40">
                                                    Cube
                                                </option><option value="87">
                                                    Datawind
                                                </option><option value="13">
                                                    Dell
                                                </option><option value="88">
                                                    Digiflip
                                                </option><option value="190">
                                                    Everis
                                                </option><option value="49">
                                                    Evolio
                                                </option><option value="75">
                                                    General Mobile
                                                </option><option value="85">
                                                    GoClever
                                                </option><option value="91">
                                                    Google
                                                </option><option value="50">
                                                    HCL
                                                </option><option value="14">
                                                    HP
                                                </option><option value="4">
                                                    HTC
                                                </option><option value="15">
                                                    Huawei
                                                </option><option value="74">
                                                    iBall
                                                </option><option value="186">
                                                    Imuz
                                                </option><option value="68">
                                                    iRulu
                                                </option><option value="46">
                                                    Karbonn
                                                </option><option value="207">
                                                    Laser
                                                </option><option value="34">
                                                    Lenovo
                                                </option><option value="8">
                                                    LG
                                                </option><option value="45">
                                                    Micromax
                                                </option><option value="38">
                                                    Microsoft
                                                </option><option value="7">
                                                    Motorola
                                                </option><option value="2">
                                                    Nokia
                                                </option><option value="18">
                                                    Notion Ink
                                                </option><option value="96">
                                                    NVIDIA
                                                </option><option value="199">
                                                    Odys
                                                </option><option value="165">
                                                    Oysters
                                                </option><option value="86">
                                                    PiPO
                                                </option><option value="41">
                                                    PocketBook
                                                </option><option value="51">
                                                    Prestigio
                                                </option><option value="185">
                                                    Qbex
                                                </option><option value="150">
                                                    Quanta
                                                </option><option value="44">
                                                    Ramos
                                                </option><option value="129">
                                                    RCA
                                                </option><option value="3">
                                                    Samsung
                                                </option><option value="203">
                                                    Sary
                                                </option><option value="5">
                                                    Sony
                                                </option><option value="161">
                                                    Stream System
                                                </option><option value="147">
                                                    Teclast
                                                </option><option value="133">
                                                    Tecno Mobile
                                                </option><option value="56">
                                                    Tesco
                                                </option><option value="22">
                                                    Toshiba
                                                </option><option value="189">
                                                    Ulefone
                                                </option><option value="148">
                                                    Umax
                                                </option><option value="26">
                                                    Velocity Micro
                                                </option><option value="209">
                                                    Verizon
                                                </option><option value="66">
                                                    Versus
                                                </option><option value="35">
                                                    ViewSonic
                                                </option><option value="28">
                                                    Vizio
                                                </option><option value="29">
                                                    Vodafone
                                                </option><option value="151">
                                                    Vonino
                                                </option><option value="77">
                                                    Wexler
                                                </option><option value="211">
                                                    Wolder
                                                </option><option value="36">
                                                    WonderMedia
                                                </option><option value="30">
                                                    Xiaomi
                                                </option><option value="142">
                                                    Xoro
                                                </option><option value="202">
                                                    Zatec
                                                </option></select></div></div>
  <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="model" class="col-sm-2 " control-label >Model(Tablet)</label>
                <div class="col-sm-3">
                  <select name="modeltab" class="form-control">
                    <option value="546">None</option>
                                                <option value="1018">
                                                    Iconia B1-710
                                                </option><option value="2816">
                                                    Iconia One 10
                                                </option><option value="2817">
                                                    Iconia One 10 B3-A32
                                                </option><option value="1247">
                                                    Iconia One 7 B1-730
                                                </option><option value="2344">
                                                    Iconia One 7 B1-770
                                                </option><option value="2408">
                                                    Iconia One 8

                                                </option><option value="2352">
                                                    Iconia One 8 B1-820
                                                </option><option value="1575">
                                                    Iconia Tab 10 A3-A30
                                                </option><option value="2315">
                                                    Iconia Tab 8 W
                                                </option><option value="553">
                                                    Iconia Tab A1-810
                                                </option><option value="2540">
                                                    Iconia Tab A1-840
                                                </option><option value="365">
                                                    Iconia Tab A100
                                                </option><option value="366">
                                                    Iconia Tab A200
                                                </option><option value="2085">
                                                    Iconia Tab A3-A30
                                                </option><option value="367">
                                                    Iconia Tab A500
                                                </option><option value="368">
                                                    Iconia Tab A501
                                                </option><option value="369">
                                                    Iconia Tab A510
                                                </option><option value="370">
                                                    Iconia Tab A511
                                                </option><option value="371">
                                                    Iconia Tab A700
                                                </option><option value="372">
                                                    Iconia Tab A701
                                                </option><option value="534">
                                                    Iconia Tab B1-A71
                                                </option><option value="373">
                                                    Iconia Tab W500
                                                </option><option value="532">
                                                    Iconia W700
                                                </option><option value="2269">
                                                    Predator 8
                                                </option></select></div></div>
                                                <div class="col-sm-3"></div>
            <div class="form-group">
            
              <label for="model" class="col-sm-2 " control-label >OS(Tablet)</label>
                <div class="col-sm-3">
                  <select name="ostab" class="form-control"><option >
                                                    None
                                                </option><option value="546">
                                                    Android 9.0
                                                </option><option value="519">
                                                    Android 8.1.0
                                                </option><option value="490">
                                                    Android 8.0.0
                                                </option><option value="482">
                                                    Android 8.0.0 DP3
                                                </option><option value="476">
                                                    Android 7.1.2
                                                </option><option value="455">
                                                    Android 7.1.1
                                                </option><option value="454">
                                                    Android 7.1
                                                </option><option value="432">
                                                    Android 7.0
                                                </option><option value="431">
                                                    Android 6.0.2
                                                </option><option value="417">
                                                    Android 6.0.1
                                                </option><option value="396">
                                                    Android 6.0.0
                                                </option><option value="345">
                                                    Android 5.1.1
                                                </option><option value="340">
                                                    Android 5.1
                                                </option><option value="338">
                                                    Android 5.0.2
                                                </option><option value="337">
                                                    Android 5.0.1
                                                </option><option value="322">
                                                    Android 5.0
                                                </option><option value="312">
                                                    Android 4.4.4
                                                </option><option value="311">
                                                    Android 4.4.3
                                                </option><option value="307">
                                                    Android 4.4.2
                                                </option><option value="294">
                                                    Android 4.4
                                                </option><option value="282">
                                                    Android 4.3
                                                </option><option value="267">
                                                    Android 4.2.2
                                                </option><option value="251">
                                                    Android 4.2.1
                                                </option><option value="125">
                                                    Android 4.2
                                                </option><option value="269">
                                                    Android 4.1.2
                                                </option><option value="80">
                                                    Android 4.1.1
                                                </option><option value="79">
                                                    Android 4.1
                                                </option><option value="32">
                                                    Android 4.0.4
                                                </option><option value="31">
                                                    Android 4.0.3
                                                </option><option value="87">
                                                    Android 4.0.2
                                                </option><option value="86">
                                                    Android 4.0.1
                                                </option><option value="30">
                                                    Android 4.0.0
                                                </option><option value="29">
                                                    Android 3.2
                                                </option><option value="85">
                                                    Android 3.1
                                                </option><option value="84">
                                                    Android 3
                                                </option><option value="83">
                                                    Android 2.5
                                                </option><option value="82">
                                                    Android 2.4
                                                </option><option value="28">
                                                    Android 2.3.7
                                                </option><option value="27">
                                                    Android 2.3.6
                                                </option><option value="26">
                                                    Android 2.3.5
                                                </option><option value="25">
                                                    Android 2.3.4
                                                </option><option value="24">
                                                    Android 2.3.3
                                                </option><option value="10">
                                                    Android 2.3
                                                </option><option value="275">
                                                    Android 2.2.3
                                                </option><option value="274">
                                                    Android 2.2.2
                                                </option><option value="273">
                                                    Android 2.2.1
                                                </option><option value="23">
                                                    Android 2.2
                                                </option><option value="81">
                                                    Android 2.1
                                                </option><option value="354">
                                                    Android 2.0
                                                </option><option value="78">
                                                    Android 1.6
                                                </option><option value="89">
                                                    Android 1.5
                                                </option></select></div></div>
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
<?php
    include ('connection.php');
    if(isset($_POST["btnSubmit"]))
    {
      $Name                   =$_POST["txtNm"];
      $Type                   =$_POST["type"];
      $Platform               =$_POST["platformpc"];
      $OSPC                   =$_POST["ospc"];   
      $ManufactureMobile      =$_POST["manufacturemobile"];
      $ModelMobile            =$_POST["modelmobile"];
      $OSMobile               =$_POST["osmobile"];
      $ManufactureTab         =$_POST["manufacturetab"];
      $ModelTab               =$_POST["manufacturertab"];
      $OSTab                  =$_POST["ostab"];


      foreach ($Type as $var)
    {
      $all_type = $all_type."".$var.",";
    }


      $q=mysqli_query($conn,"INSERT INTO  device(device_name, type, platform,os_pc,manufacture_mobile,model_mobile,os_mobile,manufacture_tablet,model_tablet,os_tablet)VALUES('$Name','$all_type','$Platform','$OSPC','$ManufactureMobile','$ModelMobile','$OSMobile','$ManufactureTab','$ModelTab','$OSTab')")or die(mysqli_error($conn));

      if($q==1)
      {
?>
      <script type="text/javascript">
        alert("data succefully inserted");
        window.location ="device_list.php";
      </script>
<?php
      }
    }
?>