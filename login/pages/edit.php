<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>
<?php require_once(__DIR__."/../includes/header.php"); ?>
<?php $link = $_SERVER['REQUEST_URI']; ?>
<?php $username = basename($link,".php"); ?>

	<h2>Edit <?php echo $username; ?></h2>
	<div>
		<?php echo returnPageError(); ?>
	</div>
	<form action="../../pages/process_edit.php" method="post" enctype="multipart/form-data">
		<input type = "hidden" name = "username" value="<?php echo "$username";?>">
		<div class="form-group">
			<label for="title">First Name</label>
			<input type="text" name="first_name" id="firstname" class="form-control" 
			value="<?php echo $person["first_name"]; ?>">
		</div>

		<div class="form-group">
			<label for="title">Last Name</label>
			<input type="text" name="last_name" id="lastname" class="form-control" value="">
		</div>

		<div class="form-group">
			<label for="title">Email</label>
			<input type="email" name="email" id="email" class="form-control" value="">
		</div>

		<div class="form-group">
			<label for="title">Phone Number</label>
			<input type="tel" name="phone" class="form-control" value="">
		</div>

		<div class="form-group">
			<label for="title">Quote</label>
			(Max 60 Characters)
			<input type="quote" name="quote" id="quote" class="form-control" value="">
		</div>

		<div class="form-group">
			<label for="title">Biography</label>
			<textarea type = "text" name="biography" id="biography" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label for="file">Image</label>
 			<input type="file" name="image" id = "image">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary pull-right" value="Update">
		</div>
	</form>
<?php require_once(__DIR__."/../includes/footer.php"); ?>