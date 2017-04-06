<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();

	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);

	$id = $_SESSION['users_creds'];
	$popForm = getUser($id);
	//echo $popForm;


	if(isset($_POST['submit']))
	{
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email = trim($_POST['email']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		editUser($id, $fname, $lname, $email, $username, $password);
	}

?>

<?php if (!empty($message)){echo $message;} ?>

<div class="col-sm-12 col-md-4 col-md-offset-4">
<form action="index.php?partial=admin_edituser" method="post">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" name="fname" class="form-control" value="<?php echo $popForm['user_fname']; ?>">
  </div>

  <div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" value="<?php echo $popForm['user_email']; ?>">
  </div>

    <div class="form-group">
    <label>Username:</label>
    <input type="text" name="username" class="form-control" value="<?php echo $popForm['user_name']; ?>">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="text" name="password" class="form-control" value="<?php echo $popForm['user_pass']; ?>">
  </div>
  <button type="submit" name="submit" class="btn btn-default">Edit Account</button>
</form>

</div>
	</div>
