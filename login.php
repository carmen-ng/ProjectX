<?php
/////////////// Get login credentials///////////////
$host = '127.0.0.1';	
$user = 'root';
$pass = '';
$db = 'recruiter2';


// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function begin($conn){
    mysqli_query($conn,"BEGIN");
}

begin($conn);

$submittedUsername = "";


if(isset($_POST['username']) and isset($_POST['password'])){

	$username = $_POST['username'];

	try{

		$usersQuery = $conn->prepare("SELECT userID, username, passwd FROM users WHERE username = ?");
		$usersQuery->bind_param("s", $username);
		$usersQuery->execute();
		$usersQuery->bind_result($dbUserID, $dbUsername, $dbPasswdHash);
		$usersRow = $usersQuery->fetch();

		$loginSuccess = false;

		if($usersRow){
			$hash = hash('sha256', $_POST['password']);

			if ($hash == $dbPasswdHash) {
				$loginSuccess = true;
			}

			else {
				die('<script type="text/javascript">alert("Passwords don\'t match");window.location=\'login.html\';</script>');
			}
		}
	}

	catch(PDOException $exception){
		die("Query failed: " . $exception->getMessage());
	}

		if($loginSuccess){

			$_SESSION['userID'] = $dbUserID;
			$_SESSION['username'] = $dbUsername;

			unset($usersRow['passwd']);
			unset($dbPasswdHash);
			unset($usersQuery);


		// 	//Query the user's access level
		// 	$users_x_accessLevelQuery = "SELECT userID, accessLevelID FROM users_x_accessLevel WHERE userID = :userID";
		// 	$users_x_accessLevelParameters = array(':userID' => $dbUserID);

		// 	try{
		// 		$users_x_accessLevelStatements = $conn->prepare($users_x_accessLevelQuery);
		// 		$return2 = $users_x_accessLevelStatements->execute($users_x_accessLevelParameters);
		// 	}

		// 	catch(PDOException $exception){
		// 		die("Query failed: " . $exception->getMessage());
		// 	}

		// 	$users_x_accessLevelRow = $users_x_accessLevelStatements->fetch();
		// 	$_SESSION['access_level'] = $users_x_accessLevelRow['accessLevelID'];

		// 	//If the access level is district, then the district table should be queried
		// 	if($users_x_accessLevelRow['accessLevelID'] == 2){
		// 		$users_x_districtsQuery = "SELECT userID, districtID FROM users_x_district WHERE userID = :userID";
		// 		$users_x_districtsParameters = array(':userID' => $usersRow['userID']);

		// 		try{

		// 			$users_x_districtsStatements = $conn->prepare($users_x_districtsQuery);
		// 			$return3 = $users_x_districtsStatements->execute($users_x_districtsParameters);
		// 		}

		// 		catch(PDOException $exception){
		// 			die("Query failed: " . $exception->getMessage());
		// 		}

		// 		$users_x_distRow = $users_x_districtsStatements->fetch();
		// 		$_SESSION['userDistrictID'] = $users_x_distRow['districtID'];
		// 	}

			redirect("home.html");
			exit();
		}
	}

mysqli_close($conn);

function redirect($url){
    if (headers_sent()){
      die('<script type="text/javascript">window.location=\''. $url .'\';</script>');
    }
    else {
      header('Location: ' . $url);
      die();
    }    
}

?>
