<?php
	require_once("../admin/phpscripts/init.php");
	//echo $_GET["blog_id"];
	if(isset($_GET["blog_id"])) {
		$id = $_GET["blog_id"];
		$tbl = "tbl_blog";
		$col = "b_id";
		$getSingle = getSingle($id,$tbl,$col);  //order matters
	}
	else {
		//echo "Next time pick a blog post!";
	}
?>
<section id="blog">
	<h2 class="hidden">Blog Posts by Liam Stewart</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1">
			<?php
			if(!is_string($getSingle)){
			while($row = mysqli_fetch_array($getSingle)){
			echo "<h1>{$row['b_title']}</h1>";
			echo "<span>Posted: {$row['b_date']} by {$row['b_author']}</span><br><br>";
			echo "<div>{$row['b_content']}</div><br><br>";
			}
			} else {
			//echo "nope...";
			}
			?>
		</div>
	</div>
</section>