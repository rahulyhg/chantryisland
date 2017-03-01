<?php
	function getGallery($tbl){
		require_once("config.php");
		$queryAll = "SELECT * FROM {$tbl}";
		//echo $queryAll;
		$runGallery = mysqli_query($link, $queryAll);
		if($runGallery) {
			return $runGallery;
		} else {
			$error = "There was an error accessing this information.";
			return $error;
		}
		mysqli_close($link);
	}
	function getGalleryItem($id,$tbl,$col) {
		require_once("config.php");
		$queryGalleryItem = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		//echo $querySingle;
		$runGalleryItem = mysqli_query($link, $queryGalleryItem);
			if ($runGalleryItem) {
				return $runGalleryItem;
			} else {
				$error = "Please pick a photo!";
				return $error;
			}
		mysqli_close($link);
	}
?>