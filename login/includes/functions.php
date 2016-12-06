<?php

/**Checks to see if the user is in the table.*/
function findUser($username) {
	$connectionString = "mysql:dbname=".DATABASE_NAME.";host=192.185.4.67";

	$pdo = new PDO($connectionString, DATABASE_USERNAME, DATABASE_PASSWORD);

	$sql = "SELECT * FROM Person WHERE username = :username";

	$statement = $pdo->prepare($sql);

	$executed = $statement->execute([
		":username"=>$username
	]);

	if(!$executed) {
		print_r($statement->errorInfo());
		exit("An error occured executing statement");
	}

	$result = $statement->fetchAll();

	return $result;

}

function loginUser($user) {
	startSession();
	$_SESSION["id"] = $user["id"];
	$_SESSION["username"] = $user["username"];
	return $_SESSION["username"] && $_SESSION["id"];
}

function startSession(){
	if(session_status() == PHP_SESSION_NONE) {
		session_start();
	}
}

/**Checks login page for errors.*/
function validateLogin($details){

	$toBeValidated = ["username", "password"];
	$errors = [];

	foreach($toBeValidated as $input){
		if(!isset($details[$input]) || strlen($details[$input]) === 0) {
			$errors[$input] = "$input cannot be empty";
		}
	}
	if(count($errors) !== 0) {
		return [false, $errors];
	}
	return [true, $errors];
}

/**Checks the Verification code for New User.**/
function validateCode($details){
	$validation = ($details == DATABASE_PASSWORD);
	$errors = "";
	if(!$validation) {
		$errors = "Verification code invalid.";
		return [false, $errors];
	} else {
		return [true, $errors];
	}
}

function returnPageError() {
	$errorString = "";

	if(isset($_GET["error"])){
		if(is_array($_GET["error"])){
			foreach($_GET["error"] as $error) {
				$errorString = 
					$errorString . "<p><span class = 'label label-danger'>{$error}</span></p>";
			}
		}
		else {
			$error = $_GET["error"];
			$errorString = "<p><span class = 'label label-danger'>{$error}</span></p>";
		}
	}
	return $errorString;
}

function getPerson($username) {
	$conn = new mysqli(SERVER_NAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
	$sql = "SELECT * FROM Person WHERE username = '$username'";
	$result = $conn->query($sql);
	return $result;
}

function addPage($data) {
	$conn = new mysqli(SERVER_NAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
	$username = $data["username"];
	$first_name = mysqli_real_escape_string($conn, $data["first_name"]);
	$last_name = mysqli_real_escape_string($conn, $data["last_name"]);
	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$sql = "INSERT INTO Person (username, first_name, last_name, email, password)
	VALUES ('$username', '$first_name', '$last_name', '$email', '$password')";
	if ($conn->query($sql) === TRUE) {
    	echo "Record created successfully.";
	} else {
    	echo "Error creating record: " . $conn->error;
	}
	$conn->close();
}

/**Note that images require a '/' in front of the path, which is accounted for in $image.**/
function editPage($data) {

	$conn = new mysqli(SERVER_NAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
	$username = $data["username"];
	$first_name = mysqli_real_escape_string($conn, $data["first_name"]);
	$last_name = mysqli_real_escape_string($conn, $data["last_name"]);
	$email = $data["email"];
	$phone = $data["phone"];
	$quote = mysqli_real_escape_string($conn, $data["quote"]);
	$biography = mysqli_real_escape_string($conn, $data["biography"]);



	if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) {
		$tmp = $_FILES['image'] ['tmp_name'];
		$name = $_FILES['image'] ['name'];
		$target = "../../images/headshots/".$_FILES['image']['name'];
		if (move_uploaded_file($tmp, $target)) {
			$image = "images/headshots/".$name;
			$query = "UPDATE Person SET image = '$image' WHERE username = '$username'";
			if ($conn->query($query) === TRUE) {
			} else {
    			echo "Error updating picture: " . $conn->error;
			}
		}
	}


	$sql = "UPDATE Person 
	SET first_name = (case when '$first_name' = '' then first_name else '$first_name' end),
	 	last_name = (case when '$last_name' = '' then last_name else '$last_name' end),
	 	email = (case when '$email' = '' then email else '$email' end),
	 	phone = (case when '$phone' = '' then phone else '$phone' end),
	 	quote = (case when '$quote' = '' then quote else '$quote' end),
	 	biography = (case when '$biography' = '' then biography else '$biography' end)
	WHERE username = '$username'";

	if ($conn->query($sql) === TRUE) {
    	echo "Record updated successfully";
	} else {
    	echo "Error updating record: " . $conn->error;
	}

	$conn->close();
}
?>
