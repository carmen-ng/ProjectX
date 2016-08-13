<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Search</title>
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="se.css">
	<script type="text/javascript">var hide_awf_Form = true;</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<script>
 		$(document).ready(function(){
  	 		$('table.revTable tr td#bcard').click(function(){
          	//alert($(this).closest('tr').find('td:first').text());
          	var varid = $(this).closest('tr').find('td:first').text();
          	//alert(x); 
           showUser(varid);
          	//document.getElementById('lightbox1').style.display='inline';
    		});
  		});
  		function showUser(varid)
  		{
  			//alert(varid); 
    		if (varid == "") 
    		{
        		document.getElementById("txtHint").innerHTML = "";
        		return;
    		} 
    		else 
    		{ 
        		if (window.XMLHttpRequest) 
        		{
            		// code for IE7+, Firefox, Chrome, Opera, Safari
            		xmlhttp = new XMLHttpRequest();
        		} 
        		else 
        		{
            		// code for IE6, IE5
            		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        		}
        		xmlhttp.onreadystatechange = function() {
            		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            		{
                		document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            		}
        		};
        		xmlhttp.open("GET","getuser.php?q="+varid,true);
        		xmlhttp.send();
    		}
		}
 
  	</script>

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
						<a href="#">Search Recruit Leads</a>
						<a href="ReviewLeads.php" class="active">View Recruit Leads</a>
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

		<div class="body revBody">
            <!--begin buttons-->
			<header>
			<h1>More Results : <?php echo $_POST[searchOption] ?></h1>
			</header>

		

            <!--end buttons>
		<!-- end container -->

			<?php
			$servername = "127.0.0.1";
			$username = "root";
			$password = "";
			$dbname = "recruiter2";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
     			die("Connection failed: " . $conn->connect_error);
			} 
			$fromvar1 = 'rec r';
			echo "hi";
            $selectvar = $_POST[searchOption];
            echo $selectvar;
			if(isset($_POST[searchOption]))
			{
				//echo "hi";
				$selectvar = $_POST[searchOption];
				switch ($selectvar)
				{
					case 'firstName' :
						//echo "FirstName selected";
						$wherevar = "firstName LIKE '%{$_POST[search]}%'";
        				$fromvar = $fromvar1;
        
						break;
					case 'lastName' :
						//echo "lastName selected";
						$wherevar = "lastName LIKE '%{$_POST[search]}%'";
        				$fromvar = $fromvar1;
        				break;
        			case 'city' :
						//echo "city selected";
						$wherevar = "city LIKE '%{$_POST[search]}%'";
        				$fromvar = $fromvar1;
        				break;
        			case 'zip' :
						//echo "zip selected";
						$wherevar = "zip LIKE '%{$_POST[search]}%'";
        				$fromvar = $fromvar1;
        				break;
        			case 'license' :
						//echo "license selected";
						$wherevar = "rl.licenseID LIKE '%{$_POST[search]}%'";
        				$fromvar = "rec r
                    				inner join 
                    				recLicense rl
                    				on r.recID = rl.recID
                    				inner join license l
                    				on rl.licenseID = l.licenseID" ;
        				break;
        			case 'email' :
						//echo "email selected";
						$wherevar = "email LIKE '%{$_POST[search]}%'";
        				$fromvar = $fromvar1;
        				break;
        			case 'contact' :
						//echo "contact selected";
						$wherevar = "phone LIKE '%{$_POST[search]}%'";
        				$fromvar = $fromvar1;
        				break;
					default:
					    echo "None"; 
				}
			}
			$sql = "SELECT r.recID, r.firstName, r.lastName, r.streetAddress, r.city, r.state, r.zip, r.phone, r.email, r.resume, r.firstLang, r.ged,
        		r.process, r.districtID, r.sourceOfLeadID, r.nominatorID
        		FROM " . $fromvar .
        		" where " . $wherevar;
        	echo $sql;
        	$result = $conn->query($sql);
			if ($result->num_rows > 0) 
			{
			?>

            <!--table begins-->
            <table border="1" style="width:100%" class="revTable">
                <!--begin header of table-->  
                <tr>
                	<th style="display:none">Id</th>
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
    
        		// output data of each row
    			while($row = $result->fetch_assoc()) 
    			{
        			/*
        			$sqlproclevel = "SELECT LevelName
        			FROM ProcessLevel 
        			WHERE ProcessLevelID  = " . $row["processLevelID"]; 
        			$resultproclevel = $conn->query($sqlproclevel);    
        			if ($resultproclevel->num_rows > 0)  
            			$rowproc = $resultproclevel->fetch_assoc();
        			else
            			$rowproc["LevelName"] = "No Interview"; 
            		*/    
    			?>
                <!--begin first row-->
                  	<tr>
                  		<td style="display:none"><?php echo $row["recID"] ?></td>
                    	<td><?php echo $row["firstName"] ?></td>
                      	<td><?php echo $row["lastName"] ?></td>
                      	<td><?php echo $row["city"] ?></td>
                      	<td><?php echo $row["zip"] ?></td>
                      	<td><?php echo $row["email"] ?></td>
                      	<td><?php echo $row["phone"] ?></td>
                      	<td><?php echo $row["process"] ?></td>
                      	<td id= "bcard">
							<a href="#profile">
							<!-- onclick="document.getElementById('lightbox1').style.display='inline';"> -->
							<img src="../images/icon-profile-small-teal.png">
							</button>
						</td>
                  	</tr>
                	<!--end first row-->
                   
                	<!--begin second row
                  	<tr>
                   		<td>Jane</td>
                      	<td>Doe</td>
                      	<td>Chino</td>
                      	<td>91710</td>
                      	<td>janedoe@gmail.com</td>
                      	<td>(555)555-5555</td>
                      	<td>2nd Interview</td>
                      	<td>
                      		<a href="#profile" onclick="document.getElementById('lightbox2').style.display='inline';">
							<img src="../images/icon-profile-small-teal.png">
							</button>
						</td>
                  	</tr>
                	<!--end second row-->
                <?php
            	}
            	?>
            </table>

            <?php
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   		    
			} 
			else 
			{
    			echo "0 results";
			}
			$conn->close();
			?>

		</div>

		<div id="txtHint"><b>Person info will be listed here...</b></div>

		<!-- LIGHTBOX1 CODE BEGIN 
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

			    
			         <!--
			         <h1> 
			         <?php 
			          //echo $row["firstName"] . $row["lastName"] ?> </h1>
			         	
			    	<table border="1" align="center" class="litTable">
			         <tr>
			         	<td>Position:</td>
			         	<td>Intern</td>
			         </tr>
			         <tr>
			         	<td>Email:</td>
			         	<td>
			         	<?php 
			         	//echo $row["email"] ?></td>
			         </tr>
			         <tr>
			         	<td>Phone Number:</td>
			         	<td><?php 
			         	//echo $row["phone"] ?></td>
			         </tr>
			        </table> 
			        
			         
			      </div>
			   </td>
			   </tr>
			   </table>
			</div>
		<!-- LIGHTBOX1 CODE END -->

		<!-- LIGHTBOX1 CODE BEGIN -->
			<!--
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
			         <!--<h1> Jackie Cortes </h1>
			         <section>
			         	<p>• Position: </p>
			         	<span>Contact Information</span>
			         	<p>• Email:</p>
			         	<p>• Phone Number: (626) 512</p>
			         	<p>• Address: jacortes@cpp.edu</p>
			         </section>
			         <section>
			         	
			         </section>
			         
			         </p>
			         
			      </div>
			   </td>
			   </tr>
			   </table>
			</div>
		<!-- LIGHTBOX1 CODE END -->


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