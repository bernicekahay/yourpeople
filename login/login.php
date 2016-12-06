<?php
require_once(__DIR__."/includes/config.php");
require_once(__DIR__."/includes/functions.php");

$username = $_POST["username"];
$password = $_POST["password"];

$validation = validateLogin($_POST);

/**Validate our login page.*/
if(!$validation[0]){
	$error = http_build_query(array("error" => $validation[1]));
	header("Location: index.php?".$error);
	exit;
}

/**Checks to see if user is in the system and if password matches.*/
$user = findUser($username);
$pass = getPerson($username);
$pass = $pass->fetch_assoc();
$pass = $pass["password"];

if(count($user) > 1) {
	exit("You have duplicate username in your table");
}

if((count($user) === 0) || ($password != $pass)) {
	exit("Username or password is invalid");
}

$user = $user[0];

if(loginUser($user)) {
	header("Location: pages/index.php/$username");
} else {
	echo "Couldn't log in user";
}

?>