<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();
	if(isset($_POST['submit'])){
		//echo "works";
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$email = trim($_POST['email']);
		$username = trim($_POST['username']);
		$randomPassword = bin2hex(openssl_random_pseudo_bytes(2));
		$password = password_hash($randomPassword, PASSWORD_DEFAULT);


		sendInfo($email, $username, $password, $fname);

			$result = createUser($fname, $lname, $email, $username, $password);
			$message = $result;
		
	}

?>


	<?php if (!empty($message)){echo $message;} ?>
	<form action="index.php?partial=admin_createuser" method="post" class="createUserForm">
	<h2>Create User</h2>
		<label>First Name:</label>
		<input type="text" name="fname" value="<?php if (!empty($fname)){echo $fname;} ?>">
		<label>Last Name:</label>
		<input type="text" name="lname" value="<?php if (!empty($lname)){echo $lname;} ?>">
		<label>E-Mail:</label>
		<input type="text" name="email" value="<?php if (!empty($email)){echo $email;} ?>">
		<label>Username:</label>
		<input type="text" name="username" value="<?php if (!empty($username)){echo $username;} ?>">
		<label>Your password will be auto-generated and sent to your E-Mail!</label>
		<br><br>
		<br><br>
		<input type="submit" name="submit" value="Create User">
		<br><br>

	</form>
