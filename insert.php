
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
$user_address = $_POST['user_address'];
$user_address_unit = $_POST['user_address_unit'];
$user_address_city = $_POST['user_address_city'];
$user_address_state = $_POST['user_address_state'];
$user_address_zip= $_POST['user_address_zip'];
$user_address_phone = $_POST['user_address_phone'];
$user_address_second_phone = $_POST['user_address_second_phone'];
$user_contact_email = $_POST['user_contact_email'];
$user_contact_second_email = $_POST['user_contact_second_email'];
$user_contact_resume = $_POST['user_contact_resume'];
$user_contact_coverletter = $_POST['user_contact_cover-letter'];
$_POST[user_extra_language]
$_POST[user_extra_ged]
$_POST[user_extra_processid]
$_POST[user_extra_districtid]
$_POST[user_extra_sourceoflead]
$_POST[user_extra_intern]
$_POST[disqualified]
$_POST[noNominator]*/


$sql = "INSERT INTO rec (firstName, middleInitial, lastName, streetAddress,
  unit, city, state, zip, phone,secondPhone, email, secondEmail, resume, coverLetter, firstLang, ged, sourceOfLead, intern,
  disqualified, noNominator)

VALUES ('$_POST[user_first_name]','$_POST[user_middle_initial]','$_POST[user_last_name]','$_POST[user_address]','$_POST[user_address_unit]','$_POST[user_address_city]','$_POST[user_address_state]','$_POST[user_address_zip]','$_POST[user_address_phone]','$_POST[user_address_second_phone]','$_POST[user_contact_email]','$_POST[user_contact_second_email]','$_POST[user_contact_resume]','$_POST[user_contact_coverletter]','$_POST[user_extra_language]','$_POST[user_extra_ged]','$_POST[user_extra_sourceoflead]','$_POST[user_extra_intern]','$_POST[disqualified]','$_POST[noNominator]');";

/*
VALUES ('Lori', 'Kim', '200 Harbor', 'C12', 'Irvine',
 'CA', '92603','9494568787', 'Lori@gmail.com',
  'abcdefg', 'English', '1', '2', '1', 'Personal nomination',
  '0', '0', '0')";
  */

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>




