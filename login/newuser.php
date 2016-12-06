<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/header.php"); ?>
<h2>New User</h2>
	<div class="">
		<?php echo returnPageError(); ?>
	<form class="" action="process_add.php" method="post">
		<div class = "form-group">
			<label for = "username">Username</label>
			<input type = "text" name = "username" id = "username" class = "form-control">
		</div>
		<div class="form-group">
			<label for="title">First Name</label>
			<input type="text" name="first_name" id="firstname" class="form-control">
		</div>
		<div class="form-group">
			<label for="title">Last Name</label>
			<input type="text" name="last_name" id="lastname" class="form-control" value="">
		</div>
		<div class="form-group">
			<label for="title">Email</label>
			<input type="email" name="email" id="email" class="form-control" value="">
		</div>
		<div class = "form-group">
			<label for = "password">Password</label>
			<input type = "password" name = "password" id = "password" class = "form-control">
		</div>
		<div class = "form-group">
			<label for = "title">Verification Code</label>
			<input type = "text" name = "code" id = "code" class = "form-control">
		</div>
		<div class = "form-group">
			<input type = "submit" class = "btn btn-primary" value = "Login">
		</div>
	</form>
<?php require_once("includes/footer.php"); ?>