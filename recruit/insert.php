
<?php
/////////////// Write into database///////////////
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

function begin($conn){
    mysqli_query($conn,"BEGIN");
}

function commit($conn){
    mysqli_query($conn,"COMMIT");
}

function rollback($conn){
    mysqli_query($conn,"ROLLBACK");
}

begin($conn); // transaction begins

/////////// District ////////////

$distSql = "INSERT INTO District (districtID, districtName)
VALUES (Null, '$_POST[district]'); ";
$distResult = mysqli_query($conn, $distSql);
if (!$distResult) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $distSql . "<br>" . mysqli_error($conn);  
} 
$distID= mysqli_insert_id($conn);


/////////// Source Of Lead ////////////

$sourceSql = "INSERT INTO sourceOfLead (sourceOfLeadID, sourceOfLead)
VALUES (Null, '$_POST[sourceOfLead]'); ";
if ($_POST[sourceOfLead]){
	$sourceResult = mysqli_query($conn, $sourceSql);
	if (!$sourceResult) {
		rollback($conn); // transaction rolls back
		echo "<br> Transaction rolled back of source of lead <br> Error: " . $sourceSql . "<br>" . mysqli_error($conn);  
	} 
	$sourceID= mysqli_insert_id($conn);
}
else{
	echo "Source of Lead can not be empty!";
}


/////////////// Why Disqualify /////////////

$disqualifySql = "INSERT INTO whyDisqualify (whyDisqualifyID, explanation)
VALUES (Null, '$_POST[disqualifyReason]'); ";
$disqualifyResult = mysqli_query($conn, $disqualifySql);
if (!$disqualifyResult) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $disqualifySql . "<br>" . mysqli_error($conn);  
} 
$whyDisqualifyID= mysqli_insert_id($conn);

/////////// Nominator ////////////
$nominatorSql = "INSERT INTO Nominator (nominatorID, firstName, lastName, writingNo)
VALUES (Null, '$_POST[nomfirstName]', '$_POST[nomlastName]','$_POST[writingNo]'); ";
$nominatorResult = mysqli_query($conn, $nominatorSql);
if (!$nominatorResult) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $nominatorSql . "<br>" . mysqli_error($conn);
} 
$nominatorID= mysqli_insert_id($conn);

///////////////// Rec //////////////////


$recSql = "INSERT INTO rec (recID, firstName, middleInitial, lastName, streetAddress, streetAddress2,
  city, zip, state, phone, secondPhone, email, secondEmail, firstLang, ged, process, districtID, sourceOfLeadID, 
   whyDisqualifyID, nominatorID, positionName)

VALUES (Null, '$_POST[firstName]','$_POST[middleInitial]','$_POST[lastName]','$_POST[streetAddress]',
    '$_POST[streetAddress2]',
    '$_POST[city]','$_POST[zip]','$_POST[recState]','$_POST[phone]',
    '$_POST[phone2]','$_POST[email]', '$_POST[email2]', '$_POST[lang]','$_POST[ged]', '$_POST[process]', '$distID',
    '$sourceID', '$whyDisqualifyID', '$nominatorID', '$_POST[position]' );";



if ($_POST[email] and $_POST[email2] and $_POST[email]!=$_POST[email2]) {
	$email = filter_var($_POST[email], FILTER_SANITIZE_EMAIL);
	$email2 = filter_var($_POST[email2], FILTER_SANITIZE_EMAIL);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL) === false or !filter_var($email2, FILTER_VALIDATE_EMAIL) === false) {
		$recResult = mysqli_query($conn, $recSql);
		if (!$recResult) {
			rollback($conn); // transaction rolls back
			echo "<br>rec transaction rolled back(Basic Info) <br> Error: " . $recSql . "<br>" . mysqli_error($conn);  
		} 
		$recID= mysqli_insert_id($conn);

    }
	else{
		echo "Invalid email format<br>"; 
	} 
}
else{
    echo "Both emails cannot be empty or same!<br> "; 
}	


