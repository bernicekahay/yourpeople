<?php
require_once(__DIR__."/includes/config.php");
require_once(__DIR__."/includes/functions.php");

$username = $_POST["username"];
$password = $_POST["password"];
$verification_code = $_POST["code"];

/**Make sure that username and password are not empty, and code is correct.**/
$validation = validateLogin($_POST);
$validationCode = validateCode($verification_code);

/**Validate our user.*/
if(!$validation[0]) {
	$error = http_build_query(array("error" => $validation[1]));
	header("Location: newuser.php?".$error);
	exit;
}

if((!$validationCode[0])){
	$error = http_build_query(array("error" => $validationCode[1]));
	header("Location: newuser.php?".$error);
	exit;
}

addPage($_POST);
require_once(__DIR__."/includes/header.php");
?>

	<form class ="" action="index.php">
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Return to Login">
		</div>
	</form>	

<?php require_once(__DIR__."/../includes/footer.php"); ?>



<!-- Security issues: have to make sure no two people have the same username -->