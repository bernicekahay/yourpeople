<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>
<?php require_once(__DIR__."/../includes/header.php"); ?>
<?php editPage($_POST); ?>
<?php $username = $_POST["username"]; ?>

			<form class ="" action="../pages/index.php/<?php echo $username; ?>" method="post">
				<input type = "hidden" name = "username" value="<?php echo "$username";?>">
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Go Back">
				</div>
			</form>
<?php require_once(__DIR__."/../includes/footer.php"); ?>