///////////  Second Language/////////////
$lang2Sql = "INSERT INTO language (languageID, languageName)
VALUES (Null, '$_POST[lang2]'); ";
$lang2Result = mysqli_query($conn, $lang2Sql);
if (!$lang2Result) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $lang2Sql . "<br>" . mysqli_error($conn);  
} 
$langID2= mysqli_insert_id($conn);


$recLang2Sql = "INSERT INTO reclanguage (recID, langID, proficiency, priority)
VALUES ('$recID', '$langID2', '$_POST[proficiency2]', '2'); ";
$recLang2Result = mysqli_query($conn, $recLang2Sql);
if (!$recLang2Result) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $recLang2Sql . "<br>" . mysqli_error($conn); 
} 

/////// Third Language////////////////////

$lang3Sql = "INSERT INTO language (languageID, languageName)
VALUES (Null, '$_POST[lang3]'); ";
$lang3Result = mysqli_query($conn, $lang3Sql);
if (!$lang3Result) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $lang3Sql . "<br>" . mysqli_error($conn);  
} 
$langID3= mysqli_insert_id($conn);


$recLang3Sql = "INSERT INTO reclanguage (recID, langID, proficiency, priority)
VALUES ('$recID', '$langID3', '$_POST[proficiency3]', '3'); ";
$recLang3Result = mysqli_query($conn, $recLang3Sql);
if (!$recLang3Result) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $recLang3Sql . "<br>" . mysqli_error($conn); 
} 


/////////////////Licenses ////////////////////

if( isset( $_POST['PC'] )) {
    $recLicenseSql = "INSERT INTO recLicense (recID, licenseID, state)
                            VALUES ('$recID', '1', '$_POST[PCState]'); ";
    $recLicenseResult = mysqli_query($conn, $recLicenseSql);
    if (!$recLicenseResult) {
        rollback($conn); // transaction rolls back
        echo "<br> Transaction rolled back <br> Error: " . $recLicenseSql . "<br>" . mysqli_error($conn); 
    }
}
else{
    $recLicenseResult = "TRUE";
}



if( isset( $_POST['series12'] )) {
    $recLicense2Sql = "INSERT INTO recLicense (recID, licenseID, state)
                            VALUES ('$recID', '2', '$_POST[series12State]'); ";
    $recLicense2Result = mysqli_query($conn, $recLicense2Sql);
    if (!$recLicense2Result) {
        rollback($conn); // transaction rolls back
        echo "<br> Transaction rolled back <br> Error: " . $recLicense2Sql . "<br>" . mysqli_error($conn); 
    }
}
else{
    $recLicense2Result = "TRUE";
}


if( isset( $_POST['health'])) {
    $recLicense3Sql = "INSERT INTO recLicense (recID, licenseID, state)
                            VALUES ('$recID', '3', '$_POST[healthState]'); ";
    $recLicense3Result = mysqli_query($conn, $recLicense3Sql);
    if (!$recLicense3Result) {
        rollback($conn); // transaction rolls back
        echo "<br> Transaction rolled back <br> Error: " . $recLicense3Sql . "<br>" . mysqli_error($conn); 
    }
}
else{
    $recLicense3Result = "TRUE";
}


if( isset($_POST['life'] )) {
    $recLicense4Sql = "INSERT INTO recLicense (recID, licenseID, state)
                            VALUES ('$recID', '4', '$_POST[lifeState]'); ";
    $recLicense4Result = mysqli_query($conn, $recLicense4Sql);
    if (!$recLicense4Result) {
        rollback($conn); // transaction rolls back
        echo "<br> Transaction rolled back <br> Error: " . $recLicense4Sql . "<br>" . mysqli_error($conn); 
    }
}
else{
    $recLicense4Result = "TRUE";
}


