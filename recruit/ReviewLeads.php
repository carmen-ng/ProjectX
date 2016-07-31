<!DOCTYPE html> 
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

	<meta name="HandheldFriendly" content="true"> 
	<title>Recruit</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="re.css">
	<script type="text/javascript">var hide_awf_Form = true;</script>
	<script type="text/javascript">
		document.addEventListener("touchstart", function() {}, true);
	</script>
	<script src="lightbox-form.js" type="text/javascript"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">


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
			<!--begin header-->
			<header>
			<h1>Review Leads</h1>
			</header>            
			<!--end header-->

			
			<!--begin buttons-->
			<!--start of commenting out buttons
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
			<!--end buttons and commenting-->
					

			<!--Search Bar-->	
			
			<section id="searchbar">
				
				<div>
				<li><form class="search-container" onclick="document.getElementById('lightbox').style.display='inline';">
				  <input id="search-box" type="text" class="search-box" name="q" />
				  <label for="search-box"><span class="glyphicon glyphicon-search search-icon"></span></label>
				  <input type="submit" id="search-submit" />
				</form>
				</li>
				</div>

				<!--ADVANCED SEARCH IN SEARCH BAR-->
				<div>
				<li>
				<a href="#" onClick="openbox('Advanced Search', 0)">Advanced Search</a>
				</li>
				</div>

				<!--SEARCH ICON IN SEARCH BAR-->
				<div>
				<li>			
				<button class="searchicon" name="searchbtn1" onclick="document.getElementById('lightbox').style.display='inline';">
				<img src="../images/icon-search.png">
				</button>
				</li>
				</div>
			</section>


			<!-- ADVANCED SEARCH LIGHTBOX CODE BEGINS -->
			<br>

			<div id="shadowing"></div>
			<div id="box">
			  <span id="boxtitle"></span>
			  <form action="SearchLeadsAdv.php" method="post">
			      
				<h2>NAME</h2>
 						<table width="84%">
 						<tr>	
 						<td width="12%">
 						  <label>First name:</label></td>
 						  <td width="25%">
 						  <input type="text" name="firstName1" class="fn formName"></td>
 						  <td width="2%">
 						 <label class="labelMi">M.I:</label></td>
 						  <td width="8%">
 						  <input type="text" name="middleInitial" class="mi formName"></td>
 						  <td  width="12%">
 						 <label class="labelLn">Last name:</label></td>
 						  <td width="25%">
						  <input type="text" name="lastName1" class="ln formName"></td>
						</tr>
 						</table>

 						<h2>LOCATION</h2>
						  <label>Street Address 1:</label>
						  <input type="text" name="streetAddress1" class="s1 formName">
						  <br><br>
						  <label>Street Address 2:</label>
						  <input type="text" name="streetAddress2" class="s2 formName">
							<br><br>
						  <label class="labelCity">City:</label>
						  <input type="text" name="city" class="city formName">
							<br><br>
						  <label class="labelZip">Zip:</label>
						  <input type="text" name="zip" class="zip formName">
							<br><br>

						<label class="labelState">State:</label>
						  <select name="recState" class="state">
						  	<option value="None">-- Please select a state --</option>
						    <option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						  </select><br><br>


						  <h2>CONTACT INFORMATION</h2>
  						  <label class="labelPhoneOne">Primary Phone Number:</label>
  						  <input type="text" name="phone" class="phone1 formName">
  						  <br><br>
  						  <label class="labelPhone2">Secondary Phone Number:</label>
  						  <input type="text" name="phone2" class="phone2 formName">
  						  <br><br>

						  	<label class="email">Primary E-mail:</label>
 						  <input type="text" name="email" class="email1 formName">
  						  <br><br>
						  	<label class="email2">Secondary E-mail:</label>
 						  <input type="text" name="email2" class="email2 formName">
  						  <br><br>


  						  <h2>LANGUAGE</h2>
 						  <table width="85%">
 							<tr>
	 						<td width="27%">
	 							<label class="labelLang1">Primary Spoken Language:</label>
		 					</td>
		 					<td width="38%">
		 						<input type="text" name="lang" class="lang1 formName">
		 					</td>
		 					<td width=""><td>
		 					</tr>
		 				  </table><br>

		 				  <table width="85%">
		 				  <tr>
 						  <td width="27%">
  						  <label class="labelLang2">Secondary Spoken Language:</label>
 						  </td>
 						  <td width="38%">
  						  <input type="text" name="lang2" class="lang2 formName">
  						    </td>
 						  <td width="10%">
  						  <label class="labelLang2">Proficiency:</label>
 						  </td>
 						  <td width="25%">
  						  <select name="proficiency2" class="proficiency2">
  						  	<option value="None">-- Any --</option>
  						  	<option value="elementary">Elementary</option>
  						  	<option value="limited">Limited</option>
  						  	<option value="professional">Professional</option>
  						  	<option value="fluent">Fluent</option>
  						  </select>
        
  						  </td>
  						  </tr>
  						  </table><br>

  						  <table width="85%">
 						  <tr>
 						<td width="27%">
  						  <label class="labelLang3">Tertiary Spoken Language:</label>
 						  </td>
 						<td width="38%">
  						  <input type="text" name="lang3" class="lang3 formName">
						 </td>
 						<td width="10%">
 						  <label class="labelLang2">Proficiency:</label>
 						   </td>
 						<td width="25%">	
  						  <select name="proficiency3" class="proficiency3">
  						  	<option value="None">-- Any --</option>
  						  	<option value="elementary">Elementary</option>
  						  	<option value="limited">Limited</option>
  						  	<option value="professional">Professional</option>
  						  	<option value="fluent">Fluent</option>
						</select></td>
						</tr>
						</table>

						<br><br>
   				
 		  				  <br><br>
 
 						   <h2>HIGH SCHOOL DIPLOMA OR GED</h2>
 								   <input type="hidden" name="ged" value="0">
 								   <input type="checkbox" name="ged" value="1">
 								   <label class="ged hsGed">GED</label>
 								   <br><br>
 						   <table width="85%">
 						   	<tr>
 								<td width="16%">
 								   <input type="hidden" name="diploma" value="0">
 								   <input type="checkbox" name="diploma" value="1">
								   <label class="highSchool hsGed">High School</label>
 								</td>
 								<td width="29%">
								   <input type="text" name="highschool" class="hs formName">
 								</td>
 								<td width="5%"></td>
 								<td width="18%">
 								   <label class="gradYear">Year Graduated: </label>
 								</td>
 								<td width="17%">
 								   <input type="text" name="hsgradYear" class="hsgradForm formName">
 								</td>
 							</tr>
 							</table><br><br><br>

 							<h2>HIGHER EDUCATION</h2> 
 						   <!--<input type="hidden" name="higherEd" value="0">
 						   <input type="checkbox" name="higherEd" value="1">
 						   <label class="higherEd">Yes</label>
 						   <input type="hidden" name="higherEd" value="0">
 						   <input type="checkbox" name="higherEd" value="1">
 						   <label class="higherEd">No</label><br><br>-->
 						   <label class="higherEd">College/University:</label>
 					       <input type="text" name="university" class="gradForm formName"><br><br>
 					       <label class="higherEd">Degree:</label>
 					       <input type="text" name="degree" class="gradForm formName"><br><br>
 						   <label class="higherEd">Graduation Year:</label>
 					       <input type="text" name="hegradYear" class="gradForm formName">
 					       <h2>MOST RECENT WORK EXPERIENCE</h2>
 					  <label class="expText">Company Name:</label>
 					  	<input type="text" name="company" class=" coForm formName">
 					  	<br><br>
					  <label class="expText coTitle">Title:</label>
 	  				  	<input type="text" name="title" class="coForm formName">
 							<br><br>
 	  				  <label class="expText datesWorked">Dates Worked:</label>
 	  				  <div class="datesWorkedToFrom">
 	  				  	<input type="date" class="workedFrom" name="startDate">
 	  				  	<!-- <p class="datesWorkedP">-</p> -->
	  				  	<input type="date" class="workedTo" name="endDate"></div>
	  				  	<br><br><br>
	  				  <h2>2ND MOST RECENT WORK EXPERIENCE</h2>
					  <label class="expText">Company Name:</label>
					  	<input type="text" name="company2" class="coForm formName">
 					  	<br><br>
 					  <label class="expText coTitle">Title:</label>
 	  				  	<input type="text" name="title2" class="coForm formName">
 							<br><br>
 	  				  <label class="expText datesWorked">Dates Worked:</label>
 	  				  <div class="datesWorkedToFrom">
 	  				  	<input type="date" class="workedFrom" name="startDate2">
 	  				  	<!-- <p class="datesWorkedP">-</p> -->
 	  				  	<input type="date" class="workedTo" name="endDate2">
 	  				  </div>
 	  				  	<br><br><br>
 
 	  				  	<h2>LICENSES & STATE OF RESIDENCY</h2>
 	  				  	<input type="checkbox" class="licenseBox" name="PC" value="P&C">
						  <label class="licenseText">P&C</label>
						  <select name="PCState" class="stateLicense">
						  	<option value="None">-- Please select a state --</option>
						    <option value="AL">AL</option>
							<option value="AK">AK</option>
							<option value="AZ">AZ</option>
							<option value="AR">AR</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CT">CT</option>
							<option value="DE">DE</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="ID">ID</option>
							<option value="IL">IL</option>
							<option value="IN">IN</option>
							<option value="IA">IA</option>
							<option value="KS">KS</option>
							<option value="KY">KY</option>
							<option value="LA">LA</option>
							<option value="ME">ME</option>
							<option value="MD">MD</option>
							<option value="MA">MA</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MS">MS</option>
							<option value="MO">MO</option>
							<option value="MT">MT</option>
							<option value="NE">NE</option>
							<option value="NV">NV</option>
							<option value="NH">NH</option>
							<option value="NJ">NJ</option>
							<option value="NM">NM</option>
							<option value="NY">NY</option>
							<option value="NC">NC</option>
							<option value="ND">ND</option>
							<option value="OH">OH</option>
							<option value="OK">OK</option>
							<option value="OR">OR</option>
							<option value="PA">OA</option>
							<option value="RI">RI</option>
							<option value="SC">SC</option>
							<option value="SD">SD</option>
							<option value="TN">TN</option>
							<option value="TX">TX</option>
							<option value="UT">TY</option>
							<option value="VT">VT</option>
							<option value="VA">VA</option>
							<option value="WA">WA</option>
							<option value="WV">WV</option>
							<option value="WI">WI</option>
							<option value="WY">WY</option>
						  </select><br>

		  				  <!--<input type="hidden" class="licenseBox" name="series12" value="0"> -->
		  				  <input type="checkbox" class="licenseBox" name="series12" value="Series 12">
		  				  <label class="licenseText">Series 12</label>
		  				  <select name="series12State" class="stateLicense">
		  				  	<option value="None">-- Please select a state --</option>
						    <option value="AL">AL</option>
							<option value="AK">AK</option>
							<option value="AZ">AZ</option>
							<option value="AR">AR</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CT">CT</option>
							<option value="DE">DE</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="ID">ID</option>
							<option value="IL">IL</option>
							<option value="IN">IN</option>
							<option value="IA">IA</option>
							<option value="KS">KS</option>
							<option value="KY">KY</option>
							<option value="LA">LA</option>
							<option value="ME">ME</option>
							<option value="MD">MD</option>
							<option value="MA">MA</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MS">MS</option>
							<option value="MO">MO</option>
							<option value="MT">MT</option>
							<option value="NE">NE</option>
							<option value="NV">NV</option>
							<option value="NH">NH</option>
							<option value="NJ">NJ</option>
							<option value="NM">NM</option>
							<option value="NY">NY</option>
							<option value="NC">NC</option>
							<option value="ND">ND</option>
							<option value="OH">OH</option>
							<option value="OK">OK</option>
							<option value="OR">OR</option>
							<option value="PA">OA</option>
							<option value="RI">RI</option>
							<option value="SC">SC</option>
							<option value="SD">SD</option>
							<option value="TN">TN</option>
							<option value="TX">TX</option>
							<option value="UT">TY</option>
							<option value="VT">VT</option>
							<option value="VA">VA</option>
							<option value="WA">WA</option>
							<option value="WV">WV</option>
							<option value="WI">WI</option>
							<option value="WY">WY</option>
						  </select><br>

		  				 <!-- <input type="hidden" class="licenseBox" name="health" value="0"> -->
		  				  <input type="checkbox" class="licenseBox" name="health" value="Health">
		  				  <label class="licenseText">Health</label>
		  				  <select name="healthState" class="stateLicense">
		  				  	<option value="None">-- Please select a state --</option>
						    <option value="AL">AL</option>
							<option value="AK">AK</option>
							<option value="AZ">AZ</option>
							<option value="AR">AR</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CT">CT</option>
							<option value="DE">DE</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="ID">ID</option>
							<option value="IL">IL</option>
							<option value="IN">IN</option>
							<option value="IA">IA</option>
							<option value="KS">KS</option>
							<option value="KY">KY</option>
							<option value="LA">LA</option>
							<option value="ME">ME</option>
							<option value="MD">MD</option>
							<option value="MA">MA</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MS">MS</option>
							<option value="MO">MO</option>
							<option value="MT">MT</option>
							<option value="NE">NE</option>
							<option value="NV">NV</option>
							<option value="NH">NH</option>
							<option value="NJ">NJ</option>
							<option value="NM">NM</option>
							<option value="NY">NY</option>
							<option value="NC">NC</option>
							<option value="ND">ND</option>
							<option value="OH">OH</option>
							<option value="OK">OK</option>
							<option value="OR">OR</option>
							<option value="PA">OA</option>
							<option value="RI">RI</option>
							<option value="SC">SC</option>
							<option value="SD">SD</option>
							<option value="TN">TN</option>
							<option value="TX">TX</option>
							<option value="UT">TY</option>
							<option value="VT">VT</option>
							<option value="VA">VA</option>
							<option value="WA">WA</option>
							<option value="WV">WV</option>
							<option value="WI">WI</option>
							<option value="WY">WY</option>
						  </select><br>
						  <!--<input type="hidden" class="licenseBox" name="life" value="0"> -->
		  				  <input type="checkbox" class="licenseBox" name="life" value="Life">
		  				  <label class="licenseText">Life</label>
		  				  <select name="lifeState" class="stateLicense">
		  				  	<option value="None">-- Please select a state --</option>
						    <option value="AL">AL</option>
							<option value="AK">AK</option>
							<option value="AZ">AZ</option>
							<option value="AR">AR</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CT">CT</option>
							<option value="DE">DE</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="ID">ID</option>
							<option value="IL">IL</option>
							<option value="IN">IN</option>
							<option value="IA">IA</option>
							<option value="KS">KS</option>
							<option value="KY">KY</option>
							<option value="LA">LA</option>
							<option value="ME">ME</option>
							<option value="MD">MD</option>
							<option value="MA">MA</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MS">MS</option>
							<option value="MO">MO</option>
							<option value="MT">MT</option>
							<option value="NE">NE</option>
							<option value="NV">NV</option>
							<option value="NH">NH</option>
							<option value="NJ">NJ</option>
							<option value="NM">NM</option>
							<option value="NY">NY</option>
							<option value="NC">NC</option>
							<option value="ND">ND</option>
							<option value="OH">OH</option>
							<option value="OK">OK</option>
							<option value="OR">OR</option>
							<option value="PA">OA</option>
							<option value="RI">RI</option>
							<option value="SC">SC</option>
							<option value="SD">SD</option>
							<option value="TN">TN</option>
							<option value="TX">TX</option>
							<option value="UT">TY</option>
							<option value="VT">VT</option>
							<option value="VA">VA</option>
							<option value="WA">WA</option>
							<option value="WV">WV</option>
							<option value="WI">WI</option>
							<option value="WY">WY</option>
						  </select><br>
		  				  <!--<input type="hidden" class="licenseBox" name="accident" value="0"> -->
		  				  <input type="checkbox" class="licenseBox" name="accident" value="Accident">
		  				  <label class="licenseText">Accident</label>
		  				  <select name="accidentState" class="stateLicense">
		  				  	<option value="None">-- Please select a state --</option>
						    <option value="AL">AL</option>
							<option value="AK">AK</option>
							<option value="AZ">AZ</option>
							<option value="AR">AR</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CT">CT</option>
							<option value="DE">DE</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="ID">ID</option>
							<option value="IL">IL</option>
							<option value="IN">IN</option>
							<option value="IA">IA</option>
							<option value="KS">KS</option>
							<option value="KY">KY</option>
							<option value="LA">LA</option>
							<option value="ME">ME</option>
							<option value="MD">MD</option>
							<option value="MA">MA</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MS">MS</option>
							<option value="MO">MO</option>
							<option value="MT">MT</option>
							<option value="NE">NE</option>
							<option value="NV">NV</option>
							<option value="NH">NH</option>
							<option value="NJ">NJ</option>
							<option value="NM">NM</option>
							<option value="NY">NY</option>
							<option value="NC">NC</option>
							<option value="ND">ND</option>
							<option value="OH">OH</option>
							<option value="OK">OK</option>
							<option value="OR">OR</option>
							<option value="PA">OA</option>
							<option value="RI">RI</option>
							<option value="SC">SC</option>
							<option value="SD">SD</option>
							<option value="TN">TN</option>
							<option value="TX">TX</option>
							<option value="UT">TY</option>
							<option value="VT">VT</option>
							<option value="VA">VA</option>
							<option value="WA">WA</option>
							<option value="WV">WV</option>
							<option value="WI">WI</option>
							<option value="WY">WY</option>
						  </select><br>
		  				  <br><br><br>

		  			  <!--
		  			  <h2>DOCUMENTS</H2>
					  <label class="resume">Resume:</label>
					  <input type="file" name="resume" class="resumeBtn" accept="file_extension">
					  <br><br>
					  <label class="coverLetter">Cover Letter:</label>
					  <input type="file" name="coverLetter" class="cvBtn" accept="file_extension">
					  <br><br><br>
					  -->


	    			<h2>SOURCE</h2>
  					 <label class="leadSource">Source of Lead:</label>
  	  				  	<input type="text" class="lead" name="sourceOfLead">
  	  				  	<br><br><br>
  	  				  	<table width="85%">
 	  				  		<tr>
 	  				  		<td width="50%">
 	  						 <label class="nom">Nominator:</label>
 	  					</td>
 	  						<td width="15%">
  	  				 	<input type="hidden" name="noNominator" value="0">
  	  				 	<input type="checkbox" name="noNominator" value="1">
  	  				 	<label class="noNom">None</label>
	  				 </td>
	  				 	<!--
 	  				 	<td width="15%">
 	  				 	<input type="hidden" name="abc" value="0">
 	  				 	<input type="checkbox" name="abc" value="1">
 	  				 	<label>ABC</label></td>
 	  				 	-->
 	  				 	<td width="20%">
  	  				 	<input type="hidden" name="yesNominator" value="0">
  	  				 	<input type="checkbox" name="yesNominator" value="1">
  	  				 	<label class="yesNom">Yes</label>
  	  				 	 </td>

 	  				</tr></table><br>
 	  				<table width="84%">
 	  					<tr>
 	  					<td width="47%"><label>If Yes:</label></td>
 	  					<td width="19%"><input type="text" class="yesNomName" name="nomfirstName" placeholder="First name"></td>
 	  					<td width="19%"><input type="text" class="yesNomName" name="nomlastName" placeholder="Last name"></td>
 	  					<td width="12%"><input type="text" class="yesNomName" name="nomwritingNo" placeholder="Writing #"></td>
 	  					</tr>
 	  				</table>
 	  				 	<br><br>
 	  				 	<h2>APPLIED FOR</h2>
  	  				 	<label>Assigned District:</label>
  	  				 	<input type="text" class="assDist" name="district">
  	  				 	<br><br><br>
  	  				 	<label class="lblProcess">Position:</label>
 	  				 	 <select name="position" class="positionApplied">
 	  				 	 	<option value="None">-- Any --</option>
						    <option value="Business Consultant">Business Consultant</option>
							<option value="District Manager">District Manager</option>
							<option value="Broker Consultant">Broker Consultant</option>
							<option value="Intern - Business Development">Intern - Business Development</option>
							<option value="Intern - Human Resources">Intern - Human Resources</option>
							<option value="Intern - Web Development">Intern - Web Development</option>
							<option value="Intern - Graphic Design">Intern - Graphic Design</option>
							<option value="Intern - PR & Marketing">Intern - PR & Marketing</option>
							<option value="Intern - Sales">Intern - Sales</option>
						</select><br><br>

						<h2>PROCESS LEVEL</h2>
			    		<label class="lblProcess">Process Level: </label>
			    		<input type="text" class="assDist" name="process">
			    		<!--
 	  				 	<select name="process" class="processLevel">
 	  				 		<option value="None">-- Any --</option>
						    <option value="1st Interview">1st Interview</option>
							<option value="2nd Interview">2nd Interview</option>
							<option value="Disqualified">Disqualified</option>
						</select>
						-->
						<br><br>
 
 	  				 	<label>If Disqualified, State Reason:</label>
 	  				 	<input type="text" class="disqualifyReason formName" name="disqualifyReason" placeholder="Reason for Disqualification"><br><br><BR>
 						<h2>1ST INTERVIEW</h2>
 	  				 	<label>Interviewer Name:</label>
 	  				 	<input type="text" class="interviewerName formName" name="interviewerName1" placeholder="">
 	  				 	<br><br>
 						<label class="lblInterviewTime">Interview Date/Time:</label>
 						<div class="interviewDateTime">
 	  				 	<input type="date" class="interviewDate" name="interviewDate1">
 	  				 	<input type="time" class="interviewTime" name="interviewTime1"></div><br><br>
 	  				 	<label class="lblInterviewGrade">Interview Grade:</label>
 	  				 	<select name="grade1" class="interviewGrade">
 	  				 		<option value="None">-- Any --</option>
						    <option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="N/A">N/A</option>
						</select><br><br><BR>
						<h2>2ND INTERVIEW</h2>
						<label>Interviewer Name:</label>
 	  				 	<input type="text" class="interviewerName formName" name="interviewerName2" placeholder="">
 	  				 	<br><br>
 						<label class="lblInterviewTime">Interview Date/Time:</label>
 						<div class="interviewDateTime">
 	  				 	<input type="date" class="interviewDate" name="interviewDate2">
 	  				 	<input type="time" class="interviewTime" name="interviewTime2"></div><br><br>
 	  				 	<label class="lblInterviewGrade">Interview Grade:</label>
 	  				 	<select name="grade2" class="interviewGrade">
 	  				 		<option value="None">-- Any --</option>
						    <option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="N/A">N/A</option>
						</select><br><br>
 						
 
 					<div class="submit">
 		 						<input type="submit" name="submit" value="Submit">
 		 			</div>


			    <!-- <p>First Name: 
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
			    </p> -->
			  </form>
			</div>
			<!-- ADVANCED SEARCH LIGHTBOX CODE END -->

			<!--SEARCH ICON LIGHTBOX STARTS-->

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
					      <input type="button" name="cancel" value="Cancel" onClick="closebox()">							
						</p><br><br>
			      </div>

			   </td>
			   </tr>
			   </table>
			</div>
			

			<!--SEARCH ICON LIGHTBOX ENDS-->
			

			<!-- end container -->


			<!--code for horizontal overflow bar-->
			<div class="scrollbar" style="overflow-x:auto;">
	            
	            <!--main table begins-->
	            <div id=table>
	            <table border="1" style="width:100%" class="revTable">

	                <!--begin header of table-->  
	                <tr>
	                    <th>First Name</th>
	                    <th>Last Name</th> 
	                    <th>City</th>
	                    <th>Zip</th>
	                    <th>Primary Email</th>
	                    <th>Primary Phone</th>
	                    <th>Status</th>
	                    <th>More Results</th>          
	                  </tr>
	                <!--end header-->

	                <?php
						$host = '127.0.0.1';
						$user = 'root';
						$pass = '';
						$db = 'recruiter2';
						//$db = 'recruiter';

						error_reporting(E_ALL ^ E_NOTICE);
						// Create connection
						$conn = mysqli_connect($host, $user, $pass, $db);
						// Check connection
						if (!$conn) {
						    die("Connection failed: " . mysqli_connect_error());
						}
						$rows = $conn->query("SELECT firstName,lastName,city,zip,email,phone,process FROM rec ORDER BY recID DESC LIMIT 10");
						// check first if there's an error in your query
						if ($mysqli->error) {
						    die($mysqli->error);
						}
						while(list($firstName,$lastName,$city,$zip,$email,$phone,$process)=$rows->fetch_row()) {
							$_SESSION['nombre']="$firstName";
							echo "<tr>";	
							echo "<td>$firstName</td>";
							echo "<td>$lastName</td>";
							echo "<td>$city</td>";
							echo "<td>$zip</td>";
							echo "<td>$email</td>";
							echo "<td>$phone</td>";
							echo "<td>$process</td>";
							echo "<td><a href='#profile1' onclick=\"document.getElementById('lightbox1').style.display='inline';\"><img src='../images/icon-profile-small-teal.png'></button></td>";
							echo "</tr>";
						}
					?>
	             </table>
             </div>

	</div>
		<!-- MORE RESULTS LIGHTBOX1 CODE BEGINS -->

			<div id="lightbox1" class="lightbox" style="display:none"
			    onclick="document.getElementById('lightbox1').style.display='none';">
			    <table class="lightbox_table">
			    <tr>
			    <td class="lightbox_table_cell" align="center">
			      	<div id="lightbox_content" style=
			            "width:60%; 
			            background-color:#008080; 
			            border:5px solid #008080; 
			            margin:auto;">
			        <p>

			         	<!--Begin table within lightbox-->
			         
			         	
			    <table border="1" align="center" class="litTable">
			         <h1> Carmen </h1>
			         <tr>
			         	<td>Position:</td>
			         	<td>Intern</td>
			         </tr>
			         <tr>
			         	<td>Email:</td>
			         	<td>carmenng@gmail.com</td>
			         </tr>
			         <tr>
			         	<td>Phone Number:</td>
			         	<td>(626)512-6140</td>
			         </tr>
			         
			      </div>

			   </td>
			   </tr>
			   </table>
			</div>

		<!-- MORE RESULTS LIGHTBOX1 CODE ENDS -->

		<!-- MORE RESULTS LIGHTBOX2 CODE BEGINS -->

			<div id="lightbox2" class="lightbox" style="display:none"

			      onclick="document.getElementById('lightbox2').style.display='none';">
			   <table class="lightbox_table">
			   <tr>
			   <td class="lightbox_table_cell" align="center">
			      <div id="lightbox_content" style=
			            "width:60%; 
			            background-color:#008080; 
			            border:5px solid #008080; 
			            margin:auto;">
			         <p>
			         	
			         	<!--Begin table within lightbox-->
			         <h1> Jackie Cortes </h1>
			         	
			    	<table border="1" align="center" class="litTable">
			         <tr>
			         	<td>Position:</td>
			         	<td>Intern</td>
			         </tr>
			         <tr>
			         	<td>Email:</td>
			         	<td>carmenng@gmail.com</td>
			         </tr>
			         <tr>
			         	<td>Phone Number:</td>
			         	<td>(626)512-6140</td>
			         </tr>
			         

			         </p>
			         
			      </div>

			   </td>
			   </tr>
			   </table>
			</div>

		<!-- MORE RESULTS LIGHTBOX2 CODE ENDS -->




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
</html>