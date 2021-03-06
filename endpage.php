<?php
        session_start();
        if(!isset($_SESSION["userid"]))
        {
                header("location: login.php");
        }
        $name=$_SESSION["userid"];
?>

<html>
<head>
<title>Profile of <?php echo $name;?></title>
</head>

<h3><a href="frontpage.html">Click here to log out</a></h3>
</html>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        img {
            align-content: flex-start;
            width: 130px;
            height: 30px;
        }
    </style>
    <!-- Title -->
   <title>Profile of <?php echo $name;?></title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>
<header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="razoNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>
                    <h1>Hello <?php echo $name;?></h1>
                    <h3><a href="logout.php">Click here to log out</a></h3>
                    
                    <div class="header-list">
                        <ul>
                        
                            <div class="icon"></div>
                            <li class="icon_pin"></li>
                            <li>NEW DELHI,INDIA</li>
                    
                            <div class="icon"></div>
                            <li class="icon_phone"></li>
                            <li>+11 123 4567890</li>

                            
                    
                    </ul>
                    
            </div>
        </div>
        </nav>
    </div>
    </div>
    </div>
</header>
<!-- Header Area End -->
<style>
    li {
        float: left;
        font: arial narrow;
        color: rosybrown;
    }
    h2{
        
        font: arial narrow;
        color: rosybrown;
    }
    h1{
    	 align-content: centre;
        font: arial narrow;
        color: rosybrown;
    }
</style>


<!-- Music Charts Area Start -->
<section class="razo-music-charts-area section-padding-80 bg-overlay bg-img jarallax" style="background-image: url(img/bg-img/31.jpg);">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-sm-6">
                <div class="section-heading white">
                    <h2>Music Chart</h2>
                </div>
            </div>
            <!-- Show All Button -->
            <div class="col-sm-6">
                <div class="show-all-button mb-50 text-right">
                    <a href="#" class="btn show-all-btn"> </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">


                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>1.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/25.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/01 London Thumakda - Queen (PagalWorld.com).mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>London Thumkada - <span>Queen</span></h5>
                        </div>
                    </div>

                </div>



                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>2.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/261.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/02 - Nashe Si Chadh Gayi (320 Kbps) - DownloadMing.SE.mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Nashe se Chadgai- <span>Befikre</span></h5>
                        </div>
                    </div>

                </div>
                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>3.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/42.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/Kadar-(Mr-Jatt.com).mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>kadar- <span>Mankrit</span></h5>
                        </div>
                    </div>

                </div>
                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>4.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/38.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/Bon Appetit Ft Migos - Katy Perry (DJJOhAL.Com).mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Bon Appetit- <span>Katty Perry</span></h5>
                        </div>
                    </div>

                </div>
                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>5.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/26.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/Nachange Saari Raat-(Mr-Jatt.com).mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Nachange saari raat - <span></span></h5>
                        </div>
                    </div>

                </div>
                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>6.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/28.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/Kala Chashma-(Mr-Jatt.com).mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5> Kala Chashma <span></span></h5>
                        </div>
                    </div>

                </div>


                }
                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>7.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/31.jpg" alt="">

                        </div>

                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/Kar Gayi Chull-(Mr-Jatt.com).mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Kar Gayi Chull <span></span></h5>
                        </div>
                    </div>

                </div>

                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="500ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>8.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/27.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>The Greatest Showman - <span>Soundtrack</span></h5>
                        </div>
                    </div>

                </div>

                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="700ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>9.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/28.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Mamma Mia! Here We Go Again - <span>Soundtrack</span></h5>
                        </div>
                    </div>

                </div>

                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="700ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>10.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="img/bg-img/28.jpg" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Mamma Mia! Here We Go Again - <span>Soundtrack</span></h5>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>
    </div>
</section>
<!-- Music Charts Area End -->
                                </div>

                            </div>
                        </div>
                    </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Main Footer Area End -->
<!-- All JS Files -->
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Popper -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="js/razo.bundle.js"></script>
<!-- Active -->
<script src="js/default-assets/active.js"></script>

</body>

</html>


