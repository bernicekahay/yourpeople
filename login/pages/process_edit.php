<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>
<?php $success = editPage($_POST); ?>
<?php $link = $_SERVER['REQUEST_URI']; ?>
<?php $username = basename($link,".php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>YourPeople Login</title>
        <link href="../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../css/your-people.css" rel="stylesheet">
    <link href="../../../css/animate.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:700,900,400,500' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/png" href="../../../images/YourPeopleLogo.png"/>

    <nav id="loginNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container for-nav">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../../index.php" class="red">Logout</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</head>

<div class = "login-logo">
	<img class = "animated bounceIn" src="../../../images/YourPeopleLogo.png">
</div>
<div class = "login-title" id = "login-title-no-padding"> <?php echo $success?> <div>

			<form class ="" action="../index.php/<?php echo $username; ?>" method="post">
				<input type = "hidden" name = "username" value="<?php echo "$username";?>">
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Go Back">
				</div>
			</form>

<?php require_once(__DIR__."/../includes/footer.php"); ?>