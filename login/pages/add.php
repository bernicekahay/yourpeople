<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>
<?php require_once(__DIR__."/../includes/header.php"); ?>
	<h2>Add Person</h2>
	<div>
		<?php echo returnPageError(); ?>
	</div>
	<form action="/pages/process_add.php" method="post">
		<div class="form-group">
			<label for="title">First Name</label>
			<input type="text" name="firstname" id="firstname" class="form-control" value="">
		</div>

		<div class="form-group">
			<label for="title">Last Name</label>
			<input type="text" name="lastname" id="lastname" class="form-control" value="">
		</div>

		<div class="form-group">
			<label for="title">Email</label>
			<input type="email" name="email" id="email" class="form-control" value="">
		</div>

		<div class="form-group">
			<label for="title">Phone Number</label>
			(<input type=tel size=3>) <input type=tel size=3> - <input type=tel size=4>
		</div>

		<div class="form-group">
			<label for="body">Biography</label>
			<textarea name="body" id="biography" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label for="published">
				<input type="checkbox" name="published" id="published" value=1> Publish?
			</label>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary pull-right" value="Create">
		</div>
	</form>
<?php require_once(__DIR__."/../includes/footer.php"); ?>