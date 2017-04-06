<?php
	function getAll($tbl){
		include('config.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);
		if($runAll){
			return $runAll;	
		}
		else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}
	function getSite() {
		include('config.php');
		$queryAll = "SELECT * FROM tbl_site";
		$runAll = mysqli_query($link, $queryAll);
		if($runAll){
			return $runAll;	
		}
		else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}
	function getSingle($tbl, $col, $id) {
		require_once('config.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col}={$id}";
		$runSingle = mysqli_query($link, $querySingle);
		if($runSingle){
			return $runSingle;	
		}
		else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}
?>