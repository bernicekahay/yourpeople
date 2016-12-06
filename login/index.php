<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/header.php"); ?>
			<h2>Login Page</h2>
			<div class="">
				<?php echo returnPageError(); ?>
			<form class="" action="login.php" method="post">
				<div class = "form-group">
					<label for = "username">Username</label>
					<input type = "text" name = "username" id = "username" class = "form-control">
				</div>
					<div class = "form-group">
					<label for = "password">Password</label>
					<input type = "password" name = "password" id = "password" class = "form-control">
				</div>
				<div class = "form-group">
					<input type = "submit" class = "btn btn-primary" value = "Login">
				</div>
			</form>
<?php require_once("includes/footer.php"); ?>