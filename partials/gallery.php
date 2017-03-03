<?php
	require_once("../admin/phpscripts/init.php");
	$tbl="tbl_gallery";
	$getGallery = getAll($tbl);
	//echo $getPosts;
?>
<section id="gallery">
	<h2 class="hidden">Gallery Chantry Island</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<h2>Gallery</h2>
		</div>
		<div class="col-xs-12 col-sm-offset-0 col-md-12 text-center">
			<h3>welcome to our photo gallery.</h3>
		</div>
	</div>
	<div class="row" id="pageContent">
		<div class="col-xs-12 col-md-12 gallery-main text-center"><br><br><br>
			<div class="col-md-8 col-md-offset-2 gallery-text">
				<p>This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island.</p>
				<p>If you have photos of Chantry Island that you would like to share with us, connect with our <a target="_blank" href="https://www.facebook.com/MarineHeritageSociety">Facebook</a> page.</p></div>
				<div class="row">
				</div>
    <div class="row">
       <div class="col-xs-12 col-md-6">
		  <img src="" class="image img-responsive">
          <p class="caption"></p>
          <p class="imageCredit"></p>  
    </div>
    <div class="col-xs-12 col-md-6 gallery">
        
		<?php
			if(!is_string($getGallery)){
			while($row = mysqli_fetch_array($getGallery)){
			echo "<div class=\"col-xs-6 col-md-3\"><img class=\"img-responsive\" id=\"{$row['g_id']}\" src=\"admin/uploads/images/{$row['g_img']}\"></div>";
			}
			} else {
			//echo "nope...";
			}
			?>


        </div>


			</div>
		</div>
	</section>