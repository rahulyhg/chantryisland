<?php
	require_once("admin/phpscripts/init.php");
	$tbl="tbl_portfolio";
	$getPortfolio = getAll($tbl);
	//echo $getPortfolio;
?>
<section>
	<h2 class="hidden">Liam Stewart's Portfolio</h2>
	<div class="row" id="portfolio">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<h2>Portfolio</h2>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<h3>It all starts with an idea.</h3>
		</div>
	</div>
	<div class="row" id="portfolioItems">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
			<?php
			if(!is_string($getPortfolio)){
			while($row = mysqli_fetch_array($getPortfolio)){
			echo "<h1>{$row['p_name']}</h1>";
			echo "<h2>{$row['p_type']}</h2><br>";
			echo "{$row['p_desc']}<br><br><br>";
			echo "<a href=\"{$row['p_link']}\" class=\"main-btn\" target=\"_blank\">Launch Project</a><br><br><br><br>";
			}
			} else {
			//echo "nope...";
			}
			?>
		</div>
	</div>
</section>