<?php
	require_once("../admin/phpscripts/init.php");
	$tbl="tbl_blog";
	$getPosts = getAll($tbl);
	//echo $getPosts;
?>
<section id="blog">
	<h2 class="hidden">Blog Posts by Liam Stewart</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1"><h2 id="blog-heading"></h2></div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1"><h3 id="blog-type"></h3></div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1" id="blog-posts">
			<?php
			if(!is_string($getPosts)){
			while($row = mysqli_fetch_array($getPosts)){
			echo "<h1>{$row['b_title']}</h1>";
			echo "<span>Posted: {$row['b_date']} by {$row['b_author']}</span><br><br>";
			echo "<a href=\"#blog/{$row['b_id']}\">Read post...</a><br><br>";
			//echo "<div>{$row['b_content']}</div><br><br>";
			}
			} else {
			//echo "nope...";
			}
			?>
		</div>
	</div>
</section>