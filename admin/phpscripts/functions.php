<?php
	function redirect_to($location){
		if($location != NULL) 
		{
			header("Location: {$location}");
			exit;
		}
	}

	date_default_timezone_set('America/Toronto'); //Selects and sets a timezone

	function sendInfo($email, $username, $password, $fname){
		$to = $email;
		$subj = "Chantry Island Login Info";
		$body = "Email: {$email}\n\nUsername: {$username}\n\nPassword: {$password}";
		$linkToSite = "Hello". " ". $fname . ", ". " an account has been created for you for the admin panel of Chantry Island -  Login here: https://chantryisland.com/admin/ to login.";
			
		//echo $body;
		
		mail($to, $subj, $body, $linkToSite);
		
	}

	function sendMessage($name, $email, $phone, $subject, $msg, $direct){
		$to = "lstewart2397@gmail.com";
		$subj = "{$subject}";
		$extra = "Reply-To: {$email}";
		$body = "Name: {$name}\n\nEmail: {$email}\n\nMessage: {$msg}\n\nPhone: {$phone}";
		//echo $body;
		//This will not work locally on your machine
		mail($to, $subj, $body, $extra);
		redirect_to($direct);	
	}	
?>