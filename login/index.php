<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/header.php"); ?>
<body>

<div class = "pages-section">
<img class="background slideInLeft animated clouds" src="../images/world/clouds-left.png">
<div class = "login-logo">
	<img class = "animated bounceInUp" src="../images/YourPeopleLogo.png">
</div>
<img class="background slideInRight animated clouds" src="../images/world/clouds-right.png">
<div class = "login-title" id = "login-title-no-padding">Login<div>
	<div class="login">
	<?php echo returnPageError(); ?>
		<form class="" action="login.php" method="post">
			<div class = "input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type = "text" name = "username" id = "username" class = "form-control no-border" placeholder = "username">
			</div>
			<label> </label>
			<div class = "input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type = "password" name = "password" id = "password" class = "form-control no-border" placeholder = "password">
			</div>
			<label> </label>
			<div class = "form-inline">
				<input type = "submit" class = "btn btn-primary pull-left" value = "Login">
			</div>
		</form>
	</div>
	<div class="signup">
		<form class="" action="newuser.php" method="post">
			<div class = "form-inline">
				<input type = "submit" class = "btn btn-primary pull-right" value = "Sign Up">
			</div>
		</form>
	</div>

</div>
</div>
<?php require_once("includes/footer.php"); ?>