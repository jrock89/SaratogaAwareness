<html>
<head>
	<title>Evan VanDyk</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen and (min-width:150px) and (max-width: 1200px)">
      <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="scripts/main.js"></script>
</head>
<body>

	<!-- grab page header -->

    <!-- Body for signup page -->
	<div class="signupBody">		
		
		    <?php
        include('headerHome.php');
    ?>


			<h1 class="signTitle">Please choose a class time below</h1>

			<!-- Box around the class choices -->
			<div class="chooseClass">

			
							<!-- grab info and build class boxes -->
							<?php
							    require 'CRUD/database.php';

					            $pdo = Database::connect();
					            
					            $nRows = $pdo->query('select count(*) from ClassList')->fetchColumn();
					            $spotsLeft = 10 - $nRows;
			
					            $nRowsTwo = $pdo->query('select count(*) from ClassListTwo')->fetchColumn();
					            $spotsLeftTwo = 10 - $nRowsTwo;

					            print '<a href="#popup-box" class="popup-window">';
					            print '<div id="info">';
					            print '<h2>class availability</h2>';
					            print '<div id="className">';
					            print 'Awareness Through Movement';
					            print '</div>';
					            print '<div id="availability">';
					            print '<p id="spots">';
					            print $spotsLeft;
					            print '</p>';
					            print '<p>spots left for</p>';
					            print '<p id="classDate"></p>';
					            print '<p id="classTime">11:30am</p>';
					            print '</div>';
					            print '</div>';
					            print '</a>';

					            print '<a href="#popup-box-two" class="popup-window">';
					            print '<div id="info">';
					            print '<h2>class availability</h2>';
					            print '<div id="classNameTwo">';
					            print 'Awareness Through Movement';
					            print '</div>';
					            print '<div id="availabilityTwo">';
					            print '<p id="spotsTwo">';
					            print $spotsLeftTwo;
					            print '</p>';
					            print '<p>spots left for</p>';
					            print '<p id="classDateTwo"></p>';
					            print '<p id="classTimeTwo">1:00pm</p>';
					            print '</div>';
					            print '</div>';
					            print '</a>';

						        Database::disconnect();
							?>
	
				<!-- </a> -->

				<!-- second class box -->
				<!-- <a href="#popup-box-two" class="popup-window">
					<div id="info">
						<h2>class availability</h2>
						<div id="classNameTwo">
							Awareness Through Movement
						</div>
						<div id="availabilityTwo">

							<p id="spotsTwo"></p>
							

							<p>spots left for</p>
							<p id="classDateTwo"></p>
							<p>1:00pm</p>

						</div>
					</div>
				</a>	 -->

			</div>	

			<!-- background overlay for popup window -->
			<div id="mask"></div>

			<!-- popup box w/ form -->
			<div id="popup-box" class="popupInfo">
				<!-- <iframe name="hiddenFrame" class="hide"></iframe> -->

<!-- 		        <form class="loginForm" action="visitorCreate.php" method="POST">
		            <div class="signupFName" id="signupFormInput">
		                <p>Name: <input type="text" name="name" required></p>
		            </div> 
		            <div class="signupFEmail" id="signupFormInput">
		                <p>Email: <input type="text" name="email" required></p>
		            </div> 
		            <div class="signupFPhone" id="signupFormInput">
		                <p>Phone: <input type="text" name="phone" required></p>
		            </div> 
		            <div class="signIn">
		                <input type="submit" name="submit" value="Sign In">
		            </div>
		            <div>
		                <input type="reset" name="reset" value="Clear">
		            </div>

		        </form> -->

		        <form class="row" action="CRUD/visitorCreate.php" method="POST">
				  
				  
				        <h1>Sign up for 11:30am Class</h1>
				    
				  <span>
				    <input class="gate" id="nameGate" type="text" name="name" placeholder="Your prefered name!" required><label for="class">Name</label>
				  </span>
				  <span>
				    <input class="gate" id="emailGate" type="text" name="email" placeholder="Your favorite email!" required><label for="element">Email</label>
				  </span>
				  <span>
				    <input class="gate" id="phoneGate" type="text" name="phone" placeholder="Your phone number!" required><label for="move">Telephone</label>
				  </span>
				  <br>
				  <span>
				    <input class="submit" type="submit" value="Sign Up" name="submit">
				  </span>
				 
				  <span>
					<button type="button" class="close">Close</button>
				  </span>	
				</form>

				

			</div>

			<div id="popup-box-two" class="popupInfo">
				<!-- <iframe name="hiddenFrame" class="hide"></iframe> -->
