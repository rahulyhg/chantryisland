<?php
require_once("../admin/phpscripts/init.php");
if(isset($_POST['name']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$msg = $_POST['message'];
$direct = "thankyou.php";
sendMessage($name, $email, $phone, $subject, $msg, $direct);
}
else
{
//echo "Please fill out the form.";
}
?>
<section id="contact">
	<h2 class="hidden">Contact Chantry Island Team</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<h2>Contact</h2>
		</div>
		<div class="col-xs-12 col-sm-offset-0 col-md-12 text-center">
			<h3>get in touch with us today.</h3>
		</div>
	</div>
	<div class="row" id="pageContent">
		<div class="col-xs-12 col-md-12 contact-main"><br><br><br>
			<div class="col-md-6 col-md-offset-2 contact-text">
				<h3>Contact</h3>
				<br>
				<div class="row">
					<form class="form-inline">
						
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Your Name">
						</div>
						<br>
						<br>
						
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Your Email">
						</div>
						<br><br>
						
						<div class="form-group">
							<input type="text" class="form-control" name="phone" placeholder="Your Phone Number">
						</div>
						<br><br>
						
						<div class="form-group">
							<input type="text" class="form-control" name="subject" placeholder="Subject">
						</div>
						<br><br>
						<div class="col-md-12">
							<textarea class="form-control" name="message"></textarea>
						</div>
					</div>
					<br><br>
					<button type="submit" class="btn btn-default" id="btnred">Submit</button>
				</form>
			</div>
			<div class="col-md-4">
				<h4>PHONE NUMBER</h4>
				<p>519-797-5862 <br>
				Toll Free: 1-866-797-5862</p>
				<br>
				<h4>MAILING ADDRESS</h4>
				<p>
					Marine Heritage Society<br>
					Box 421<br>
					Southampton, Ontario<br>
					Canada, N0H 2L0
				</p>
				<br>
				<h4>DIRECTIONS</h4>
				<p>
					From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.
				</p>
				<br>
				<h4>ADDRESS</h4>
				<p>
					86 Saugeen St.<br>
					Southampton, Ontario<br>
					Canada, N0H 2L0
				</p>
			</div>
			<br>
			<br>
			<br>
			<div class="map-wrapper"></div>
			<input type="textbox" class="form-control address" placeholder="Enter starting point">
			<button class="geocode btn btn-default" id="btnred">Get Route</button>
			<button class="streetView btn btn-default" id="btnred">Show Street View</button>
			<div class="directionsPanel"></div>
		</div>
	</div>
</section>