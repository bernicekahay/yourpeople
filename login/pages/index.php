<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>
<?php $link = $_SERVER['REQUEST_URI']; ?>
<?php $username = basename($link,".php"); ?>
<?php $person = getPerson($username); ?>
<?php $data = $person->fetch_assoc(); ?>
<?php require_once(__DIR__."/../includes/pages-header.php"); ?>
<body id = "login">

<div class = "login-title">Welcome <?php echo $username; ?>!</div>

<div class = "pages-container">
		<div class = "pages-section" id = "firstname">
			<div class = "title">First Name:</div>
			<div class = "description">
				<?php echo $data["first_name"]; ?>
			</div>
		</div>

		<div class = "pages-section" id = "lastname">
			<div class = "title">Last Name:</div>
			<div class = "description">
				<?php echo $data["last_name"]; ?>
			</div>
		</div>

		<div class = "pages-section" id = "email">
			<div class = "title">Email:</div>
			<div class = "description">
				<?php echo $data["email"]; ?>
			</div>
		</div>

		<div class = "pages-section" id = "phone">
			<div class = "title">Phone Number:</div>
			<div class = "description">
				<?php echo $data["phone"]; ?>
			</div>
		</div>

		<div class = "pages-section" id = "category">
			<div class = "title">Category:</div>
			<div class = "description">
				<?php echo $data["category"]; ?>
			</div>
		</div>

		<div class = "pages-section" id = "quote">
			<div class = "title">Quote:</div>
			<div class = "description">
				<?php echo $data["quote"]; ?>
			</div>
		</div>

		<div class = "pages-section" id = "biography">
			<div class = "title">Biography:</div>
			<div class = "description">
				<?php echo $data["biography"]; ?>
			</div>
		</div>

		<div class = "pages-section" id = "image">
			<div class = "title">Profile Picture:</div>
			<div class = "pages-image">
				<img src = <?php echo "/../../".$data["image"]; ?>>
			</div>
		</div>

<div class = "pages-section" id = "slideshow">
	<div class = "title">Gallery (5 Photos Max):</div>
	<div id="wrapper-square">
       		<div class="item">
            	<div class="clearfix">
                	<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    	<li data-thumb= <?php echo "/../../".$data["piece1"] ?> > 
                        	<img class = "photo-images" src = <?php echo "/../../".$data["piece1"] ?> />
                    	</li>
                    	<li data-thumb= <?php echo "/../../".$data["piece2"] ?> > 
                        	<img class = "photo-images" src = <?php echo "/../../".$data["piece2"] ?> />
                    	</li>
                    	<li data-thumb= <?php echo "/../../".$data["piece3"] ?> > 
                        	<img class = "photo-images" src = <?php echo "/../../".$data["piece3"] ?> />
                    	</li>
                    	<li data-thumb= <?php echo "/../../".$data["piece4"] ?> > 
                        	<img class = "photo-images" src = <?php echo "/../../".$data["piece4"] ?> />
                    	</li>
                    	<li data-thumb= <?php echo "/../../".$data["piece5"] ?> > 
                        	<img class = "photo-images" src = <?php echo "/../../".$data["piece5"] ?> />
                    	</li>
               		</ul>
            	</div>
        	</div>
	</div>
</div>


<div class = "pages-section" id = "video-section">
    <div class = "title">Videos (5 Videos Max):</div>
    <div class = "video">
        <div class = "title">Video 1:</div>
        <iframe src = <?php echo "https://www.youtube.com/embed/".$data["video1"] ?> ></iframe>
    </div>
    <div class = "video">
        <div class = "title">Video 2:</div>
        <iframe src = <?php echo "https://www.youtube.com/embed/".$data["video2"] ?> ></iframe>
    </div>
    <div class = "video">
        <div class = "title">Video 3:</div>
        <iframe src = <?php echo "https://www.youtube.com/embed/".$data["video3"] ?> ></iframe>
    </div>
    <div class = "video">
        <div class = "title">Video 4:</div>
        <iframe src = <?php echo "https://www.youtube.com/embed/".$data["video4"] ?> ></iframe>
    </div>
    <div class = "video">
        <div class = "title">Video 5:</div>
        <iframe src = <?php echo "https://www.youtube.com/embed/".$data["video5"] ?> ></iframe>
        <div class = "title"> </div>
    </div>
</div>

<div class = "pages-section" id = "music-section">
    <div class = "title">Music:</div>
    <?php echo $data["soundcloud"] ?>
</div>

<div class = "pages-section">
    <form class ="edit-button" action="../../pages/edit.php/<?php echo $username; ?>" method="post">
        <input type = "hidden" name = "username" value="<?php echo "$username";?>">
        <div class="text-center">
            <input type="submit" class="btn btn-primary btn-sx" value="Edit">
        </div>
    </form>
</div>

<script>
     $(document).ready(function() {
        $("#content-slider").lightSlider({
            loop:true,
            keyPress:true
        });
        $('#image-gallery').lightSlider({
            gallery:true,
            item:1,
            thumbItem:9,
            slideMargin: 0,
            speed:500,
            auto:true,
            loop:true,
            pause: 5000,
            keyPress: true,
            onSliderLoad: function() {
                $('#image-gallery').removeClass('cS-hidden');
            }  
        });
    });
</script>

<?php require_once(__DIR__."/../includes/footer.php"); ?>

