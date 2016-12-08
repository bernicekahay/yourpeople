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
	$email = mysqli_real_escape_string($conn, $data["email"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$photo = "images/YourPeopleLogo.png";
	$image = "images/peoples-work/stock-upload.jpg";
	$sql = "INSERT INTO Person (username, first_name, last_name, email, password, image, piece1, piece2, piece3, piece4, piece5)
	VALUES ('$username', '$first_name', '$last_name', '$email', '$password', '$photo', '$image', '$image', '$image', '$image', '$image')";
	$success = "There was an error creating your acount.";
	if ($conn->query($sql) === TRUE) {
    	$success = "Account created succesfully.";
	} else {
    	$conn->error;
	}
	$conn->close();
	return $success;
}

/**Note that images require a '/' in front of the path, which is accounted for in $image.**/
function editPage($data) {

	$conn = new mysqli(SERVER_NAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
	$username = $data["username"];
	$first_name = mysqli_real_escape_string($conn, $data["first_name"]);
	$last_name = mysqli_real_escape_string($conn, $data["last_name"]);
	$email = mysqli_real_escape_string($conn, $data["email"]);
	$phone = mysqli_real_escape_string($conn, $data["phone"]);
	$category = mysqli_real_escape_string($conn, $data["category"]);
	$quote = mysqli_real_escape_string($conn, $data["quote"]);
	$biography = mysqli_real_escape_string($conn, $data["biography"]);
	$video1 = mysqli_real_escape_string($conn, $data["video1"]);
	$video2 = mysqli_real_escape_string($conn, $data["video2"]);
	$video3 = mysqli_real_escape_string($conn, $data["video3"]);
	$video4 = mysqli_real_escape_string($conn, $data["video4"]);
	$video5 = mysqli_real_escape_string($conn, $data["video5"]);
	$soundcloud = mysqli_real_escape_string($conn, $data["soundcloud"]);


	if (!file_exists("../../images/peoples-work/gallery/".$username)) {
    	mkdir("../../images/peoples-work/gallery/".$username, 0777, true);
	}

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

	if(file_exists($_FILES['piece1']['tmp_name']) || is_uploaded_file($_FILES['piece1']['tmp_name'])) {
		$tmp = $_FILES['piece1'] ['tmp_name'];
		$name = $_FILES['piece1'] ['name'];
		$target = "../../images/peoples-work/gallery/".$username."/".$_FILES['piece1']['name'];
		if (move_uploaded_file($tmp, $target)) {
			$image = "images/peoples-work/gallery/".$username."/".$name;
			$query = "UPDATE Person SET piece1 = '$image' WHERE username = '$username'";
			if ($conn->query($query) === TRUE) {
			} else {
    			echo "Error updating picture: " . $conn->error;
			}
		}
	}

	if(file_exists($_FILES['piece2']['tmp_name']) || is_uploaded_file($_FILES['piece2']['tmp_name'])) {
		$tmp = $_FILES['piece2'] ['tmp_name'];
		$name = $_FILES['piece2'] ['name'];
		$target = "../../images/peoples-work/gallery/".$username."/".$_FILES['piece2']['name'];
		if (move_uploaded_file($tmp, $target)) {
			$image = "images/peoples-work/gallery/".$username."/".$name;
			$query = "UPDATE Person SET piece2 = '$image' WHERE username = '$username'";
			if ($conn->query($query) === TRUE) {
			} else {
    			echo "Error updating picture: " . $conn->error;
			}
		}
	}

	if(file_exists($_FILES['piece3']['tmp_name']) || is_uploaded_file($_FILES['piece3']['tmp_name'])) {
		$tmp = $_FILES['piece3'] ['tmp_name'];
		$name = $_FILES['piece3'] ['name'];
		$target = "../../images/peoples-work/gallery/".$username."/".$_FILES['piece3']['name'];
		if (move_uploaded_file($tmp, $target)) {
			$image = "images/peoples-work/gallery/".$username."/".$name;
			$query = "UPDATE Person SET piece3 = '$image' WHERE username = '$username'";
			if ($conn->query($query) === TRUE) {
			} else {
    			echo "Error updating picture: " . $conn->error;
			}
		}
	}

	if(file_exists($_FILES['piece4']['tmp_name']) || is_uploaded_file($_FILES['piece4']['tmp_name'])) {
		$tmp = $_FILES['piece4'] ['tmp_name'];
		$name = $_FILES['piece4'] ['name'];
		$target = "../../images/peoples-work/gallery/".$username."/".$_FILES['piece4']['name'];
		if (move_uploaded_file($tmp, $target)) {
			$image = "images/peoples-work/gallery/".$username."/".$name;
			$query = "UPDATE Person SET piece4 = '$image' WHERE username = '$username'";
			if ($conn->query($query) === TRUE) {
			} else {
    			echo "Error updating picture: " . $conn->error;
			}
		}
	}

	if(file_exists($_FILES['piece5']['tmp_name']) || is_uploaded_file($_FILES['piece5']['tmp_name'])) {
		$tmp = $_FILES['piece5'] ['tmp_name'];
		$name = $_FILES['piece5'] ['name'];
		$target = "../../images/peoples-work/gallery/".$username."/".$_FILES['piece5']['name'];
		if (move_uploaded_file($tmp, $target)) {
			$image = "images/peoples-work/gallery/".$username."/".$name;
			$query = "UPDATE Person SET piece5 = '$image' WHERE username = '$username'";
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
	 	category = (case when '$category' = '' then category else '$category' end),
	 	quote = (case when '$quote' = '' then quote else '$quote' end),
	 	biography = (case when '$biography' = '' then biography else '$biography' end),
		video1 = (case when '$video1' = '' then video1 else '$video1' end),
		video2 = (case when '$video2' = '' then video2 else '$video2' end),
		video3 = (case when '$video3' = '' then video3 else '$video3' end),
		video4 = (case when '$video4' = '' then video4 else '$video4' end),
		video5 = (case when '$video5' = '' then video5 else '$video5' end),
		soundcloud = (case when '$soundcloud' = '' then soundcloud else '$soundcloud' end)

	WHERE username = '$username'";
	$success = "There was an error updating your record.";
	if ($conn->query($sql) === TRUE) {
    	$success = "Record updated succesfully.";
	} else {
    	$conn->error;
	}

	$conn->close();
	return $success;
}
?>
