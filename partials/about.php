<?php 
  require_once('../admin/phpscripts/init.php');

    $tbl = "tbl_site";
    $getContent = getAll($tbl);
?>

   <?php while($row = mysqli_fetch_array($getContent)): ?>
<section id="about">
	<h2 class="hidden">About Chantry Island</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<h2>About Us</h2>
		</div>
		<div class="col-xs-12 col-sm-offset-0 col-md-12 text-center">
			<h3>learn all about Chantry Island & its history.</h3>
		</div>
	</div>
	<div class="row" id="pageContent">
		<div class="col-xs-12 col-sm-offset-0 col-md-6 col-md-offset-1 about-main"><br><br><br>
			<img src="img/about.jpg" alt="chantry island" class="img-responsive">
			Picture by James Swartzs
			<br><br><br><br>
			<h2><?php echo $row['about_title']; ?></h2>
			<h3><?php echo $row['about_Subtitle']; ?></h3><br>
			<p><?php echo $row['about_p']; ?></p>
			<br><br><br>
			<h2><?php echo $row['restore_title']; ?></h2>
			<h3><?php echo $row['restore_Subtitle']; ?></h3><br>
			<p><?php echo $row['restore_p']; ?></p>
			<br><br><br>
		</div>
		<div class="col-xs-12 col-sm-offset-0 col-md-4 col-md-offset-1 text-center">
			<div class="about-sidebar">
				<br>
				<h4>The lighthouse</h4>
				<p>
				<?php echo $row['lighthouse_p']; ?>
				</p>
			</div>
			<div class="about-sidebar-1">
				<h4>FIND OUT HOW TO<br>BOOK YOUR TRIP TO<br>CHANTRY ISLAND<br>TODAY!</h4><br>
				<a id="btngrey" class="footer-item about-sidebar-click" href="index.php?partial=book">CLICK HERE</a>
			</div>
		</div>
	</div>
</section>

    <?php endwhile; ?>