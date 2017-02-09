<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge,IE=9,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Chantry Island</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <meta name="author" content="Liam Stewart, www.liamstewart.ca">
        <meta name="description" content="Chantry Island is a small, 81-hectare island in Lake Huron, south of the mouth of the Saugeen River and approximately a mile off the shores of the town of Southampton, Ontario.">
        <meta name="HandheldFriendly" content="True" />
        <!-- <link rel="canonical" href="#" /> -->
        <meta property="og:title" content="Liam Stewart - Web Developer from London Ontario">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en_US"/>
        <!-- <meta property="og:image" content="img/social-logo.png"> -->
       <!--  <meta property="og:url" content="#"> -->
        <meta property="og:description" content="Chantry Island is a small, 81-hectare island in Lake Huron, south of the mouth of the Saugeen River and approximately a mile off the shores of the town of Southampton, Ontario.">
        <meta name="twitter:card" content="summary">
        <!-- <meta name="twitter:url" content="#"> -->
        <meta name="twitter:title" content="Chantry Island is a small, 81-hectare island in Lake Huron, south of the mouth of the Saugeen River and approximately a mile off the shores of the town of Southampton, Ontario.">
      <!--   <meta name="twitter:image" content="img/social-logo.png"> -->
      <meta name="keywords" content="Chantry Island, Marine Heritage Society, Southampton, ON, Saugeen Shores, Bruce Peninsula, Port Elgin, Tourism, Lighthouse, Boat Tour, Keeper's Cottage, Sunsets, Lake Huron" />
        <meta name="rating" content="General" />
        <meta name="distribution" content="Global" />
        <meta name="revisit-after" content="7 days">
        <meta name="language" content="english">
        <meta name="googlebot" content="noodp">
        <meta name="fragment" content="!">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,900|Roboto:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body ng-app="ChantryIsland">
        <h1 class="hidden">Chantry Island</h1>
        <?php include 'partials/header.php';?>
        <div ng-view class="container-fluid" id="page">
            <noscript>
            <link rel="stylesheet" href="css/no-js.css">
            <?php
            if (isset($_GET['partial'])) {//If partial is in url
            $partial =  $_GET['partial'];//set variable of of partial
            // echo $_GET['partial']; // Checking for getting partial in route
            include 'partials/'.$partial.'.php';//include
            }
            else {
            include 'partials/home.php';//otherwise include
            }?>
            </noscript>
        </div>  
        <script src="js/vendor/jquery-3.1.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/angular.min.js"></script>
        <script src="js/vendor/angular-route.min.js"></script>
        <script src="js/vendor/TweenMax.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>