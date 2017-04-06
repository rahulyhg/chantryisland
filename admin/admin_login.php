<?php
	$ip = $_SERVER["REMOTE_ADDR"];
	require_once('phpscripts/init.php');
	if(isset($_POST['submit'])){
		//echo "yup";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if($username != "" && $password != ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
			//echo "working";
		}
		else{
			$message = "please enter all required information";
		}
	}
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

<div class="row">   	
<div class="col-xs-12 col-md-4 col-md-offset-4">   	
<h1>Chantry Island - Admin Login</h1>
<?php if(!empty($message)) {echo $message;} ?>
<form method="post" action="admin_login.php" class="form-inline">
<h2 class="hide">Admin Login Form</h2>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" name="username" class="form-control">
  </div>
  <br><br>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control">
  </div>
  <br><br>
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>





</body>
</html>