<!-- 
		        <form class="loginForm" action="visitorCreateTwo.php" method="POST">
		            <div class="signupFName" id="signupFormInput">
		                <p>Namee: <input type="text" name="name" required></p>
		            </div> 
		            <div class="signupFEmail" id="signupFormInput">
		                <p>Email: <input type="text" name="email" required></p>
		            </div> 
		            <div class="signupFPhone" id="signupFormInput">
		                <p>Phone: <input type="text" name="phone" required></p>
		            </div> 
		            <div class="signIn">
		                <input type="submit" name="submit" value="Sign In">
		            </div>
		            <div>
		                <input type="reset" name="reset" value="Clear">
		            </div>

		        </form> -->



		        <form class="row" action="CRUD/visitorCreateTwo.php" method="POST">
				  
				  
				        <h1>Sign up for 1:00pm Class</h1>
				    
				  <span>
				    <input class="gate" id="nameGate" type="text" name="name" placeholder="Your prefered name!" required><label for="class">Name</label>
				  </span>
				  <span>
				    <input class="gate" id="emailGate" type="text" name="email" placeholder="Your favorite email!" required><label for="element">Email</label>
				  </span>
				  <span>
				    <input class="gate" id="phoneGate" type="text" name="phone" placeholder="Your phone number!" required><label for="move">Telephone</label>
				  </span>
				  <br>
				  <span>
				    <input class="submit" type="submit" value="Sign Up" name="submit">
				  </span>
				  
				  <button type="button" class="close">Close</button>
				
				</form>
	<!-- 	        <div class="closeMe">
			        <div class="hamXOne"></div>
			        <div class="hamXTwo"></div>
		        </div> -->
				

			</div>

	</div>

	<!-- grabs page footer -->
	<?php
		include('mailinglist.php');
	    include('footer.php');
	?>
	
	<!-- scripts for this page most be moved when live -->
	<script type="text/javascript">
		
		//following script is for the current available classes
		// function ATMClass(name, spots, booked){
		// 	this.name = name;
		// 	this.spots = spots;
		// 	this.booked = booked;
		// 	this.checkAvailability = function(){
		// 		return this.spots - this.booked;
		// 	};
		// }

		// var theDate = new Date();
		// var daysAway = 6 - theDate.getDay();
		// var nextSunday = daysAway + 7 * 24 * 60 * 1000;
		
		$('a.popup-window').click(function(){
			var popupBox = $(this).attr('href');
			$(popupBox).fadeIn(400);
			$('#mask').fadeIn(400);

			var popMargTop, popMargLeft;

			return false;
		});

		$('button.close, #mask').click( function(){

			$('#mask , .popupInfo').fadeOut(400, function(){
				$('#mask').fadeOut();
			});

			return false;
		});

		$(document).keyup(function(e){
			if(e.keyCode == 27){
				$('#mask, .popupInfo, #popup-box').fadeOut(400);
				return false;
			}

		});


		var nextClassDate;
		var today;
		var elEnds;


		function nextClass(today){
			var nextSunday, day, date, month, year, dayNames, monthNames, daysAway;

			var theDate = new Date();
			var daysAway = 7 - theDate.getDay();

			nextSunday = new Date(today.getTime() + daysAway * 24 * 60 * 60 * 1000);

			dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
			monthNames = ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

			day = dayNames[nextSunday.getDay()];
			date = nextSunday.getDate();
			month = monthNames[nextSunday.getMonth()];
			year = nextSunday.getFullYear();

			nextClassDate = day + ' ' + month + ' ' + date + ' ';
			return nextClassDate;
		}

		today = new Date();
		elEnds = document.getElementById('classDate');
		elEnds.textContent = nextClass(today);

		elEnds = document.getElementById('classDateTwo');
		elEnds.textContent = nextClass(today);







	</script>

























</body>
</html>