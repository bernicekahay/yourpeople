<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>
<?php $link = $_SERVER['REQUEST_URI']; ?>
<?php $username = basename($link,".php"); ?>
<?php require_once(__DIR__."/../includes/pages-header.php"); ?>
<body id = "login">
<div class = "login-title">Edit <?php echo $username; ?></div>
<div>
	<?php echo returnPageError(); ?>
</div>

<form action="../../pages/process_edit.php/<?php echo $username; ?>" method="post" enctype="multipart/form-data">
	<input type = "hidden" name = "username" value="<?php echo "$username";?>">

	<div class = "pages-container">

		<div class = "pages-section" id = "firstname">
			<div class = "title">First Name:</div>
				<input type="text" name="first_name" id="firstname" class="form-control no-border" value="">
		</div>

		<div class = "pages-section" id = "lastname">
			<div class = "title">Last Name:</div>
			<input type="text" name="last_name" id="lastname" class="form-control no-border" value="">
		</div>

		<div class = "pages-section" id = "email">
			<div class = "title">Email:</div>
			<input type="email" name="email" id="email" class="form-control no-border" value="">
		</div>

		<div class = "pages-section" id = "phone">
			<div class = "title">Phone Number:</div>
			<input type="tel" name="phone" class="form-control no-border" value="">
		</div>

		<div class = "pages-section" id = "category">
			<div class = "title">Category:</div>
			<select name = "category" class="form-control">
    			<option></option>
    			<option>Animation</option>
    			<option>App Design</option>
    			<option>Art</option>
    			<option>Editing</option>
    			<option>Fashion</option>
    			<option>Graphic Design</option>
     			<option>Marketing</option>
    			<option>Music</option>
    			<option>Performance</option>
    			<option>Photography</option>
    			<option>Research</option>
    			<option>Sound Design</option>
    			<option>Videography</option>
    			<option>Web Design</option>
    			<option>Writing</option>
			</select>
		</div>

		<div class = "pages-section" id = "quote">
			<div class = "title">Quote: (Max 60 Characters)</div>
			<input type="quote" name="quote" id="quote" class="form-control no-border" value="">
		</div>

		<div class = "pages-section" id = "biography">
			<div class = "title">Biography:</div>
			<textarea type = "text" name="biography" id="biography" class="form-control no-border"></textarea>
		</div>

		<div class = "pages-section" id = "image">
			<label class = "title" for="file">Profile Picture</label>
 			<input type="file" name="image" id = "image">
		</div>

		<div class = "pages-section" id = "piece1">
			<label class = "title" for="file">Image 1</label>
 			<input type="file" name="piece1" id = "piece1">
		</div>

		<div class = "pages-section" id = "piece2">
			<label class = "title" for="file">Image 2</label>
 			<input type="file" name="piece2" id = "piece2">
		</div>

		<div class = "pages-section" id = "piece3">
			<label class = "title" for="file">Image 3</label>
 			<input type="file" name="piece3" id = "piece3">
		</div>

		<div class = "pages-section" id = "piece4">
			<label class = "title" for="file">Image 4</label>
 			<input type="file" name="piece4" id = "piece4">
		</div>

		<div class = "pages-section" id = "piece5">
			<label class = "title" for="file">Image 5</label>
 			<input type="file" name="piece5" id = "piece5">
		</div>


		<div class = "pages-section" id = "video1">
			<label class = "title">Video 1 <a target="_blank" href="https://docs.joeworkman.net/rapidweaver/stacks/youtube/video-id">(Enter Youtube Video ID)</a></label>
 			<input type="text" name="video1" id = "video1">
		</div>

		<div class = "pages-section" id = "video2">
			<label class = "title">Video 2 <a target="_blank" href="https://docs.joeworkman.net/rapidweaver/stacks/youtube/video-id">(Enter Youtube Video ID)</a></label>
 			<input type="text" name="video2" id = "video2">
		</div>
		<div class = "pages-section" id = "video3">
			<label class = "title">Video 3 <a target="_blank" href="https://docs.joeworkman.net/rapidweaver/stacks/youtube/video-id">(Enter Youtube Video ID)</a></label>
 			<input type="text" name="video3" id = "video3">
		</div>
		<div class = "pages-section" id = "video4">
			<label class = "title">Video 4 <a target="_blank" href="https://docs.joeworkman.net/rapidweaver/stacks/youtube/video-id">(Enter Youtube Video ID)</a></label>
 			<input type="text" name="video4" id = "video4">
		</div>
		<div class = "pages-section" id = "video5">
			<label class = "title">Video 5 <a target="_blank" href="https://docs.joeworkman.net/rapidweaver/stacks/youtube/video-id">(Enter Youtube Video ID)</a></label>
 			<input type="text" name="video5" id = "video5">
		</div>
		<div class = "pages-section" id = "soundcloud">
			<label class = "title">Music <a target="_blank" href="http://shareandembed.help.soundcloud.com/customer/portal/articles/2167172-embedding-a-track-or-playlist-">(Enter SoundCloud Embed Code)</a></label>
 			<input type="text" name="soundcloud" id = "soundcloud">
		</div>


		<form class ="" action="../../pages/edit.php/<?php echo $username; ?>" method="post">
			<input type = "hidden" name = "username" value="<?php echo "$username";?>">
			<div class="text-center">
				<input type="submit" class="btn btn-primary btn-sx" value="Confirm">
			</div>
		</form>
</form>

<?php require_once(__DIR__."/../includes/footer.php"); ?>