if( isset( $_POST['accident'] )) {
    $recLicense5Sql = "INSERT INTO recLicense (recID, licenseID, state)
                            VALUES ('$recID', '5', '$_POST[accidentState]'); ";
    $recLicense5Result = mysqli_query($conn, $recLicense5Sql);
    if (!$recLicense5Result) {
        rollback($conn); // transaction rolls back
        echo "<br> Transaction rolled back <br> Error: " . $recLicense5Sql . "<br>" . mysqli_error($conn); 
    }
}
else{
    $recLicense5Result = "TRUE";
}


/////// High School ////////////////////

$highschoolSql = "INSERT INTO highschool (hsID, hsName)
VALUES (Null, '$_POST[highschool]'); ";
$highschoolResult = mysqli_query($conn, $highschoolSql);
if (!$highschoolResult) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $highschoolSql . "<br>" . mysqli_error($conn);  
} 
$highschoolID= mysqli_insert_id($conn);


$recHighschoolSql = "INSERT INTO recHighschool (recID, hsID, gradYear)
VALUES ('$recID', '$highschoolID', '$_POST[gradYear]'); ";
$recHighschoolResult = mysqli_query($conn, $recHighschoolSql);
if (!$recHighschoolResult) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $recHighschoolSql . "<br>" . mysqli_error($conn); 
} 

/////// Higher Education ////////////////////

$heSql = "INSERT INTO highereducation (heID, degree)
VALUES ( Null, '$_POST[degree]'); ";
$heResult = mysqli_query($conn, $heSql);
if (!$heResult) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $heSql . "<br>" . mysqli_error($conn);  
} 
$heID= mysqli_insert_id($conn);


$recHESql = "INSERT INTO reche (recID, heID, university, gradYear)
VALUES ('$recID', '$heID', '$_POST[university]', '$_POST[gradYear]'); ";
$recHEResult = mysqli_query($conn, $recHESql);
if (!$recHEResult) {
    rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br> Error: " . $recHESql . "<br>" . mysqli_error($conn); 
} 


///////////  Most Recent Work Experience /////////////
$experienceSql = "INSERT INTO workExperience (experienceID, title)
VALUES (Null, '$_POST[title]'); ";
$experienceResult = mysqli_query($conn, $experienceSql);
if (!$experienceResult) {
	rollback($conn); // transaction rolls back
	echo "<br> Transaction rolled back <br> Error: " . $experienceSql . "<br>" . mysqli_error($conn);  
} 
if($_POST[startDate]!=null&&$_POST[endDate]!=null){
	if(strtotime($_POST[startDate]) < strtotime($_POST[endDate])){

		$experienceID= mysqli_insert_id($conn);
		
		$recExperienceSql = "INSERT INTO recExperience (recID, experienceID, priority, company, startDate, endDate)
		VALUES ('$recID', '$experienceID', '1',  '$_POST[company]','$_POST[startDate]','$_POST[endDate]'); ";
		$recExperienceResult = mysqli_query($conn, $recExperienceSql);
		if (!$recExperienceResult) {
			rollback($conn); // transaction rolls back
			echo "<br> First workXP Transaction rolled back <br> Error: " . $recExperienceSql . "<br>" . mysqli_error($conn); 
		} 
	}
	else{
		rollback($conn); // transaction rolls back
		echo "End date cannot be earlier than start date!<br>";
	}
}


/////// 2nd Most Recent Work Experience ////////////////////
$experience2Sql = "INSERT INTO workExperience (experienceID, title)
VALUES (Null, '$_POST[title2]'); ";
$experience2Result = mysqli_query($conn, $experience2Sql);
if (!$experience2Result) {
	rollback($conn); // transaction rolls back
	echo "<br> Transaction rolled back <br> Error: " . $experienceSql . "<br>" . mysqli_error($conn);  
} 
if($_POST[startDate2]!=null&&$_POST[endDate2]!=null){
	if(strtotime($_POST[startDate2]) < strtotime($_POST[endDate2])){

		$experience2ID= mysqli_insert_id($conn);
		
		$recExperience2Sql = "INSERT INTO recExperience (recID, experienceID, priority, company, startDate, endDate)
		VALUES ('$recID', '$experience2ID', '2', '$_POST[company2]', '$_POST[startDate2]', '$_POST[endDate2]'); ";
		$recExperience2Result = mysqli_query($conn, $recExperience2Sql);
		if (!$recExperience2Result) {
			rollback($conn); // transaction rolls back
			echo "<br> Second workXP Transaction rolled back <br> Error: " . $recExperience2Sql . "<br>" . mysqli_error($conn); 
		} 
	}
	else{
		rollback($conn); // transaction rolls back
		echo "End date cannot be earlier than start date!<br>";
	}
}


