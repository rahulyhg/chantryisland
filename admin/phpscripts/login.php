<?php
	function logIn($username, $password, $ip){
		require_once('config.php');
		$username = mysqli_real_escape_string($link,$username);
		$password = mysqli_real_escape_string($link,$password);
		$loginString = "SELECT * FROM tbl_user WHERE user_name ='{$username}' AND user_pass = '{$password}'";
		
		$user_set = mysqli_query($link, $loginString);

		if(mysqli_num_rows($user_set)){
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $found_user['user_id'];
			$_SESSION['users_creds'] = $id;
			$_SESSION['users_fname'] = $found_user['user_fname'];
			$_SESSION['users_name'] = $found_user['user_name']; 
			$_SESSION['users_lastlogin'] = $found_user['user_lldate'];

			if(mysqli_query($link, $loginString)){
				$updateString = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id='{$id}'";
				$lastLoginQuery = "UPDATE tbl_user SET user_lldate = NOW() WHERE user_id='{$id}'"; //Updates the user's last login date using a MySQL call.
				$updateQuery = mysqli_query($link, $updateString);
				$updateLastLogin = mysqli_query($link, $lastLoginQuery);
			}

			$_SESSION['firstLogin'] = $found_user['user_firstLogin'];

			if($_SESSION['firstLogin'] == 0) {
				$updateflString = "UPDATE tbl_user SET user_firstLogin = 1 WHERE user_id = '{$id}'";
				$updatefirstLogin = mysqli_query($link, $updateflString); 
				redirect_to("index.php?partial=admin_edituser");
			}
			else{
				redirect_to("index.php");
			}


		}

	
			else {
			$message = "Username/Password was incorrect. You now have X chances to successfully login!";
			return $message;
			}

		mysqli_close($link);
	}

?>