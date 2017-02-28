<?php
	include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}

	$mysqli->set_charset("utf8");

	// set some post stuff up here
	$gImage = $_GET["gallery_image"];	

	$myQuery = "SELECT * FROM gallery WHERE gallery_image = '$gImage'";
	$result = mysqli_query($mysqli, $myQuery);
	$row = mysqli_fetch_assoc($result);	

	echo json_encode($row);
	echo mysqli_num_rows($result);			
?>