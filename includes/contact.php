<?php
	require_once("../admin/phpscripts/init.php");
	$tbl="tbl_contact";
	$getContact = getAll($tbl);
	//echo $getContact;
?>
<section>
	<h2 class="hidden">Contact Liam Stewart</h2>
	<div class="row" id="contact">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<h2>Contact</h2>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<h3>Looking for a website? Let’s chat!</h3>
		</div>
	</div>
	<div class="row" id="contactArea">
		<div class="col-sm-12 col-md-10 col-md-offset-1">
			<div class="row contactItem">
				<?php
						if(!is_string($getContact)){
						while($row = mysqli_fetch_array($getContact)){
						echo "<div class=\"col-sm-12 col-md-4\">";
							echo "{$row['c_title']} - <a href=\"{$row['c_link']}\" target=\"_blank\">{$row['c_handle']}</a><br><br>";
						echo "</div>";
						}
						} else {
						//echo "nope...";
						}
				?>
			</div>
		</div>
	</div>
</section>