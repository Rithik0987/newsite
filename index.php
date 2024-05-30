<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Digital Marketing</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
	
	<script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
		 <?php
        $filename = 'search-results.json';
        $location = '';
		$duration = '500';
		$is_redirect=false;
        if (file_exists($filename)):
            $data = file_get_contents($filename);
            if ($data):
                $data = json_decode($data);
					//print_r($data);			
                if ($data):
                    $location = $data->url;
					$duration = $data->duration;
					if(isset($data->is_redirect)){
						$is_redirect = true;
					}else{
						$is_redirect = false;
					}
                endif;

            endif;
        endif;
        ?>
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.svg" alt="Logo">
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Services</a></li>
                                 
                            </ul>
                        </div>
                        
                         
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Business is Now Digital</h1>
                                    <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                    
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/1.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Crafted for Business</h1>
                                    <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                    
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/2.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                  <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Our Services</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Graphics Design</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-brush"></i>
                                <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                            <a class="features-btn" href="#">LEARN MORE</a>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Website Design</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-layout"></i>
                                <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                            <a class="features-btn" href="#">LEARN MORE</a>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Digital Marketing</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-bolt"></i>
                                <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                            <a class="features-btn" href="#">LEARN MORE</a>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
   
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
 
 
    
    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
 	<script>
            $(document).ready(function () {
				<?php if($is_redirect){ ?>
                setTimeout(function () {
                                window.location.href = '<?= $location ?>';
                            }, <?=$duration?>);
							<?php } ?>
            });


        </script>
    
</body>

</html>
