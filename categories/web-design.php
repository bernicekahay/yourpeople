<?php
require_once(__DIR__."/../css/category-header.php");
?>
    <div class="row">
        <div class="col-lg-12 text-center bring-up">
            <h2 class="service-text web-design-text">Web Design</h2>
        </div>
    </div>

    <img class="rotate-notification" src ="../images/prompt-rotate.png">

    <div id="wrapper">
        <img class="bg-general bg-web" src="../images/bg/web-design-bg.png">
    <div class="demo demo-web">
        <div class="item">
            <div class="clearfix">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    <li data-thumb="../images/peoples-work/web-design/your-people5.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/your-people5.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/mg-dental1.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/mg-dental1.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/bside1.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/bside1.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/humboldtlib.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/humboldtlib.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/mountain-temple1.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/mountain-temple1.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/sexb1.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/sexb1.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/your-people1.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/your-people1.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/mg-dental2.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/mg-dental2.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/your-people2.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/your-people2.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/your-people3.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/your-people3.gif" height="550"/>
                    </li>

                    <li data-thumb="../images/peoples-work/web-design/sexb2.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/sexb2.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/sexb3.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/sexb3.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/sexb4.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/sexb4.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/bside2.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/bside2.gif" height="550"/>
                    </li>
                    <li data-thumb="../images/peoples-work/web-design/mountain-temple2.gif"> 
                        <img class="photo-images web-images" src="../images/peoples-work/web-design/mountain-temple2.gif" height="550"/>
                    </li>
                </ul>
            <!-- <clearfix> -->
            </div>
        <!-- <item> -->
        </div>
    <!-- <demo> -->
    </div>
    <!-- <wrapper> -->
    </div>


    <footer>
    <div class="container">
        <div class="row">
            
            <div class="profile">
                <a href="billywong.html">
                    <div class="col-xs-4 col-md-4">
                        <img class="img-blur" src="../images/headshots/BillyWong.png">
                        <br>
                        <p class="profile-text">
                            Billy Wong
                        </p>
                    </div>
                </a>
            </div>
            <div class="profile">
                <a href="ruvanjayaweera.html">
                    <div class="col-xs-4 col-md-4">
                        <img class="img-blur" src="../images/headshots/RuvanJayaweera.png">
                        <br>
                        <p class="profile-text">
                            Ruvan Jayaweera
                        </p>
                    </div>
                </a>
            </div>
            <div class="profile">
                <a href="mildredcorrea.html">
                    <div class="col-xs-4 col-md-4">
                        <img class="img-blur" src="../images/headshots/MildredCorrea.png">
                        <br>
                        <p class="profile-text">
                            Mildred Correa
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </footer>

<!-- jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<!-- Lightslider Javscript -->
<script type="text/javascript" src="../js/lightslider.js"></script>
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



</body>



</html>