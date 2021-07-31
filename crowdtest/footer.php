
  <style type="text/css">
    .img_footer
    {
      background: url(images/register-bg.jpg)center center fixed;
      background-size:cover; 
      height: 100%;
      color: #fff;
      margin-top: 10px;
    }
.txt
{
  text-transform: uppercase;
    font-size: 17px;
    color: #f1f1f1;
    padding-top: 50px;
}
.txt__1
{
  text-transform: uppercase;
    font-size: 17px;
    color: #f1f1f1;
    padding-top: 50px;
    text-align: center;
}
.txt_1
{
  color: white;
  font-family: 'Open Sans',sans-serif;
  font-size: 15px;
  width: 170px;
}
.txt_2
{
  text-transform: uppercase;
    font-size: 17px;
    color: white; 
}
.tbl
{
  margin-top: 50px;
}
.tbl .in
{

  border: 2px solid #fff;
  height: 50px;
  background-color: transparent;
  padding: 10px;
  margin-top: 15px;
}
.tbl .btn
{
  margin-top:40px;
  padding: 10px 30px;
  border-radius: 100px;
  background-color: #f2545f;
  text-transform: uppercase;
  transition: 0.4s;
}
.tbl .btn:hover
{
  background-color: #fff;
  color: #222;
}
  </style>
  <body>
      <div class="img_footer">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
          <div class="col-sm-3">
          <h2 class="txt">ABOUT JSPIDERS</h2>
          <h4 class="txt_1">Jspiders is a top-notch learning solutions organization head quartered in India's IT capital Bangalore.
We offer wide range of course in the area of java development.
A "Finishing School" in different paths, the institute provides young job aspirants the perfect launch-pad to build an excellent rewarding careers in the huge IT hubs.</h4>
        </div>
        <div class="col-sm-3">
          <h2 class="txt__1">BRANCHES</h2>
          <p class="txt_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet consectetuer diam nonummy.</p>
        </div>
          <div class="col-sm-6 tbl">
            <h2 class="txt_2">Quick Enquiry</h2>
            <form method="post">
            <table>
            <tr>
              <td><input class="in" type="text" name="txtNm" placeholder=" Name" required=""></td>
              </tr>
            <tr>
              <td><input class="in" type="email" name="txtEid" placeholder="Email" required=""></td>
              </tr>
              <tr>
              <td><input class="in" type="number" name="txtMob" placeholder="Phone Number" required=""></td>
              </tr>
              <tr>
              <td><textarea class="in" type="text" name="txtMsg" placeholder="Message"></textarea></td>
              </tr>
              <tr>
              <td><input class="btn btn" type="submit" name="btnContact" value="Contact us"></td>
              </tr>
            </table>
          </form>
          </div>
          </div>
        </div>
      </div>
    </div>
    </body>
    </html>
    <?php
    include ('connection.php');
    if(isset($_POST["btnContact"]))
    {
      $Name            =$_POST["txtNm"];
      $Email           =$_POST["txtEid"];
      $Mobile          =$_POST["txtMob"];
      $Message         =$_POST["txtMsg"];


      $q=mysqli_query($conn,"INSERT INTO  enquiry(name, email, mobile,message)VALUES('$Name','$Email','$Mobile','$Message')")or die(mysqli_error($conn));

      if($q==1)
      {
?>
      <script type="text/javascript">
        alert("data succefully inserted");
        window.location ="index.php";
      </script>
<?php
      }
    }
?>