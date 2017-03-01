<?php
	require_once("../admin/phpscripts/init.php");
	//echo $_GET["blog_id"];
	if(isset($_GET["galleryItem_id"])) {
		$id = $_GET["galleryItem_id"];
		$tbl = "tbl_gallery";
		$col = "galleryItem_id";
		$getGalleryItem = getGalleryItem($id,$tbl,$col);
	}
	else {
		//echo "Next time pick a photo!";
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
		if(!is_string($getGalleryItem)){
			while($row = mysqli_fetch_array($getGalleryItem)){
				echo "<h3>{$row['galleyItem_title']}</h3>";
			}
		}
		else {
			//echo "nope...";
		}
	?>
		</div>
	</div>
	<div class="row" id="pageContent">
		<div class="col-xs-12 col-md-12 gallery-main text-center"><br><br><br>
			<div class="col-md-8 col-md-offset-2 gallery-text">
				<p>This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island.</p>
				<p>If you have photos of Chantry Island that you would like to share with us, connect with our <a target="_blank" href="https://www.facebook.com/MarineHeritageSociety">Facebook123</a> page.</p></div>
		<!-- 		<div class="row">
					<div class="col-md-12">
						<div class="col-md-3"><img src="img/birds1.jpg" alt="chantry island" class="img-responsive"></div>
						<div class="col-md-3"><img src="img/birds2.jpg" alt="chantry island" class="img-responsive"></div>
						<div class="col-md-3"><img src="img/birds3.jpg" alt="chantry island" class="img-responsive"></div>
						<div class="col-md-3"><img src="img/birds4.jpg" alt="chantry island" class="img-responsive"></div>
					</div>
				</div> -->
				<br><br>
				<br><br>
			</div>
		</div>
	</section>