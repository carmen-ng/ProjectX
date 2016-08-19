<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Recruit</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="re.css">
</head>
<body class="cbp-spmenu-push">
	<div class="container">
		<div class="header">
			<div class="nav">
				<div class="nav-left">
					<li><a href="#"><img class="ham" id="showLeft"src="images/ham.png" alt=""></a></li>
					<li><a href="#"><img class="face" src="images/face.png" alt=""></a></li>
					<li><a href="#"><h1>Asc Name</h1></a></li>
					<li><a href="#"><h1>Position</h1></a></li>
					<li><a href="#"><h1>Writing #</h1></a></li>
					<!-- codrop nav -->
					
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
						<h3>Recruitment</h3>
						<a href="createRec.php">Create a Lead Profile</a>
						<a href="createUser.php">Create an User</a>
						<a href="#">Search Recruit Leads</a>
						<a href="ReviewLeads.php">View Recruit Leads</a>
						<a href="#">Menu Item</a>
					</nav>
					<!-- end codrop -->
					<!-- end .nav-left -->
				</div>
				<div class="nav-right">
					<li><a href="../home.php"><img class="nav-logo" src="../images/icon-home.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-cal.png" alt=""></a></li>
					<li><a href="dashRec.php" class="active"><img class="nav-logo" src="../images/icon-rec.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-hr.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-leads.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-sales.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-accounts-temp.png" alt=""></a></li>
					<li><a href="#"><img class="logo-last nav-logo " src="../images/logo.png" alt=""></a></li>
					<!-- end .nav-right -->
				</div>
				<!-- end .nav -->
			</div>
			<!-- end header -->
		</div>
		<div class="body">
			
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