<?php

/**Checks to see if the user is in the table.*/
function findUser($username) {
	$connectionString = "mysql:dbname=".DATABASE_NAME.";host=127.0.0.1";

	$pdo = new PDO($connectionString, DATABASE_USERNAME, DATABASE_PASSWORD);

	$sql = "SELECT * FROM person WHERE username = :username";

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

function editPage($data) {
	$username = $data["username"];
	$first_name = $data["first_name"];
	$last_name = $data["last_name"];
	$email = $data["email"];
	$phone = $data["phone"];
	$biography = $data["biography"];
	$imgFile = $_FILES["image"]["name"];
	$image = file_get_contents($imgFile);

	$conn = new mysqli(SERVER_NAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "UPDATE person 
	SET first_name = (case when '$first_name' = '' then first_name else '$first_name' end),
	 	last_name = (case when '$last_name' = '' then last_name else '$last_name' end),
	 	email = (case when '$email' = '' then email else '$email' end),
	 	phone = (case when '$phone' = '' then phone else '$phone' end),
	 	biography = (case when '$biography' = '' then biography else '$biography' end),
	 	image = (case when '$image' = '' then image else '$image' end)
	WHERE username = '$username'";

	if ($conn->query($sql) === TRUE) {
    	echo "Record updated successfully";
	} else {
    	echo "Error updating record: " . $conn->error;
	}

	$conn->close();
}
?>
