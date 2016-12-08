<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/header.php"); ?>
<body id = "login">
<div class = "container">
<div class = "login-title">Create A New Account<div>
<label> </label>
	<div class="">
		<?php echo returnPageError(); ?>
	<form class="" action="process_add.php" method="post">
		<div class = "input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type = "text" name = "username" id = "username" class = "form-control no-border" placeholder="Username">
		</div>
		<label> </label>
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type="text" name="first_name" id="firstname" class="form-control no-border" placeholder="First Name">
		</div>
		<label> </label>
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type="text" name="last_name" id="lastname" class="form-control no-border" placeholder="Last Name">
		</div>
		<label> </label>
		<div class="input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			<input type="email" name="email" id="email" class="form-control no-border" placeholder="Email">
		</div>
		<label> </label>
		<div class = "input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type = "password" name = "password" id = "password" class = "form-control no-border" placeholder="Password">
		</div>
		<label> </label>
		<div class = "input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type = "text" name = "code" id = "code" class = "form-control no-border" placeholder="Verification Code">
		</div>
		<label> </label>
		<div class = "form-group">
			<input type = "submit" class = "btn btn-primary" value = "Register">
		</div>
	</form>
<?php require_once("includes/footer.php"); ?>