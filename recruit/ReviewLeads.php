﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Recruit</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="re.css">
	<script type="text/javascript">var hide_awf_Form = true;</script>
	<script type="text/javascript">
		document.addEventListener("touchstart", function() {}, true);
	</script>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<script src="lightbox-form.js" type="text/javascript"></script>

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
						<a href="createRec.html">Create a Lead Profile</a>
						<a href="#">Search Recruit Leads</a>
						<a href="ReviewLeads.html" class="active">View Recruit Leads</a>
						<a href="#">Menu Item</a>
					</nav>
					<!-- end codrop -->
					<!-- end .nav-left -->
				</div>
				<div class="nav-right">
					<li><a href="../home.html"><img class="nav-logo" src="../images/icon-home.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-cal.png" alt=""></a></li>
					<li><a href="dashRec.html" class="active"><img class="nav-logo" src="../images/icon-rec.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-hr.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-leads.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-sales.png" alt=""></a></li>
					<li><a href="#"><img class="nav-logo" src="../images/icon-accounts-temp.png" alt=""></a></li>
					<li><a href="#"><img class="logo-last nav-logo " src="../images/logo.png" alt=""></a></li>

					<li>
					
					</li>
					<!-- end .nav-right -->
				</div>
				<!-- end .nav -->
			</div>
			<!-- end header -->
		</div>

		<div class="body revBody">
            <!--begin buttons-->
			<div id="divone">
                <p>Booking</p>
			</div>

			<div id="divtwo">
			    <p>1st Interview</p>
			</div>	

			<div id="divthree">
			    <p>2nd Interview</p>
			</div>

            <div id="divfour">
			    <p>Pre-Licensing</p>
			</div>

			<div id="divfive">
			    <p>Contract Offer</p>
			</div>

			<br><br>
			<!--Search Bar-->	
			
			<!-- 
			<form class="search-container" onclick="document.getElementById('lightbox').style.display='inline';">
			  <input id="search-box" type="text" class="search-box" name="q" />
			  <label for="search-box"><span class="glyphicon glyphicon-search search-icon"></span></label>
			  <input type="submit" id="search-submit" />
			</form>

			-->
			
			<button name="searchbtn1" onclick="document.getElementById('lightbox').style.display='inline';">
			<img src="../images/icon-search.png">
			</button>


			<a href="#" onClick="openbox('Advanced Search', 0)">Advanced Search</a>


			<!-- LIGHTBOX CODE BEGIN -->

			<br>

			<div id="shadowing"></div>
			<div id="box">
			  <span id="boxtitle"></span>
			  <form method="GET" action="SearchLeads.html" target="_parent">
			      
			    <p>First Name: 
			      <input type="text" name="email" value="First Name" maxlength="60" size="60">
			    </p>

			    <p>Last Name: 
			      <input type="text" name="email" value="Last Name" maxlength="60" size="60">
			    </p>
			      
	      		
			    <p> City of current residence 
			      <select name="select">
			        <option selected>Los Angeles</option>
			        <option>Pasadena</option>
			        <option>Arcadia</option>
			        <option>Chino Hills</option>
			        <option>West Covina</option>
			      </select>
			    </p>

			    <p>1st Interview 
			      <input type="radio" name="genre" value="first" checked>
			    </p>
			    <p> 
			      2nd Interview 
			      <input type="radio" name="genre" value="second">
			    </p>

			    <p> 
			      <input type="submit" name="submit">
			      <input type="button" name="cancel" value="Cancel" onClick="closebox()">
			    </p>
			  </form>
			</div>


			<div id="lightbox" class="lightbox" style="display:none">
			   <table class="lightbox_table">
			   <tr>
			   <td class="lightbox_table_cell" align="center">
			      <div id="lightbox_content" style=
			            "width:700px; height 500px;
			            background-color:#008a91; 
			            border:5px solid #008a91;
			            margin:auto;">


			            <p>
			         		<form action="SearchLeads.php" method="post">
				 			 <input type="text" name="search" placeholder="Search..">
				 			 <input type="submit" name="searchbtn" value="Search">
				 			
				 				<select name="searchOption">
								  <option value="firstName">First Name</option>
								  <option value="lastName">Last Name</option>
								  <option value="city">City</option>
								  <option value="zip">Zip</option>
								  <option value="license">License</option>
								  <option value="email">Email</option>
								  <option value="contact">Contact</option>
								</select>  
				 			</form>							
						</p><br><br>
			      </div>

			   </td>
			   </tr>
			   </table>
			</div>

<!-- LIGHTBOX CODE END -->

            <!--end buttons>
		<!-- end container -->



            <!--table begins-->
            <table border="1" style="width:100%" class="revTable">
                <!--begin header of table-->  
                <tr>
                    <th>Name</th>
                    <th>Position</th> 
                    <th>Source</th>
                    <th>Process</th>
                    <th>E-mail Address</th>
                    <th>Number</th>
                    <th>Interview</th>
                    <th>Interviewer</th>
                    <th>Resume</th>
                    <th>Grade</th>          
                  </tr>
                <!--end header-->
                <!--begin first row-->
                  <tr>
                      <td>John Smith</td>
                      <td> Business Consultant</td>
                      <td>Russell Stanberry</td>
                      <td>1st Interview</td>
                      <td>johnsmith@gmail.com</td>
                      <td>(555) 555-5555</td>
                      <td>03/03/16 12:00PM</td>
                      <td>Joe Crilly</td>
                      <td>View</td>
                      <td>B/Survive</td>
                  </tr>
                <!--end first row-->
                <!--begin second row-->
                  <tr>
                      <td>Jane Doe</td>
                      <td>Broker Consultant</td>
                      <td>Monster.com</td>
                      <td>2st Interview</td>
                      <td>janedoe@gmail.com</td>
                      <td>(555) 555-5555</td>
                      <td>03/03/16 12:00PM</td>
                      <td>Joe Crilly</td>
                      <td>View</td>
                      <td>B</td>
                  </tr>
                <!--end second row-->
             </table>

	</div>



	<script src="js/classie.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script>
	    var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;
	    showLeft.onclick = function () {
	        classie.toggle(this, 'active');
	        classie.toggle(menuLeft, 'cbp-spmenu-open');
	        disableOther('showLeft');
	    };
	    function disableOther(button) {
	        if (button !== 'showLeft') {
	            classie.toggle(showLeft, 'disabled');
	        }
	    }
		</script>
</body>
</html>