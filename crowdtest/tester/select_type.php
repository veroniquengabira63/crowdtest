<?php 
session_start();

if(empty($_SESSION) && $_SESSION['user_type'] != 'TESTER'){
  header('Location: index.php');
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
  <div class="container-fluid">
    <div class="background">
      <div class="container" style="text-align: center;">
        <div class="header"><h1>Select Your Device type</h1></div>
          <div class="main_tags">
          <h2><a class="btn btn-warning" href="PC_LAptop.php">PC/Laptop</a></h2>
          <h2><a class="btn btn-info" href="mobile.php">Mobile</a></h2>
          <h2><a class="btn btn-primary" href="tablet.php">Tablet</a></h2>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
