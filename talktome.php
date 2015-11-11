<!DOCTYPE html>
<html>
<head>
	<title>Evan VanDyk | Contact</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="images/sa.png" rel="shortcut icon">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" media="screen and (min-width:150px) and (max-width: 1200px)" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<?php
    include_once("analyticstracking.php")
  ?>
	<div class="bg_wrapper">
		<div class="oneBox" id="contactPage">
			<?php
			   include('headerHome.php');
			?>
			<div class="row" style="background: rgba(255, 255, 255, 0.7);">
				<div class="col-sm-12" id="sayHiBox">
					<div class="row">
						<div class="col-md-6">
							<div class="inner_info_box contact_info" style="margin-bottom:20px;text-align:center;">
								<a href="https://goo.gl/maps/A2x6mfugB5S2" style="color:#000 !important" target="blank">
								<div class="row contact_in_box" style="margin-bottom:15px !important;border:3px solid rgba(220, 220, 220, 0.95);padding:15px 5px;border-radius:6px;">
									Group classes: <i style="opacity:0.7;">Raw Fitness</i><br>
									51 Caroline Street<br>
									Saratoga Springs, NY 12866<br>
									<i style="opacity:0.6;">Corner of Caroline and Henry Street</i>
								</div></a> <a href="http://www.bodyworkprofessionals.com/" style="color:#000 !important" target="blank">
								<div class="row contact_in_box" style="margin-bottom:15px !important;border:3px solid rgba(220, 220, 220, 0.95);padding:15px 5px;border-radius:6px;">
									One-on-one: <i style="opacity:0.7;"></i><br>
									<i style="opacity:0.6;">Visit Bodywork Professionals for a one on one session with Evan</i>
								</div></a> <a href="tel:518-368-9112" style="color:#000 !important">
								<div class="row contact_in_box" style="margin-bottom:15px !important;border:3px solid rgba(220, 220, 220, 0.95);padding:15px 5px;border-radius:6px;">
									518.368.9112
								</div></a> <a href="mailto:Evander08@hotmail.com" style="color:#000 !important">
								<div class="row contact_in_box" style="margin-bottom:15px !important;border:3px solid rgba(220, 220, 220, 0.95);padding:15px 5px;border-radius:6px;">
									Evander08@hotmail.com
								</div></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="inner_info_box">
								<form action="contact.php" method="post">
									<div class="contact-ev-box">
										<input class="detailInput" name="name" placeholder="Name" required="" type="text" width="100px;"> <input class="detailInput" name="email" placeholder="Email" required="" type="email">
										<textarea cols="15" id="message" name="message" placeholder="Message" required="" rows="10">
                    </textarea>
										<div id="subButton">
											<input class="submitButton" id="submit" type="submit" value="Send Message">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12" style="margin:0;padding:0">
					<?php
						include('mailinglist.php');
						include('footer.php');
					?>
				</div>
			</div>
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
	</script>
	<script src="scripts/main.js">
	</script>
	<script src="scripts/waypoints.js">
	</script>
	<script src="js/bootstrap.js">
	</script>
</body>
</html>
