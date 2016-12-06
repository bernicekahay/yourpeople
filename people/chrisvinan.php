<?php require_once(__DIR__."/includes/config.php"); ?>
<?php require_once(__DIR__."/includes/functions.php"); ?>
<?php $link = $_SERVER['REQUEST_URI']; ?>
<?php $username = basename($link,".php"); ?>
<?php require_once(__DIR__."/includes/header.php"); ?>
<?php $person = getPerson($username); ?>
<?php $data = $person->fetch_assoc(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="images/YourPeopleLogo.ico"/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $data["first_name"] . " " . $data["last_name"]; ?> - YourPeople</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/your-people.css" rel="stylesheet">
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="people">


    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container for-nav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html"><img class="yp-logo" src="images/YourPeopleLogo.png"><span class="blue">Your</span><span class="orange">People</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Our Services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="videography.html">Videography...</a></li>
                            <li><a href="art.html">Art...........</a></li>
                            <li><a href="graphic-design.html">Graphic Design</a></li>
                            <li><a href="marketing.html">Marketing.....</a></li>
                            <li><a href="music.html">Sound Design..</a></li>
                            <li><a href="music.html">Music.........</a></li>
                            <li><a href="photography.html">Photography...</a></li>
                            <li><a href="animation.html">Animation.....</a></li>
                            <li><a href="web-design.html">Web Design....</a></li>
                            <li><a href="performance.html">Performance...</a></li>
                            <li><a href="fashion.html">Fashion.......</a></li>
                            <li><a href="editing.html">Editing.......</a></li>
                            <li><a href="app-design.html">App Design....</a></li>
                            <li><a href="writing.html">Writing.......</a></li>
                            <li><a href="research.html">Research......</a></li>
                        </ul>
                    </li>
                    <li><a href="mission.html" class="red">Our Mission</a></li>
                    <li><a href="people.html" class="red">Our People</a></li>
                    <li><a href="clients.html" class="red">Our Clients</a></li>
                    <li><a href="contact.html" class="red">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $data["first_name"] . " " . $data["last_name"]; ?>
                    <small>"<?php echo $data["quote"]?>"</small>
                </h1>
            </div>
        </div>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">

                <img class="img-responsive" src= <?php echo $data["image"]; ?> alt="">
            </div>

            <div class="col-md-4">
                <h3>Biography</h3>
                <?php echo $data["biography"]; ?>
                <br>
                <h3>Contact Info:</h3> 
                PHONE NUMBER: <?php echo $data["phone"]; ?>
                <br>
                EMAIL: <?php echo $data["email"]; ?>
                <div class="container-fluid bring-down">
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="https://www.linkedin.com/in/chris-vinan-751593aa">
                                <img class="img-responsive portfolio-item img-blur" src="images/socialmedia-icons/linkedin.png">
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="https://www.youtube.com/channel/UCEmXD5StLPxoiwQxfJ061AA">
                                <img class="img-responsive portfolio-item img-blur" src="images/socialmedia-icons/youtube.png">
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="https://www.facebook.com/chrismauv">
                                <img class="img-responsive portfolio-item img-blur" src="images/socialmedia-icons/facebook.png">
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a href="https://vimeo.com/user14257708">
                                <img class="img-responsive portfolio-item img-blur" src="images/socialmedia-icons/vimeo.png">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->



    </div>
    <!-- /.container -->

<!-- jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php require_once(__DIR__."/includes/footer.php"); ?>