///////////  First Interview /////////////
$date = date("Y/m/d");    //current date
if($_POST[interviewDate1]!=null&&$_POST[interviewTime1]!=null){
	if(strtotime($date) < strtotime($_POST[interviewDate1])){
		$recInterviewSql = "INSERT INTO recInterview (recID, interviewNo, grade, interviewerName, interviewDate, interviewTime)
		VALUES ('$recID', '1',  '$_POST[grade1]','$_POST[interviewerName1]', '$_POST[interviewDate1]', '$_POST[interviewTime1]' ); ";
		$recInterviewResult = mysqli_query($conn, $recInterviewSql);
		if (!$recInterviewResult) {
			rollback($conn); // transaction rolls back
			echo "<br>First interview Transaction rolled back <br> Error: " . $recInterviewSql . "<br>" . mysqli_error($conn);  
		}  
	}
	else{
		rollback($conn); // transaction rolls back
		echo "Interview_1 date cannot be a past date!<br>";
	}
}
else{
		$recInterviewSql = "INSERT INTO recInterview (recID, interviewNo, grade, interviewerName, interviewDate, interviewTime)
		VALUES ('$recID', '1',  '$_POST[grade1]','', '', '' ); ";
		$recInterviewResult = mysqli_query($conn, $recInterviewSql);
		if (!$recInterviewResult) {
			rollback($conn); // transaction rolls back
			echo "<br>First interview Transaction rolled back <br> Error: " . $recInterviewSql . "<br>" . mysqli_error($conn);  
		} 
}


///////////  Second Interview /////////////
if($_POST[interviewDate2]!=null&&$_POST[interviewTime2]!=null){
	if(strtotime($_POST[interviewDate1]) < strtotime($_POST[interviewDate2])){
		$recInterview2Sql = "INSERT INTO recInterview (recID, interviewNo, grade, interviewerName, interviewDate, interviewTime)
		VALUES ('$recID', '2',  '$_POST[grade2]','$_POST[interviewerName2]', '$_POST[interviewDate2]', '$_POST[interviewTime2]' ); ";
		$recInterview2Result = mysqli_query($conn, $recInterview2Sql);
		if (!$recInterview2Result) {
			rollback($conn); // transaction rolls back
			echo "<br>Second interview Transaction rolled back <br> Error: " . $recInterview2Sql . "<br>" . mysqli_error($conn);  
		}  
	}
	else{
		rollback($conn); // transaction rolls back
		echo "Interview_1 date cannot be earlier than Interview_2 date!<br>";
	}
}
else{
		$recInterview2Sql = "INSERT INTO recInterview (recID, interviewNo, grade, interviewerName, interviewDate, interviewTime)
		VALUES ('$recID', '2',  '$_POST[grade2]','', '', '' ); ";
		$recInterview2Result = mysqli_query($conn, $recInterview2Sql);
		if (!$recInterview2Result) {
			rollback($conn); // transaction rolls back
			echo "<br>Second interview Transaction rolled back <br> Error: " . $recInterview2Sql . "<br>" . mysqli_error($conn);  
		}
}


///////////////// Resume and CoverLetter///////////////////

//File uploads:

