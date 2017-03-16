<?php
	require_once("../admin/phpscripts/init.php");
	//echo $_GET["image_id"];
	if(isset($_GET["image_id"])) {
		$id = $_GET["image_id"];
		$tbl = "tbl_gallery";
		$col = "g_id";
		$getSingle = getSingle($id,$tbl,$col);  //order matters
	}
	else {
		//echo "Next time pick a gallery item!";
	}
?>
<section id="galleryItem">
	<h2 class="hidden">Gallery Chantry Island</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<h2>Gallery</h2>
		</div>
		<div class="col-xs-12 col-sm-offset-0 col-md-12 text-center">
							<?php
			if(!is_string($getSingle)){
			while($row = mysqli_fetch_array($getSingle)){
			echo "<h3>{$row['g_title']}</h3>";
			echo '</div>
	</div>
	<div class="row" id="pageContent">
		<div class="col-xs-12 col-md-12 gallery-main"><br><br><br>
			<div class="col-md-4 col-md-offset-2 gallery-text">';
			echo "<img class=\"img-responsive\" src=\"admin/uploads/images/{$row['g_img']}\" alt=\"{$row['g_img']}\"></div>";
			echo "<div class=\"col-md-4 gallery-text\"><p>Photographer: {$row['g_credit']}</p><p>{$row['g_desc']}</p></div>";
			}
			} else {
			//echo "nope...";
			}
			?>

			</div>
		</div>
	</section>