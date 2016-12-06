<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>
<?php $link = $_SERVER['REQUEST_URI']; ?>
<?php $username = basename($link,".php"); ?>
<?php require_once(__DIR__."/../includes/header.php"); ?>
<?php $person = getPerson($username); ?>
<?php $data = $person->fetch_assoc(); ?>
			<h2>Welcome <?php echo $username; ?>!</h2>
			<div class = "person">
			<div class = "title"> <b>First Name</b>:
				<?php echo $data["first_name"]; ?>
			</div>
			<div class = "title"> <b>Last Name</b>:
				<?php echo $data["last_name"]; ?>
			</div>
			<div class = "title"> <b>Email</b>:
				<?php echo $data["email"]; ?>
			</div>
			<div class = "title"> <b>Phone Number</b>:
				<?php echo $data["phone"]; ?>
			</div>
			<div class = "title"> <b>Quote</b>:
				<?php echo $data["quote"]; ?>
			</div>
			<div class = "title"> <b>Biography</b>:
				<?php echo $data["biography"]; ?>
			</div>
			<div class = "title"> <b>Image</b>:
				<img class = "img-responsive" src = <?php echo "/../../".$data["image"]; ?>>
			</div>
			</br>
			<form class ="" action="../../pages/edit.php/<?php echo $username; ?>" method="post">
				<input type = "hidden" name = "username" value="<?php echo "$username";?>">
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Edit">
				</div>
			</form>
<?php require_once(__DIR__."/../includes/footer.php"); ?>