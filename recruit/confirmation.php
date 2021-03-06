<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NEW</title>
        <link rel="stylesheet" href="betaConfirm.css" type="text/css">
        <link rel="stylesheet" href="animsition.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
    </head>
    <body class="cbp-spmenu-push">
        <div id="fullpage">
            <div class="body">
                <div class="section">
                    <h1>
                        <center> <br>REVIEW BEFORE SUBMISSION</center>
                    </h1>
                    <!--  <h1 class="main-text">Create a Recruit Profile</h1> -->
                    <form action="insert.php" enctype="multipart/form-data"  method="post">
                        <?php 
                            //bring uploaded file paths and names
                            $resumePath = $_FILES['resume']['tmp_name'];
                            $coverLetterPath = $_FILES['coverLetter']['tmp_name'];
                            ?>
                        <div class="left slide">
                            <!-- <form class="leftForm"> -->
                            <h2>NAME</h2>
                            <table width="84%">
                                <td width="12%">
                                    <label>First name:</label>
                                </td>
                                <td width="25%">
                                    <input type="text" name="firstName" class="fn formName" value = "<?php echo $_POST['firstName']; ?>" placeholder="NOT ENTERED" readonly>
                                </td>
                                <td width="2%">
                                    <label class="labelMi">M.I:</label>
                                </td>
                                <td width="8%">
                                    <input type="text" name="middleInitial" class="mi formName" value = "<?php echo $_POST['middleInitial']; ?>" placeholder="NONE" readonly>
                                </td>
                                <td  width="12%">
                                    <label class="labelLn">Last name:</label>
                                </td>
                                <td width="25%">
                                    <input type="text" name="lastName" class="ln formName" value = "<?php echo $_POST['lastName']; ?>" placeholder="NOT ENTERED" readonly>
                                </td>
                            </table>
                            <br><br>
                            <h2>LOCATION</h2>
                            <label>Street Address 1:</label>
                            <input type="text" name="streetAddress" class="s1 formName" value = "<?php echo $_POST['streetAddress']; ?>"  placeholder="NOT ENTERED"placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <label>Street Address 2:</label>
                            <input type="text" name="streetAddress2" class="s2 formName" value = "<?php echo $_POST['streetAddress2']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <label class="labelCity">City:</label>
                            <input type="text" name="city" class="city formName" value = "<?php echo $_POST['city']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <label class="labelZip">Zip:</label>
                            <input type="text" name="zip" class="zip formName" value = "<?php echo $_POST['zip']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <label class="labelState">State:</label>
                            <input type="text" name="recState" class="state" value = "<?php echo $_POST['recState']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <h2>CONTACT INFORMATION</h2>
                            <label class="labelPhoneOne">Primary Phone Number:</label>
                            <input type="text" name="phone" class="phone1 formName" value = "<?php echo $_POST['phone']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <label class="labelPhone2">Secondary Phone Number:</label>
                            <input type="text" name="phone2" class="phone2 formName" value = "<?php echo $_POST['phone2']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <label class="email">Primary E-mail:</label>
                            <input type="text" name="email" class="email1 formName" value = "<?php echo $_POST['email']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <label class="email2">Secondary E-mail:</label>
                            <input type="text" name="email2" class="email2 formName" value = "<?php echo $_POST['email2']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <!--</form> -->
                        </div>
                        <div class="middle slide">
                            <!--<form class="middleForm">-->
                            <h2>LANGUAGE</h2>
                            <table width="85%">
                                <td width="27%">
                                    <label class="labelLang1">Primary Spoken Language:</label>
                                </td>
                                <td width="38%">
                                    <input type="text" name="lang" class="lang1 formName" value = "<?php echo $_POST['lang']; ?>" placeholder="NOT ENTERED" readonly>
                                </td>
                                <td width="">
                                <td>
                            </table>
                            <br>
                            <table width="85%">
                                <td width="27%">
                                    <label class="labelLang2">Secondary Spoken Language:</label>
                                </td>
                                <td width="38%">
                                    <input type="text" name="lang2" class="lang2 formName" value = "<?php echo $_POST['lang2']; ?>" placeholder="NOT ENTERED" readonly>
                                </td>
                                <td width="10%">
                                    <label class="labelLang2">Proficiency:</label>
                                </td>
                                <td width="25%">
                                    <input type="text" name="conproficiency2" class="proficiency2" value = "<?php echo ucfirst($_POST['proficiency2']); ?>" placeholder="NOT ENTERED" readonly>
                                    <input type="hidden" name="proficiency2" value = "<?php echo $_POST['proficiency2']; ?>">
                                </td>
                            </table>
                            <br>
                            <table width="85%">
                                <td width="27%">
                                    <label class="labelLang3">Tertiary Spoken Language:</label>
                                </td>
                                <td width="38%">
                                    <input type="text" name="lang3" class="lang3 formName" value = "<?php echo $_POST['lang3']; ?>" placeholder="NOT ENTERED" readonly>
                                </td>
                                <td width="10%">
                                    <label class="labelLang2">Proficiency:</label>
                                </td>
                                <td width="25%">	
                                    <input type="text" name="conproficiency3" class="proficiency3" value = "<?php echo ucfirst($_POST['proficiency3']); ?>" placeholder="NOT ENTERED" readonly>
                                    <input type="hidden" name="proficiency3" value = "<?php echo $_POST['proficiency3']; ?>">
                                </td>
                            </table>
                            <br><br>
                            <br><br>
                            <h2>HIGH SCHOOL DIPLOMA OR GED</h2>
                            <table width="85%">
                                <tr>
                                    <td width="50%">
                                        <label class="nom">Diploma:</label>
                                    </td>
                                    <td width="50%">
                                        <a style='color:#00cc00;font-weight:bold;'><?php echo $_POST['diploma']; ?></a>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table width="84%">
                                <td width="50%"><label>If High School:</label></td>
                                <td width="20%">School Name:<input type="text"  name="highschool" value = "<?php echo $_POST['highschool']; ?>" placeholder="No School Name" readonly></td>
                                <td width="20%">Graduate Year:<input type="text"  name="gradYear" value = "<?php echo $_POST['gradYear']; ?>" placeholder="No Year" readonly></td>
                            </table>
                            <br><br><br>
                            <h2>HIGHER EDUCATION</h2>
                            <!--<input type="hidden" name="higherEd" value="0">
                                <input type="checkbox" name="higherEd" value="1">
                                <label class="higherEd">Yes</label>
                                <input type="hidden" name="higherEd" value="0">
                                <input type="checkbox" name="higherEd" value="1">
                                <label class="higherEd">No</label><br><br>-->
                            <label class="higherEd">College/University:</label>
                            <input type="text" name="university" class="gradForm formName" value = "<?php echo $_POST['university']; ?>" placeholder="NOT ENTERED" readonly><br><br>
                            <label class="higherEd">Degree:</label>
                            <input type="text" name="degree" class="gradForm formName" value = "<?php echo $_POST['degree']; ?>" placeholder="NOT ENTERED" readonly><br><br>
                            <label class="higherEd">Graduation Year:</label>
                            <input type="text" name="gradYear" class="gradForm formName" value = "<?php echo $_POST['HEgradYear']; ?>" placeholder="NOT ENTERED" readonly>
                            <!-- end middle form -->
                        </div>
                        <div class="right slide">
                            <h2>MOST RECENT WORK EXPERIENCE</h2>
                            <label class="expText">Company Name:</label>
                            <input type="text" name="company" class=" coForm formName" value = "<?php echo $_POST['company']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <label class="expText coTitle">Title:</label>
                            <input type="text" name="title" class="coForm formName" value = "<?php echo $_POST['title']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <!-- Recent Work experience 1 validation-->
                            <label class="expText datesWorked">
                            <?php date_default_timezone_set("America/Los_Angeles");
                                if(isset($_POST['startDate']) && isset($_POST['endDate'])){
                                	$start_date = $_POST['startDate'];
                                	$end_date = $_POST['endDate'];
                                	if(strtotime($start_date) > strtotime($end_date)){
                                		echo "<a style='color:#ff0000;font-weight:bold;'>*</a>Dates Worked:";
                                	}
                                	else{
                                		echo "Dates Worked:";
                                	}
                                }
                                ?>
                            </label>
                            <!-- validation ends-->
                            <div class="datesWorkedToFrom">
                                <input type="date" class="workedFrom" name="startDate" value = "<?php echo $_POST['startDate']; ?>" readonly>
                                <!-- <p class="datesWorkedP">-</p> -->
                                <input type="date" class="workedTo" name="endDate" value = "<?php echo $_POST['endDate']; ?>" readonly>
                            </div>
                            <br><br><br>
                            <h2>2ND MOST RECENT WORK EXPERIENCE</h2>
                            <label class="expText">Company Name:</label>
                            <input type="text" name="company2" class="coForm formName" value = "<?php echo $_POST['company2']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <label class="expText coTitle">Title:</label>
                            <input type="text" name="title2" class="coForm formName" value = "<?php echo $_POST['title2']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br>
                            <!-- Recent Work Experience 2 date validation-->
                            <label class="expText datesWorked">
                            <?php date_default_timezone_set("America/Los_Angeles");
                                if(isset($_POST['startDate2']) && isset($_POST['endDate2'])){
                                		  		$start_date_2 = $_POST['startDate2'];
                                		  		$end_date_2 = $_POST['endDate2'];
                                		  		if(strtotime($start_date_2) > strtotime($end_date_2)){
                                		  			echo "<a style='color:#ff0000;font-weight:bold;'>*</a>Dates Worked:";
                                		  		}
                                		  		else{
                                		  			echo "Dates Worked:";
                                		  		}
                                	  		}
                                	    ?>
                            </label>
                            <!-- validation -->
                            <div class="datesWorkedToFrom">
                                <input type="date" class="workedFrom" name="startDate2" value = "<?php echo $_POST['startDate2']; ?>" readonly>
                                <!-- <p class="datesWorkedP">-</p> -->
                                <input type="date" class="workedTo" name="endDate2" value = "<?php echo $_POST['endDate2']; ?>" readonly>
                            </div>
                            <br><br><br>
                            <h2>LICENSES & STATE OF RESIDENCY</h2>
                            <input type="hidden" class="licenseBox" name="PC" value="<?php echo $_POST['PC']; ?>" readonly>
                            <!-- ADD PC CHECKBOX CONFIRMATION-->
                            <label class="licenseText"><?php
                                if(isset($_POST['PC'])) 
                                {
                                		if($_POST['PCState'] != '')
                                		{
                                			$temp_pc_state = $_POST['PCState'];
                                			echo "<a style='color:#00cc00;font-weight:bold;'>Y</a> P&C          ";
                                			echo "<a>{$temp_pc_state}</a>";
                                		}
                                		else
                                		{
                                echo "<a style='color:#ff0000;font-weight:bold;'>*</a> P&C";
                                		}
                                }
                                ?></label>
                            <input type ="hidden" name="PCState" class="stateLicense" value = "<?php echo $_POST['PCState']; ?>" readonly>
                            <br>
                            <!--<input type="hidden" class="licenseBox" name="series12" value="0"> -->
                            <input type="hidden" class="licenseBox" name="series12" value="<?php echo $_POST['series12']; ?>" readonly>
                            <label ><?php
                                if(isset($_POST['series12'])) 
                                {
                                if($_POST['series12State'] != '')
                                {
                                $temp_series12_state = $_POST['series12State'];
                                echo "<a class=\"licenseText\" style='color:#00cc00;font-weight:bold;'>Y</a> Series 12 ";
                                echo "<a class=\"stateLicense\">{$temp_series12_state}</a>";
                                }
                                else
                                {
                                echo "<a style='color:#ff0000;font-weight:bold;'>*</a> Series 12";
                                }
                                }
                                ?></label>
                            <input type="hidden" name="series12State" class="stateLicense" value = "<?php echo $_POST['series12State']; ?>" readonly>
                            <br>
                            <!-- <input type="hidden" class="licenseBox" name="health" value="0"> -->
                            <input type="hidden" class="licenseBox" name="health" value="<?php echo $_POST['health']; ?>" readonly>
                            <label class="licenseText"><?php
                                if(isset($_POST['health'])) 
                                {
                                if($_POST['healthState'] != '')
                                {
                                $temp_health_state = $_POST['healthState'];
                                echo "<a style='color:#00cc00;font-weight:bold;'>Y</a> Health          ";
                                echo "<a>{$temp_health_state}</a>";
                                }
                                else
                                {
                                echo "<a style='color:#ff0000;font-weight:bold;'>*</a> Health";
                                }
                                }
                                ?></label>
                            <input type = "hidden" name="healthState" class="stateLicense" value = "<?php echo $_POST['healthState']; ?>" readonly>
                            <br>
                            <!--<input type="hidden" class="licenseBox" name="life" value="0"> -->
                            <input type="hidden" class="licenseBox" name="life" value="<?php echo $_POST['life']; ?>" readonly>
                            <label class="licenseText"><?php
                                if(isset($_POST['life'])) 
                                {
                                if($_POST['lifeState'] != '')
                                {
                                $temp_life_state = $_POST['lifeState'];
                                echo "<a style='color:#00cc00;font-weight:bold;'>Y</a> Life          ";
                                echo "<a>{$temp_life_state}</a>";
                                }
                                else
                                {
                                echo "<a style='color:#ff0000;font-weight:bold;'>*</a> Life";
                                }
                                }
                                ?></label>
                            <input type="hidden" name="lifeState" class="stateLicense" value ="<?php echo $_POST['lifeState']; ?>" readonly>
                            <br>
                            <!--<input type="hidden" class="licenseBox" name="accident" value="0"> -->
                            <input type="hidden" class="licenseBox" name="accident" value="<?php echo $_POST['accident']; ?>" readonly>
                            <label><?php
                                if(isset($_POST['accident'])) 
                                {
                                if($_POST['accidentState'] != '')
                                {
                                $temp_accident_state = $_POST['accidentState'];
                                echo "<a class=\"licenseText\" style='color:#00cc00;font-weight:bold;'>Y</a> Accident ";
                                echo "<a\"stateLicense\" >{$temp_accident_state}</a>";
                                }
                                else
                                {
                                echo "<a style='color:#ff0000;font-weight:bold;'>*</a> Accident";
                                }
                                }
                                ?></label>
                            <input type="hidden" name="accidentState" class="stateLicense" value = "<?php echo $_POST['accidentState']; ?>" readonly>
                            <br>
                            <br><br><br>
                        </div>
                        <div class="rightright slide">
                            <h2>DOCUMENTS</H2>
                            <label class="resume">Currently Uploaded Resume:</label>
                            <input type="text" value = "<?php echo $_FILES['resume']['name']; ?>" placeholder="NO FILE SUBMITTED" readonly>
                            <br><br>
                            <label class="coverLetter">Currently Uploaded Cover Letter:</label>
                            <input type="text" value = "<?php echo $_FILES['coverLetter']['name']; ?>" placeholder="NO FILE SUBMITTED" readonly>
                            <br><br><br>	
                            <?php	
                                $target_dir = "temp_uploadedFiles/";
                                $target_file1 = $target_dir . basename($_FILES["resume"]["name"]);
                                $target_file2 = $target_dir . basename($_FILES["coverLetter"]["name"]);
                                move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file1);
                                move_uploaded_file($_FILES["coverLetter"]["tmp_name"], $target_file2);
                                ?>	
                            <input type="hidden" name = "resume" value = "<?php echo $target_file1; ?>">	
                            <input type="hidden" name = "coverLetter" value = "<?php echo $target_file2; ?>">
                            <h2>SOURCE</h2>
                            <label class="leadSource">Source of Lead:</label>
                            <input type="text" class="lead" name="sourceOfLead" value = "<?php echo $_POST['sourceOfLead']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br><br>
                            <table width="85%">
                                <tr>
                                    <td width="50%">
                                        <label class="nom">Nominator:</label>
                                    </td>
                                    <td width="50%">
                                        <a style='color:#00cc00;font-weight:bold;'><?php echo $_POST['nominator']; ?></a>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table width="84%">
                                <td width="50%"><label>If Yes:</label></td>
                                <td width="10%">FN:<input type="text"  name="nomfirstName" value = "<?php echo $_POST['nomfirstName']; ?>" placeholder="No First Name" readonly></td>
                                <td width="10%">LN:<input type="text"  name="nomlastName" value = "<?php echo $_POST['nomlastName']; ?>" placeholder="No Last Name" readonly></td>
                                <td width="30%">Writing#:<input type="text"  name="writingNo" value = "<?php echo $_POST['writingNo']; ?>" placeholder="No Writing #" readonly></td>
                            </table>
                            <br><br>
                            <h2>APPLIED FOR</h2>
                            <label>Assigned District:</label>
                            <input type="text" class="assDist" name="district" value = "<?php echo $_POST['district']; ?>" placeholder="NOT ENTERED" readonly>
                            <br><br><br>
                            <label class="lblProcess">Position:</label>
                            <?php
                                //set Position Display
                                $posdisplay = 'None Selected';
                                
                                if(strcmp($_POST['position'],'businessConsultant') == 0)
                                {
                                	$posdisplay = 'Business Consultant';
                                }
                                if(strcmp($_POST['position'],'districtManager') == 0)
                                {
                                	$posdisplay = 'District Manager';
                                }if(strcmp($_POST['position'],'brokerConsultant') == 0)
                                {
                                	$posdisplay = 'Broker Consultant';
                                }if(strcmp($_POST['position'],'internBusDev') == 0)
                                {
                                	$posdisplay = 'Intern - Business Development';
                                }if(strcmp($_POST['position'],'internHR') == 0)
                                {
                                	$posdisplay = 'Intern - Human Resources';
                                }if(strcmp($_POST['position'],'internWeb') == 0)
                                {
                                	$posdisplay = 'Intern - Web Development';
                                }if(strcmp($_POST['position'],'internGraphic') == 0)
                                {
                                	$posdisplay = 'Intern - Graphic Design';
                                }if(strcmp($_POST['position'],'internPRMarket') == 0)
                                {
                                	$posdisplay = 'Intern- PR & Marketing';
                                }if(strcmp($_POST['position'],'internSales') == 0)
                                {
                                	$posdisplay = 'Intern - Sales';
                                }
                                
                                ?>
                            <input type="text" name="position" class="positionApplied" value = "<?php echo $posdisplay; ?>" readonly>
                            <br><br>
                        </div>
                        <div class="page4 slide">
                            <h2>PROCESS LEVEL</h2>
                            <label class="lblProcess">Process Level: </label>
                            <?php 
                                $processvar = "None Selected";
                                if(strcmp($_POST['process'], "1stInterview") == 0)
                                {
                                	$processvar = "1st Interview";
                                	unset($_POST['interviewerName2']);    			
                                	unset($_POST['interviewDate2']);    			
                                	unset($_POST['interviewTime2']);    			
                                	unset($_POST['grade2']);
                                }
                                if(strcmp($_POST['process'], "2ndInterview") == 0)
                                {
                                	$processvar = "2nd Interview";
                                }
                                if(strcmp($_POST['process'], "disqualified") == 0)
                                {
                                	$processvar = "Disqualified";
                                	unset($_POST['interviewerName1']);
                                	unset($_POST['interviewerName2']);
                                	unset($_POST['interviewDate1']);
                                	unset($_POST['interviewDate2']);
                                	unset($_POST['interviewTime1']);
                                	unset($_POST['interviewTime2']);
                                	unset($_POST['grade1']);
                                	unset($_POST['grade2']);
                                }
                                ?>
                            <input type="text" class="processLevel" name="process" id="process" value = "<?php echo $processvar; ?>" readonly>
                            <br><br>
                            <div id="reasonHidden" hidden>
                                <label> 	
                                <?php
                                    $reason = $_POST['disqualifyReason'];
                                    if($processvar == "Disqualified" && !$reason) {
                                    	echo "<a style='color:#ff0000;font-weightbold;'>*</a>If Disqualified, State Reason:";
                                    } else echo "If Disqualified, State Reason:"
                                    ?>
                                </label>
                                <input type="text" class="disqualifyReason formName" name="disqualifyReason" value = "<?php echo $_POST['disqualifyReason']; ?>" placeholder="NOT ENTERED" readonly ><br><br><BR>
                            </div>
                            <div id="first_interview" hidden>
                                <h2>1ST INTERVIEW</h2>
                                <label>	 	
                                <?php 
                                    if (empty($_POST['interviewerName1']) && $processvar != "Disqualified" ) echo "<a style='color:#ff0000;font-weightbold;'>*</a>Interviewer Name:";
                                    else echo "Interviewer Name:"
                                    ?>
                                </label>
                                <input type="text" class="interviewerName formName" name="interviewerName1" value = "<?php echo $_POST['interviewerName1']; ?>" placeholder="NOT ENTERED" readonly>
                                <br><br>
                                <label class="lblInterviewTime">
                                <?php date_default_timezone_set("America/Los_Angeles");
                                    $date = strtotime($_POST['interviewDate1']); 
                                    $time = strtotime($_POST['interviewTime1']); 
                                    $process_type = $_POST['process'];
                                    
                                    if (!$date && !$time && ($process_type == "1stInterview" || $process_type == "2ndInterview")) {
                                    	echo "<a style='color:#ff0000;font-weightbold;'>*</a>Interview Date/Time:";
                                    } else echo "Interview Date/Time:";
                                    ?>
                                </label>
                                <div class="interviewDateTime">
                                    <input type="date" class="interviewDate" name="interviewDate1" value = "<?php echo $_POST['interviewDate1']; ?>" readonly>
                                    <input type="time" class="interviewTime" name="interviewTime1" value = "<?php echo $_POST['interviewTime1']; ?>" readonly>
                                </div>
                                <br><br>
                                <label class="lblInterviewGrade">
                                <?php 
                                    date_default_timezone_set("America/Los_Angeles"); 
                                    $start_date = $_POST['interviewDate1'];  
                                    $start_time = $_POST['interviewTime1']; 	  				 			 
                                    
                                    if ($start_date && $start_time) {
                                    	
                                    	if ((strtotime($start_date) <= strtotime(date('Y-m-d'))) && $gradeOne == "") { 
                                    		if ((strtotime($start_date) + strtotime($start_time)) <= (strtotime(date('Y-m-d')) + strtotime(date('H:i')))) 
                                    			echo "<a style='color:#ff0000;font-weightbold;'>*</a>Interview Grade:"; 
                                    		else echo "Interview Grade:"; 
                                    	} 
                                    	elseif ((strtotime($start_date) > strtotime(date('Y-m-d'))) && $gradeOne) {
                                    		echo "Interview Grade:"; 
                                    		unset($_POST['grade1']); 
                                    	}
                                    	else {
                                    	    echo "Interview Grade:"; 
                                    	}
                                    } else { 
                                    	echo "Interview Grade:"; 
                                    	unset($_POST['grade1']); 
                                    }
                                    ?>
                                </label>
                                <input type="text" name="grade1" class="interviewGrade" value = "<?php echo $_POST['grade1']; ?>" placeholder="NOT ENTERED" readonly>
                                <br><br><BR>
                            </div>
                            <div id="second_interview" hidden>
                                <h2>2ND INTERVIEW</h2>
                                <label>
                                <?php
                                    if (empty($_POST['interviewerName2']) && $processvar == "2nd Interview") echo "<a style='color:#ff0000;font-weightbold;'>*</a>Interviewer Name:";
                                    else echo "Interviewer Name:"
                                    ?>
                                </label>
                                <input type="text" class="interviewerName formName" name="interviewerName2" value = "<?php echo $_POST['interviewerName2']; ?>" placeholder="NOT ENTERED" readonly>
                                <br><br>
                                <label class="lblInterviewTime">
                                <?php date_default_timezone_set("America/Los_Angeles");
                                    $date = strtotime($_POST['interviewDate2']); 
                                    $time = strtotime($_POST['interviewTime2']);
                                    $process_type = $_POST['process'];  
                                    
                                    if (!$date && !$time && $process_type == "2ndInterview") {
                                    	echo "<a style='color:#ff0000;font-weightbold;'>*</a>Interview Date/Time:";	
                                    } else echo "Interview Date/Time:";
                                    ?>
                                </label>
                                <div class="interviewDateTime">
                                    <input type="date" class="interviewDate" name="interviewDate2" value = "<?php echo $_POST['interviewDate2']; ?>" readonly>
                                    <input type="time" class="interviewTime" name="interviewTime2" value = "<?php echo $_POST['interviewTime2']; ?>" readonly>
                                </div>
                                <br><br>
                                <label class="lblInterviewGrade">
                                <?php 
                                    date_default_timezone_set("America/Los_Angeles"); 
                                    	$start_date = $_POST['interviewDate2'];  
                                    	$start_time = $_POST['interviewTime2'];  
                                    	
                                    	if ($start_date && $start_time) {
                                    		$gradeTwo = $_POST['grade2'];
                                    		
                                    		if ((strtotime($start_date) <= strtotime(date('Y-m-d'))) && $gradeTwo == "") { 
                                    			if ((strtotime($start_date) + strtotime($start_time)) <= (strtotime(date('Y-m-d')) + strtotime(date('H:i')))) 
                                    				echo "<a style='color:#ff0000;font-weightbold;'>*</a>Interview Grade:"; 
                                    			else echo "Interview Grade:"; 
                                    		} 
                                    		elseif ((strtotime($start_date) > strtotime(date('Y-m-d'))) && $gradeTwo) {
                                    			echo "Interview Grade:"; 
                                    			unset($_POST['grade2']); 
                                    		}
                                    		else {
                                    		    echo "Interview Grade:"; 
                                    		}
                                    	} else { 
                                    		echo "Interview Grade:"; 
                                    		unset($_POST['grade2']); 
                                    	}
                                    
                                    ?>
                                </label>
                                <input type="text" name="grade2" class="interviewGrade" value = "<?php echo $_POST['grade2']; ?>" placeholder="NOT ENTERED" readonly>
                                <br><br>
                            </div>
                            <div class="submit">
                                <input type="button" name="edit" value="Edit" onclick="window.history.back();"> <input type="submit" name="submit" value="Submit">
                            </div>
                        </div>
                        <!--<div class="submitBtn">
                            <input type="submit" name="submit" value="Submit">
                            </div>-->
                        <!-- end section -->
                        <!--<form action="#" class="submitBtn">-->
                        <!--<input type="submit" name="submit" value="Submit">-->
                        <!-- end submit button -->
                    </form>
                    <!--</form> -->
                </div>
                <!-- end body -->
            </div>
            <!-- end container -->
        </div>
        <!-- end fullpage -->
        </div>
        <script src="js/animsition.js"></script>
        <script src="js/gu-trans.js"></script>
        <script src="js/classie.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#000'],
                });
                changeProc();
            });
            function changeProc() {
            	var proc = document.getElementById('process').value;
            	if (proc == "1st Interview") {
            		document.getElementById('first_interview').hidden = false;
            	}
            	else if (proc == "2nd Interview") {
            		document.getElementById('first_interview').hidden = false;
            		document.getElementById('second_interview').hidden = false;
            	}
            	else {
            		document.getElementById('reasonHidden').hidden = false;
            	}
            }
        </script>
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