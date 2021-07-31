<?php session_start();
  if(empty($_SESSION) && $_SESSION['user_type'] != 'TESTER'){
    header('Location: index.php');
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
a
	  { 
		  color: white;
		  font-size:20px;
	  }
	  
    .white_box
    {
      height: 50px;
      margin-top: 40px;
      font-weight: bold;
      padding-right: 170px;
      padding-left: 170px;
    }
    .white_box_1
    {
      background-color: rgba(100, 100, 100, 0.5);
      height: 100%;
      margin-top: 70px;
      margin-bottom: 50px;
      padding-right: 170px;
      padding-left: 170px;
    }
    .header_txt_1
    {
      color: #002b80;
      font-size: 35px;
      font-weight: bold;
      text-align: left;
      text-transform: capitalize;
      font-weight: bold;
      margin: 32px 1px 0;
      padding: 12px 20px;
    }
.white
{
 color: white;
}
    p
    {
      color: white;
      font-size: 15px;
    }

    span h5
    {
      color: red;
    }
    .border
    {
      border-bottom: 2px solid red;
      margin-bottom: 20px;
    }
    
  </style>
<body>
        <?php include('header.php');?>

<div class="container-fluid">
    <div class="container">
      <div class="white_box_1">
        <h2 class="header_txt_1">Terms & Conditions</h2>
        <span><h5>You must agree latest Digivante terms and conditions before you can continue using this site. 
The agreement details are at the bottom of this page.</h5></span>
<div class="border"></div>
        <h4>1 Provisions applicable to all Users</h4>
        <h1 class="white">1.1 Introduction</h1>
        <p>Use of https://www.vividtesting.com/crowdtest (the “Website”) is subject to these Terms and Conditions. The Website is owned and operated by BugFinders Limited (Crowdtest or “us” or “we” or “The Company”), a company registered in England & Wales with company number 07573888 and registered address at 3 Rockfield Business Park, Old station drive, Leckhampton, GL53 0AN.<br>

If you (the user or viewer) continue to browse and use this Website, or any services offered on this Website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our Privacy Policy and – if applicable - the Provisions for Testers and/or the Provisions for Customers (all of which are set out on our Website) govern our relationship with you in relation to this Website. If you disagree with any part of these terms and conditions, please do not use our Website.<br>

Please note that these terms and conditions may be amended from time to time. Notification of any changes will be made by posting new terms onto the Website. In continuing to use the Website you confirm that you accept the then current terms and conditions in full at the time you use the Website. These terms were last updated in August 2011.<br>

</p>
<h1 class="white">1.2 Licence</h1>
<p>You are permitted to print and download extracts from the Website for your own personal, non-commercial use on the following basis:</p>
<li class="white">No documents, training materials or related graphics on the Website are modified in any way;</li>
<li class="white">No graphics on the Website are used separately from the corresponding text; and</li>
<li class="white">The Company's copyright and trade mark notices and this permission notice appear in all copies.</li>
<h3 class="white">1.3 Copyright & Intellectual Property Rights notice</h3>
<p>Unless otherwise stated, the copyright and other intellectual property rights in all material on the Website (including without limitation photographs, graphical images, the design, layout, look and appearance of the Website) are owned by us or our licensors. For the purposes of this legal notice, any use of extracts from the Website other than in accordance with clause 2 for any purpose is prohibited.<br>

If you breach any of the terms in this legal notice, your permission to use the Website automatically terminates and you must immediately destroy any downloaded or printed extracts from the Website.<br>

Any redistribution or reproduction of part or all of the Website in any form is prohibited other than in accordance with clause 2.<br>

You may not, except with our express written permission, distribute or commercially exploit the content. Nor – subject to clause 2 - may you transmit it or store it in any other Website or other form of electronic retrieval system or service without our prior written permission.<br>

You are not entitled to use any data mining, robots, or similar data gathering and extraction tools to collect user names, e-mail addresses or any other data for the purposes of sending unsolicited e-mail or for any other use (including but not limited to the monitoring of webpages on the Website).<br>

Any rights not expressly granted in these terms are reserved.</p>
<h1 class="white">1.4 Service access</h1>
<p>While the Company endeavours to ensure that the Website is normally available 24 hours a day, the Company shall not be liable if for any reason the Website is unavailable at any time or for any period. Access to the Website may be suspended temporarily and without notice in the case of system failure, maintenance or repair or for reasons beyond the Company's control.</p>
<h1 class="white">1.5 Registration</h1>
<p>Each registration is for a single user only. The Company does not permit you to share your user name and password with any other person nor with multiple users on a network. Responsibility for the security of any passwords issued rests with you. We insist that all users (Company Customers and Tester alike) use valid email addresses and use their real name and agree to never disclose information about other BugFinders users (be they Company Customer or Testers).</p>
        
        <h1 class="white">1.6 Links to and from other Websites</h1>
        <p>Through this Website you are able to link to other Websites which are not under our control. We have no control over the nature, content and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them and if you decide to access any of the third party Websites linked to the Websites you do so entirely at your own risk.<br>

This Website may contain links to content that is aimed at, and only suitable for, users over 18 years old. We do not provide such content and are not responsible for ensuring that only users over 18 years old can access such content. By accessing and continuing to use the Website, you accept that we have no liability for ensuring that content accessed via links from our Website is suitable for the users accessing such content.<br>

If you would like to link to the Website, you may only do so on the basis that you link to, but do not replicate, only the home page of the Website, and subject to the following conditions:<br>

You do not remove, distort or otherwise alter the size or appearance of the BugFinders logo;<br>
You do not create a frame or any other browser or border environment around the Website;<br>
You do not in any way imply that the Company is endorsing any products or services other than its own;<br>
You do not misrepresent your relationship with the Company nor present any other false information about the Company;<br>
You do not otherwise use any BugFinders trade marks displayed on the Website without express written permission from the Company;<br>
You do not link from a Website that is not owned by you;<br>
Your Website does not contain content that is distasteful, offensive or controversial, infringes any intellectual property rights or other rights of any other person or otherwise does not comply with all applicable laws and regulations.<br>
The Company expressly reserves the right to revoke the right granted in this clause above for breach of these terms and to take any action it deems appropriate.<br>

You shall fully indemnify the Company for any loss or damage suffered by the Company or any of its group companies for breach of this clause<br></p>

<h1 class="white">1.7 Acceptable Use Policy</h1>
<p>In agreeing these Terms you agree to be bound by our Acceptable Use Policy regarding use of the Website.<br>

<h1 class="white">1.8 Website disclaimer</h1>
<p>The information contained in this Website (including the Training materials) is for general information only. Some information may be provided by third parties and while we endeavour to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the Website or the information, training products, services, or related graphics contained on the Website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.<br>

Accordingly, to the maximum extent permitted by law, we provide you with the Website on the basis that we exclude all representations, warranties, conditions and other terms (including, without limitation, the conditions implied by law of satisfactory quality, fitness for purpose and the use of reasonable care and skill which, but for this legal notice, might have effect in relation to the Website.<br>

<h1 class="white">1.9 Liability</h1>
<p>In no event will we, any other party (whether or not involved in creating, producing, maintaining or delivering the Website), and any of our group companies and the officer, directors, employees, shareholder or agents of any of them, be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage (including but not limited to damage due to viruses that may infect your computer equipment, software, data or other property on account of your access to, use of, or browsing the Website or your downloading of any material from the Website or any Websites linked to the Website) whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this Website.<br>

Nothing in this legal notice shall exclude or limit the Company's liability for:<br>

Death or personal injury caused by negligence; or<br>
Fraud; or<br>
Misrepresentation as to a fundamental matter; or<br>
Any liability which cannot be excluded or limited under applicable law
If your use of material on the Website results in the need for servicing, repair or correction of equipment, software or data, you assume all costs thereof.<br>

<h1 class="white">1.10 Our site changes regularly</h1>
<p>We aim to update our site regularly, and may change the content at any time. If the need arises, we may suspend access to our site, or close it indefinitely. Any of the material on our site may be out of date at any given time, and we are under no obligation to update such material.<br>

<h1 class="white">1.11 Governing law</h1>
<p>This legal notice shall be governed by and construed in accordance with English law. Disputes arising in connection with this legal notice shall be subject to the exclusive jurisdiction of the English courts.<br>

<h1 class="white">1.12 Competition</h1>
<p>BugFinders and Test People will at no point enter a non-competition agreement. If a client wishes to use the BugFinders or Test People service to get work completed on behalf of a third-party client, then it is their responsibility to ensure that the 3rd party client's details are protected.</p><br>

		  <a href="select_type.php" class="btn btn-success" >Click to agree these terms.</a>
      </div>
</body>
</html>
