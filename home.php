<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Project X-Home</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="home.css">
</head>
<body class="cbp-spmenu-push">
	<?php
	session_start();
	?>
	<div class="container">
		<div class="header">
			<div class="nav">
				<div class="nav-left">
					<li><a href="#"><img class="face" src="images/face.png" alt=""></a></li>
					<li><h1>John Smith</h1></li>
					<li><h1>Recruitment Director</h1></li>
					<li><h1>#<?php echo($_SESSION['userID']);?></h1></li>
					<!-- codrop nav -->
					
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
						<h3>Human Resources</h3>
						<a href="#">Calender</a>
						<a href="#">Menu2</a>
						<a href="#">Menu3</a>
						<a href="#">Menu Item</a>
					</nav>
					<!-- end codrop -->
					<!-- end .nav-left -->
				</div>
				<div class="nav-right">
					<li><a href="home.php" class="active"><img class="nav-logo" src="images/icon-home.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="images/icon-cal.png" alt=""></a></li>
					<li><a href="recruit/dashRec.php"><img class="nav-logo" src="images/icon-rec.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="images/icon-hr.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="images/icon-leads.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="images/icon-sales.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="images/icon-accounts-temp.png" alt=""></a></li>
					<!-- end .nav-right -->
				</div>
				<!-- end .nav -->
			</div>
			<div class="body">
						<div class="left"></div>
						<div class="middle">
							<div class="calendar">
								<div class="content">
									<label class="titletext"><a href="#">Calendar</a></label><br><br>
									<div class="cal_today">
										<label class="subtitle">Today</label><br><br>
										10:30AM		Interview with John Smith <br><br>
										11:00AM		Meeting
									</div>
									<div class="cal_tmr">
										<label class="subtitle">Tomorrow</label><br><br>
										2:00PM		Interview with Jane Doe
									</div>

								</div>
							</div>
							<div class="logs">
								<div class="content">
									<label class="titletext">Logs</label><br><br>
								</div>
							</div>
							<!-- end middle -->
						</div>	
						<div class="right">
							<div class="right-left"></div>
							<div class="right-right"></div>
							<div class="right-top"></div>
							<div class="right-bottom"></div>  
						</div>
						


						<!-- end .body -->
					</div>






				
	<!-- end container -->
	</div>
	<script src="js/classie.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
			}
		</script>
</body>
</html>