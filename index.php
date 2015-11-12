<!DOCTYPE html>
<html>
<head>
	<title>Saratoga Awareness</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta property="og:image" content="images/saww.png" />
	<meta property="og:title" content="Saratoga Awareness" />
	<meta property="og:description" content="The Feldenkrais Method with Evan VanDyk" />
	<link href="images/sa.png" rel="shortcut icon">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/responsive.css" media="screen and (min-width:150px) and (max-width: 1200px)" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php
    include_once("analyticstracking.php")
  ?>
	<div class="bg_wrapper">
		<div class="main-wrapper">
			<div class="top_wrapper">
				<?php
				  include('headerHome.php');
			  ?>
				<div class="row home-center" style="padding:10vh 0;">
					<div class="col-md-12">
						<?php
							include('slider.php');
						?>
					</div>
				</div>
				<div class="row" style="background:#f2f2f2">
					<a href="meetEv.php">
					<div class="col-sm-4" id="factOne">
						<h3 class="factTitle" style="margin:0 !important;padding:20px;">Meet<br>
						Evan VanDyk</h3>
						<h4 style="margin-bottom:0 !important;opacity:0.7;padding-bottom:20px;">Evan's Bio<br>
						and Testimonials</h4>
						<div class="">
							<!-- <img class="home-images" src="images/meet.png" alt="" /> -->
						</div>
					</div></a> <a href="https://clients.mindbodyonline.com/classic/home?studioid=45752" target="blank">
					<div class="col-sm-4" id="factTwo">
						<h3 class="factTitle" style="margin:0 !important;padding:20px;">Sign up for<br>
						an ATM class</h3>
						<h4 style="margin-bottom:0 !important;opacity:0.7;padding-bottom:20px;">Sunday<br>
						RAW Fitness 11:00am</h4>
						<div class="">
							<!-- <img class="home-images" src="images/signup.png" alt="" /> -->
						</div>
					</div></a> <a href="ThoughtsAndBlog.php">
					<div class="col-sm-4" id="factThree">
						<h3 class="factTitle" style="margin:0 !important;padding:20px;">Evans<br>
						Thoughts</h3>
						<h4 style="margin-bottom:0 !important;opacity:0.7;padding-bottom:20px;">Blogs and Articles<br>
						Authored by Evan</h4>
						<div class="">
							<!-- <img class="home-images" src="images/thoughts.png" alt="" /> -->
						</div>
					</div></a>
				</div>
				<div class="row">
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
	<script src="js/bootstrap.js">
	</script>

</body>
</html>
