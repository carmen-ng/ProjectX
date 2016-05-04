
<?php
/////////////// Write into database///////////////
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'rec';

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*
$user_first_name = $_POST['user_first_name'];
$user_middle_initial = $_POST['user_middle_initial'];
$user_last_name = $_POST['user_last_name'];

$_POST[user_extra_language]
$_POST[user_extra_ged]
$_POST[disqualified]
$_POST[noNominator]*/


$sql = "INSERT INTO rec (recID, firstName, middleInitial, lastName, streetAddress, streetAddress2,
  city, zip, state, phone, secondPhone, firstLang, ged, sourceOfLead, noNominator, abc)

VALUES (Null, '$_POST[firstName]','$_POST[middleInitial]','$_POST[lastName]','$_POST[streetAddress]','$_POST[streetAddress2]',
	'$_POST[city]','$_POST[zip]','$_POST[recState]','$_POST[phone]',
	'$_POST[phone2]',
	'$_POST[lang]','$_POST[ged]',
	'$_POST[sourceOfLead]','$_POST[noNominator]', '$_POST[abc]');";

$result = mysqli_query($conn, $sql);
if (!$result) {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);  
} 

$recID= mysqli_insert_id($conn);

//echo "New Record has id: " .mysqli_insert_id($conn);

///////////////////////////////////////////////////////////////////
//$recID = int sqlite_last_insert_rowid (  resource dbhandle);
/*else {
    echo "New record created successfully";
}*/

///////////////////////////////////////////////////////////////////
/*
$recIDsql = "SELECT MAX(recID) FROM rec;";

$recID1 = mysqli_query($conn, $recIDsql);

if (mysqli_num_rows($recID1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($recID1)) {
        echo "id: " . $row["recID"]. "<br>";
    }
} else {
    echo "0 results";
}
/*
//echo "$recID1";
//echo $recIDsql;
/////////////////////////////////////////////////
/*$recIDsql = "SELECT sqlite_last_insert_rowid()
from rec;";
$recID = mysqli_query($conn, $recIDsql); */
//echo "recID:" .$recID;
/////////////////////////////////////////////////





$sql2 = "INSERT INTO language (languageID, languageName)
VALUES (Null, '$_POST[lang2]'); ";
$result = mysqli_query($conn, $sql2);
if (!$result) {
	echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);  
} 
$langID= mysqli_insert_id($conn);
//$langIDsql = "SELECT sqlite_last_insert_rowid()
//from language;";
//$langID = mysqli_query($conn, $langIDsql);




$sql3 = "INSERT INTO reclanguage (recID, langID, proficiency)
VALUES ('$recID', '$langID', '$_POST[proficiency2]'); ";
$result = mysqli_query($conn, $sql3);
if (!$result) {
	echo "Error: " . $sql3 . "<br>" . mysqli_error($conn); 
} 

echo "New record created successfully";

mysqli_close($conn);
?>







