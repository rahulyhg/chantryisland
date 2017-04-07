<?php
require_once('../admin/phpscripts/init.php');
$tbl = "tbl_site";
$getContent = getAll($tbl);
?>
<?php while($row = mysqli_fetch_array($getContent)): ?>
<section id="book">
	<h2 class="hidden">Book a Tour of Chantry Island</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<h2>Booking</h2>
		</div>
		<div class="col-xs-12 col-sm-offset-0 col-md-12 text-center">
			<h3>book your tour of Chantry Island today.</h3>
		</div>
	</div>
	<div class="row" id="pageContent">
		<div class="col-xs-12 col-md-12 book-main"><br><br><br>
			<div class="col-md-6 col-md-offset-1 book-text">
				<h2><?php echo $row['book_title']; ?></h2>
				<h3>	<?php echo $row['book_Subtitle']; ?></h3>
				<br>
				<p>	<?php echo $row['book_p']; ?></p><br>
				<div class="book-red text-center">
					<h4>WHEN AND WHERE TO MEET</h4><br>
					<p>
						<?php echo $row['meet_p']; ?>
					</p>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-1">
				<h4>RATES</h4>
				<p>
					<?php echo $row['book_rates']; ?>
				</p>
				<br>
				<h4>CONTACT US TODAY<br>BY PHONE OR E-MAIL<br>TO BOOK YOUR TOUR!</h4>
				<br>
				<p>
					PHONE: 519-797-5862<br>
					EMAIL: info@chantryisland.com
				</div>
			</div>
			<div class="col-xs-12 col-md-12 book-main"><br><br>
				<div class="col-md-6 col-md-offset-1 book-text">
					<h2>SCHEDULE FOR <?php echo $row['tour_year']; ?></h2>
					<br><br>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>DATES</th>
								<th>HOURS</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>May (Weekend only, 27, 28)</td>
								<td>1:00 PM and 3:00 PM </td>
								
							</tr>
							<tr>
								<td>June (Weekends only)</td>
								<td>1:00PM and 3:00PM </td>
								
							</tr>
							<tr>
								<td>July (Week days)</td>
								<td>1:00PM and 3:00PM</td>
							</tr>
							<tr>
								<td>July (Weekends)</td>
								<td>9:30AM, 1:00PM and 3:00PM</td>
							</tr>
							<tr>
								<td>August (7 days a week)</td>
								<td>9:30AM, 1:00PM and 3:00PM</td>
							</tr>
								<tr>
								<td>Sept. (1, 2, 3, 4)</td>
								<td>1:00PM and 3:00PM</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<br><br><br>		<br><br><br>
		</div>
	</section>
	<?php endwhile; ?>