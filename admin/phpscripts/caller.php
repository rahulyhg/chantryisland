<?php
		require_once('init.php');

		if(isset($_GET['caller_id'])){
			$go = $_GET['caller_id'];

			if($go == "logout"){
				logged_out();
			}
		}
		
?>