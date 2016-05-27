<?php
/////////////// Get login credentials///////////////
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

function begin($conn){
    mysqli_query($conn,"BEGIN");
}

begin($conn);

$submittedUsername = "";

if(!empty($_POST)){
	$usersQuery = "SELECT userID, username, passwd FROM users WHERE username = :username";
	$usersParameters = array(':username' => $_POST['useremail']);

	try{
		$usersStatements = $db->prepare($usersQuery);
		$return = $usersStatements->execute($usersParameters);
	}

	catch(PDOException $exception){
		die("Query failed: " . $exception->getMessage());
	}

	$loginSuccess = false;
	$usersRow = $usersStatements->fetch();

		if($usersRow){
			$hash = hash('sha256', $_POST['password']);

			if ($hash == $usersRow['passwd']) {
				$loginSuccess = true;
			}
		}

		if($loginSuccess){
			unset($usersRow['passwd']);
			$_SESSION['user'] = $usersRow;

			//Query the user's access level
			$users_x_alQuery = "SELECT userID, accessLevelID FROM users_x_accessLevel WHERE userID = :userID";
			$users_x_alParameters = array(':userID' => $usersRow['userID']);

			try{
				$users_x_alStatements = $db->prepare($users_x_alQuery);
				$return2 = $users_x_alStatements->execute($users_x_alParameters);
			}

			catch(PDOException $exception){
				die("Query failed: " . $exception->getMessage());
			}

			$users_x_alRow = $users_x_alStatements->fetch();
			$_SESSION['access_level'] = $users_x_alRow['accessLevelID'];

			//If the access level is district, then the district table should be queried
			if($users_x_alRow['accessLevelID'] == 2){
				$users_x_distQuery = "SELECT userID, districtID FROM users_x_district WHERE userID = :userID";
				$users_x_distParameters = array(':userID' => $usersRow['userID']);

				try{

					$users_x_distStatements = $db->prepare($users_x_distQuery);
					$return3 = $users_x_distStatements->execute($users_x_distParameters);
				}

				catch(PDOException $exception){
					die("Query failed: " . $exception->getMessage());
				}

				$users_x_distRow = $users_x_distStatements->fetch();
				$_SESSION['userDistrictID'] = $users_x_distRow['districtID'];
			}

			//header("Location: home.html")
		}

		else{
			print("Login Failed")
			$submittedUsername = htmlentities($_POST['useremail'], ENT_QUOTES, 'UTF-8'); 
		}

	}

mysqli_close($conn);
?>
