<?php
	require_once("../admin/phpscripts/init.php");
	$tbl="tbl_gallery";
	$getGallery = getAll($tbl);
?>

<?php 
    $tbl = "tbl_site";
    $getContent = getAll($tbl);
?>
   <?php while($row = mysqli_fetch_array($getContent)): ?>
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
				<p><?php echo $row['gallery_p']; ?></p></div>
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

			echo "<div class=\"col-xs-6 col-md-3\">
			<img class=\"img-responsive\" id=\"{$row['g_id']}\" src=\"img/{$row['g_img']}\">
			</div>";
			}
			} else {
			//echo "nope...";
			}
			?>


        </div>


			</div>
		</div>
	</section>

	   <?php endwhile; ?>