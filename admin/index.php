<?php
ob_start();
include('phpscripts/init.php');
confirm_logged_in();//session will fully log out if you shut down entire browser, not just by closing tab
$id = $_SESSION['users_creds'];
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin - Chantry Island</title>
        <link rel="stylesheet" href="../css/normalize.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/app.css"/>
    </head>
    <body>
          <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?partial=admin_index">Chantry Island</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php?partial=admin_index">Home</a></li>
            <li><a href="index.php?partial=admin_editsite">Edit Website</a></li>
<!--             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Edit Pages <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?partial=admin_editsite#home">Home Page</a></li>
                <li><a href="index.php?partial=admin_editsite#about">About Page</a></li>
                <li><a href="index.php?partial=admin_editsite#book">Book Page</a></li>
                <li><a href="index.php?partial=admin_editsite#gallery">Gallery Page</a></li>
                <li><a href="index.php?partial=admin_editsite#contact">Contact Page</a></li>
              </ul>
            </li> -->
<!--             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?partial=admin_createuser">Create User</a></li>
                <li><a href="index.php?partial=admin_deleteuser">Delete User</a></li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../">Visit Website</a></li>
            <li><a href="index.php?partial=admin_edituser">My Account</a></li>
            <li><a href="phpscripts/caller.php?caller_id=logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
            <div class="container-fluid main-container" id="adminPanel">
              
                    <div class="col-xs-10 col-md-10 col-md-offset-1 content">
                        <?php
                        if (isset($_GET['partial'])){
                        $partial =  $_GET['partial'];
                        include($partial.'.php');
                        }
                        else {
                        include('admin_index.php');
                        }
                        ?>
                    </div>
                    
            </div>
            <script src="../js/vendor/jquery.min.js"></script>
            <script src="../js/vendor/bootstrap.min.js"></script>
            <script src="js/app.js"></script>
        </body>
    </html>