if(isset($_POST["submit"])) {
	$target_dir = "uploaded_Files/";
	$tempResume = $_POST['resume'];
	$tempResumes = explode("/", $tempResume);
	$target_file1 = $target_dir . $tempResumes[1]; //basename($_FILES["resume"]["name"]);
	
	$tempCover = $_POST['coverLetter'];
	$tempCovers = explode("/", $tempCover);
	$target_file2 = $target_dir . $tempCovers[1];//basename($_FILES["coverLetter"]["name"]);
	$uploadOk = 1;
	$resumeType = pathinfo($target_file1,PATHINFO_EXTENSION);
	$coverLetterType = pathinfo($target_file2,PATHINFO_EXTENSION);
	
	//rename("user/image1.jpg", "user/del/image1.jpg");
	
	if(!empty($_POST['resume'])){
		echo "<br>";
	}
	else{
		echo "resume cannot be empty!";
	}
	// Check if file already exists

	if (file_exists($target_file1)) {
		echo "Sorry, resume already exists.<br>";
		$uploadOk = 0;
	}
	if($_POST['coverLetter']!= "temp_uploadedFiles/"){
		if (file_exists($target_file2)) {
			echo "Sorry, coverLetter already exists.<br>";
			$uploadOk = 0;
		}
	}


	// Check file size
	/*
	if ($_FILES["resume"]["size"] > 500000) {
		echo "Sorry, resume is too large.<br>";
		$uploadOk = 0;
	}
	if ($_FILES["coverLetter"]["size"] > 500000) {
		echo "Sorry, coverLetter is too large.<br>";
		$uploadOk = 0;
	}
	*/
	// Allow certain file formats
	
	if($resumeType != "txt" && $resumeType != "doc" && $resumeType != "docx" && $resumeType != "pdf") {
		echo "Sorry, only doc, docx, txt, and pdf files are allowed.<br>";
		$uploadOk = 0;
	}
	if($_POST['coverLetter']!= "temp_uploadedFiles/"){
		if($coverLetterType != "txt" && $coverLetterType != "doc" && $coverLetterType != "docx" && $coverLetterType != "pdf") {
			echo "Sorry, only doc, docx, txt, and pdf files are allowed.<br>";
			$uploadOk = 0;
		}
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.<br>";
	// if everything is ok, try to upload file
	} else {
		//$target_dir . $recID . "-Resume" . "." . $resumeType;$coverLetterType
		//rename($_POST['resume'], $target_file1);
		//rename($_POST['coverLetter'], $target_file2);
		rename($_POST['resume'], $target_dir . $recID . "-Resume" . "." . $resumeType);
		
		if($_POST['coverLetter']!= "temp_uploadedFiles/"){
			rename($_POST['coverLetter'], $target_dir . $recID . "-CL" . "." . $coverLetterType);
		}

		if (file_exists($target_dir . $recID . "-Resume" . "." . $resumeType)) {
			echo "Resume has been stored on disk.<br>";
			$uploadOk = 1;
		}
		if (file_exists($target_dir . $recID . "-CL" . "." . $coverLetterType)) {
			echo "Cover Letter has been stored on disk.<br>";
			$uploadOk = 1;
		}
	}
}


//////////////////////////////
if ($sourceResult and $recResult and $lang2Result and $recLang2Result and $lang3Result and $recLang3Result and
 $distResult and $disqualifyResult and $recLicenseResult and $recLicense2Result and $recLicense3Result and $recLicense4Result and
  $recLicense5Result and $highschoolResult and $recHighschoolResult and $heResult and $recHEResult and $uploadOk == 1) {
   commit($conn); // transaction is committed
    echo "<br> New record created successfully <br> Database transaction was successful"; 
}

else{
   rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br>" ;
}


/* if ( $recResult and $distResult and $recLicenseResult and $recLicense2Result and
 $recLicense3Result and $recLicense4Result and $recLicense5Result) {
   commit($conn); // transaction is committed
    echo "<br> New record created successfully <br> Database transaction was successful"; 
}

else{
   rollback($conn); // transaction rolls back
    echo "<br> Transaction rolled back <br>" ;
}
*/
mysqli_close($conn);
?>

