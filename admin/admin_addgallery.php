<?php
	require_once('phpscripts/init.php');
	//ini_set('display_errors',1);
    //error_reporting(E_ALL);

    confirm_logged_in();
	
	$tbl = "tbl_gallery";
	$galleryQuery = getAll($tbl);


	if(isset($_POST['submit'])) {

		$galleryName = $_POST['gallery_name'];
		$galleryImage = $_FILES['gallery_img']['name'];
		$imageAuthor = $_POST['image_author'];
		
		$uploadGallery = addGalleryItem($galleryName, $galleryImage, $imageAuthor);
		$message = $uploadGallery;

	}

?>
	<div class="col-md-offset-1 col-md-10">

		<h2>Add Image to Gallery</h2>

		<?php if(!empty($message)){echo $message;} ?>
		<form action="admin_addgallery.php" method="post" enctype="multipart/form-data">
		<label>Image Name:</label><br>
		<input type="text" name="gallery_name" value="" size="32"><br><br>
		<label>Image:</label><br>
		<input type="file" name="gallery_img" value="" size="32"><br><br>
		<label>Image Author:</label><br>
		<input type="text" name="image_author" value="" size="32"><br><br>

		<input type="submit" name="submit" value="Add">
		</form>

	</div>

	</section>

