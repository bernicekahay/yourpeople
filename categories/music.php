<?php
require_once(__DIR__."/../css/category-header.php");
?>
    <div class="row">
        <div class="col-lg-12 text-center bring-up">
            <h2 class="service-text music-text">Music</h2>
        </div>
    </div>

    <img class="rotate-notification" src ="../images/prompt-rotate.png">

    <div id="wrapper">
        <img class="bg-general bg-music" src="../images/bg/music-bg.jpg">
    </div>

    <div id="wrapper-vid">

        <div class="musics">
            <iframe class="soundcloud" width="900" height="540" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/251889462&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
        </div>
    </div>


    <footer>

    <div class="container">
        <div class="row">



            <div class="profile">
                <a href="torisweeney.html">
                    <div class="col-xs-3 col-md-3">
                        <img class="img-blur" src="../images/headshots/ToriSweeney.png">
                        <br>
                        <p class="profile-text">
                            Tori Sweeney
                        </p>
                    </div>
                </a>
            </div>
            <div class="profile">
                <a href="mathewwang.html">
                    <div class="col-xs-3 col-md-3">
                        <img class="img-blur" src="../images/headshots/MathewWang.png">
                        <br>
                        <p class="profile-text">
                            Mathew Wang
                        </p>
                    </div>
                </a>
            </div>
            <div class="profile">
                <a href="eddietaylor.html">
                    <div class="col-xs-3 col-md-3">
                        <img class="img-blur" src="../images/headshots/EddieTaylor.png">
                        <br>
                        <p class="profile-text">
                            Eddie Taylor
                        </p>
                    </div>
                </a>
            </div>
            <div class="profile">
                <a href="marcuscrow.html">
                    <div class="col-xs-3 col-md-3">
                        <img class="img-blur" src="../images/headshots/MarcusCrow.png">
                        <br>
                        <p class="profile-text">
                            Marcus Crow
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
            auto:false,
            loop:true,
            pause: 10000,
            keyPress: true,
            onSliderLoad: function() {
                $('#image-gallery').removeClass('cS-hidden');
            }  
        });
    });
</script>

</body>


</html>