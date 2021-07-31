<?php
        include ('connection.php');
        if(isset($_POST["btnLogin"]))
        {
            $eid=$_POST["txtEid"];
            $pass=$_POST["txtPass"];
            $q = mysqli_query($conn,"SELECT * FROM signup WHERE email='$eid' AND password='".md5($pass)."'");
            $row=mysqli_num_rows($q);
            if($row>0)
            {
                $data=mysqli_fetch_array($q);
                $_SESSION['first_name'] = $data['first_name'];
                $_SESSION['last_name'] = $data['last_name'];
                $_SESSION['mobile'] = $data['mobile'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['id'] = $data['id'];
                $_SESSION['user_type'] = 'TESTER';
                header("location:tester/all_device.php");
}
        else
        {
            ?>
            <script> 
            alert("invalid please create account....")
                window.location = "tester_login.php"
        </script>
        <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>Crowd Test</title>
            <style type="text/css">
            .login{
    max-width:500px;
    margin: 20px auto;
}
                .input-lg{
    background-color: #fbf4f4;
    border-radius: 3px solid #fff !important;

}
.modal-content{
    background-color: #0516271a;
}
.modal-header{
    color: #fff;
    background-color:#131c65e6;
    border-radius: 5px 5px 0px 0px;
}
.close{
    margin-top: 10px !important;
    font-size: 38px !important;
}
                .input-lg{
    background-color: #fbf4f4;
    border-radius: 3px solid #fff !important;

}

        </style>

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
    </head>
    
    <body>


      <div class="carousel-inner">
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="login" class="modal modal-dialog" role="dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="close" data-dismiss="modal"><a href="index.php">&times;</a></div>
                        <h2>Tester Login</h2>
                    </div>
                        <div class="modal-body">                
                            <form method="post"  class="form-group" action="">
                                <table border="0" aline="center" class="table table-responsive">
                                    <tr>
                                        <td><label> Email id</label></td>
                                        <td><input type="email" name="txtEid" class="form-control input-lg" required=""></td>
                                    </tr>
                                        <tr>
                                            <td><label>Password</label></td>
                                            <td><input type="password" name="txtPass" class="form-control input-lg" required=""></td>
                                        </tr>
                                <tr>
                                    <td><button class="btn btn-info" type="submit" name="btnLogin" value="Login">Login</botton></td>
                                    <td><button class="btn btn-warnig" id="cancel"type="reset" name="btnCancel" value="cancel">Cancel</button></td>
                                </tr>
                                
                                </table>

                            </form>
                            <a href="signup.php" id="cancel"><strong>Create new account</strong></a>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '2e828068-c53a-498d-9a6a-0b4c939b8425', f: true }); done = true; } }; })();</script>
</body>
</html>