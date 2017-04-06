<?php
	function redirect_to($location){
		if($location != NULL) 
		{
			header("Location: {$location}");
			exit;
		}
	}

	date_default_timezone_set('America/Toronto'); //Selects and sets a timezone

	// function addGalleryItem($galleryName, $galleryImage, $imageAuthor){
	// 	include("config.php");
		
	// 	$galleryImage  = mysqli_real_escape_string($link, $galleryImage);

	// 	if($_FILES['gallery_img']['type'] == "image/jpg" || $_FILES['gallery_img']['type'] == "image/jpeg"){
	// 		//echo "this is a jpg";
			
	// 		$targetpath = "../images/{$galleryImage}";

	// 		if(move_uploaded_file($_FILES['gallery_img']['tmp_name'], $targetpath)){
				
	// 			$qstring = "INSERT INTO tbl_gallery VALUES(NULL, galleryName}', '{$galleryImage}', '{$imageAuthor}')";
	// 			//echo $qstring;
	// 			$result = mysqli_query($link, $qstring);
				
	// 			if($result == 1)
	// 			{
	// 				$qstring2 = "SELECT * FROM tbl_gallery ORDER BY gallery_id DESC LIMIT 1";
	// 				$result2 = mysqli_query($link, $qstring2);
					
	// 				$row = mysqli_fetch_array($result2);
	// 				$lastID = $row['gallery_id'];
					
	// 				redirect_to("index.php");
	// 			}

	// 		}
	// 	}
	// 	else{
	// 		echo "2MB max file size for jpg and jpeg file types.";
	// 	}
	// 	mysqli_close($link);
	// }



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