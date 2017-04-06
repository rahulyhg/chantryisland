<?php
	function getUser($id){
		require_once("config.php");
		$query = "SELECT * FROM tbl_user WHERE user_id = {$id}";

		$userquery = mysqli_query($link, $query);


		if($userquery){
			$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_user;
		}
		else {
			$error =  "no luck finding user(s)";
			return $error;
		}

		mysqli_close($link);
	}

	function editUser($id, $fname, $lname, $email, $username, $password) {
		include("config.php");
		$updateString = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}', user_email='{$email}', user_name='{$username}', user_pass='{$password}' WHERE user_id={$id}";

		$updatequery = mysqli_query($link, $updateString);

		if($updatequery){
			redirect_to("index.php?partial=user-done");
		}
		else{
			$message = "No luck editing this user! Sorry!";
			return $message;
		}

		mysqli_close($link);
	}

?>