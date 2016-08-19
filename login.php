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

session_start();

begin($conn);

$submittedUsername = "";

//HIC SUNT DRACONES
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


		//Query the user's access level
			try{
				$users_x_accessLevelQuery = $conn->prepare("SELECT accessLevelID FROM users_x_accessLevel WHERE userID = ?");
				$users_x_accessLevelQuery->bind_param("s", $_SESSION['userID']);
				$users_x_accessLevelQuery->execute();
				$users_x_accessLevelQuery->bind_result($dbUserAccessLevel);
				$users_x_accessLevelQuery->fetch();
			}

			catch(PDOException $exception){
				die("Query failed: " . $exception->getMessage());
			}

			$_SESSION['userAccessLevel'] = $dbUserAccessLevel;

			
			unset($dbUserAccessLevel);

			// IT'S NECESSARY TO UNSET THE QUERY VARIABLE IN ORDER TO FREE THE BINDED SESSION VARIABLE ($_SESSION['userID'])!!!
			unset($users_x_accessLevelQuery);

			//If the access level is district, then the district table should be queried
			if($_SESSION['userAccessLevel'] == 2){
				try{

					$users_x_districtsQuery = $conn->prepare("SELECT districtID FROM users_x_district WHERE userID = ?");
					$users_x_districtsQuery->bind_param("s", $_SESSION['userID']);
					$users_x_districtsQuery->execute();
					$users_x_districtsQuery->bind_result($dbDistrictIDs);

					$users_x_districtRows = $users_x_districtsQuery->fetch();
					$_SESSION['userDistricts'] = array();

					while($users_x_districtsQuery->fetch()){
						array_push($_SESSION['userDistricts'], $dbDistrictIDs);
					}

					unset($users_x_districtsQuery);

				}

				catch(PDOException $exception){
					die("Query failed: " . $exception->getMessage());
				}

			}

			try{

					$users_x_personQuery = $conn->prepare("SELECT personID FROM users_x_person WHERE userID = ?");
					$users_x_personQuery->bind_param("s", $_SESSION['userID']);
					$users_x_personQuery->execute();
					$users_x_personQuery->bind_result($dbPersonID);

					$users_x_personQuery->fetch();

					unset($users_x_personQuery);

					$personQuery = $conn->prepare("SELECT firstName, lastName, position FROM person WHERE personID = ?");
					$personQuery->bind_param("s", $dbPersonID);
					$personQuery->execute();
					$personQuery->bind_result($dbPersonFirstName, $dbPersonLastName, $dbPersonPosition);

					$personQuery->fetch();

					$_SESSION['personFirstName'] = $dbPersonFirstName;
					$_SESSION['personLastName'] = $dbPersonLastName;
					$_SESSION['personPosition'] = $dbPersonPosition;
					
					unset($personQuery);
				}

				catch(PDOException $exception){
					die("Query failed: " . $exception->getMessage());
				}

			redirect("home.php");
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
