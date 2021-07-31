  <style type="text/css">

#vivid-carousel {
    background: url('images/Webp.net-resizeimage (1).jpg') no-repeat center center fixed; 
   -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    overflow-x: hidden;
    margin-bottom:0;
    height: auto;
}
.vivid-top-menu {
    min-height:90px;
    background-color:#ffffff50;
    z-index: 5000;
    width:100%;
}

#menu li a{
    color: black;
    font-size: 17px;
    font-weight: bold;
    padding-top: 0px;
}

</style>
    
</head>
         <div class="vivid-top-bar" id="vivid-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            
                            <a  href="" id="icon" class="fas fa-headset"></a>
                            090-080-0110
                    </div>
                    <div id="email" class="pull-right">
                        <a  href="" id="icon1" class="fab fa-facebook"></a>
                          <a href="" id="icon1" class="fab fa-twitter"></a>
                          <a  href="" id="icon1" class="fab fa-google-plus"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
    <div id="vivid-carousel" class="carousel slide" data-ride="carousel">
        <div class="vivid-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default " role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="index.php" class="navbar-brand"><img src="images/Webp.net-resizeimage (2).png" alt="VIVID Testing" title="VIVID Template" / width="250" height="60"></a>
                        </div>
                        <div class="navbar-collapse collapse" id="vivid-nav-bar">
                            <ul  id="menu" class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                                <li class=""><a href="signup.php">Sign Up</a></li>
                                	<li class="dropdown">
                                <a href="service.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="" data-delay="0" data-close-others="false">Services<i class="fa fa-angle-down"></i></a>
		 <ul class="dropdown-menu">

		<li><a href="service.php">Service</a></li>
	<li><a href="functional.php">Functional Testing</a></li>
	<li><a href="localisation.php">Localisation Testing</a></li>
	<li><a href="usability.php">Usability Study</a></li>
	<li><a href="revenue.php">Revenue Calculator</a></li>
	
</ul>
</li>
								
                                <li><a href="tester.php">Become a Tester</a></li>
                                <li><a href="blog.php">Blog</a></li>
                               <li><a href="contact_us.php">Contact</a></li>
                               <li><a href="../vividtesting">Vivid Testing</a></li>
                               <?php if(!empty($_SESSION) && $_SESSION['email']!= ''){
                                ?>
                                <li><a href="logout.php">Logout</a></li>
                            <?php } else { ?>
                               <li class="dropdown">
                                <a href="admin_login.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="" data-delay="0" data-close-others="false">Login<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                  <li><a href="admin/admin_login.php">Admin Login</a></li>
                                    <li><a href="employee/employee_login.php">Employee</a></li>
                                    <li><a href="tester_login.php">Tester Login</a></li>
                                  </ul>
                              </li>
                            <?php } ?>
                            
                                
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        <div>

   