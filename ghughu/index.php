<?php

require_once("dashboard/action/connection.php");
require_once("dashboard/action/session_check.php");

?>

<!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">

<head>

    <!--meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta tags ends-->

    <title>SayKrezz</title>

    <!--- Links to google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800%7cRoboto+Mono:400,700%7cMerriweather:300%7cAbril+Fatface'
          rel='stylesheet' >
    <!-- Links to fonts ends -->

    <!-- Bootstrap stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <!-- Popup Images -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!-- css animation -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- custom stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- custom stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/special.css">
    
</head>

<body>

<!-- Start: Preloader section -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>
<!-- End: Preloader section -->

<!-- DOCUMENT WRAPPER STARTS -->
    <main>

        <!-- MAIN HEADER STARTS-->
            <header id="header">

            <!-- TOP NAVIGATION -->
            <nav class="top-navigation-bar navbar navbar-default navbar-fixed-top">
                <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle collapsed" 
                                data-toggle="collapse" data-target="#top-navigation-bar" 
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navigation-bar">
                        <img src="images/logo.png" style="width: 10%; margin-left: 11px;" alt="">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">about Us</a></li>
                            <li><a href="contact.php">Get in Touch</a></li> 
                            <?php if ( $sessionStatus == true ) :?>                          
                            <li><a href="dashboard/action/logout.php">Logout</a></li>
                            <?php endif ; ?>                       
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    </div>
                    </div>
                </div>
                <!-- /.container-->
            </nav>
            <!-- TOP NAVIGATION ENDS -->

        </header>
        
        <!-- main header ends-->

        <section id="banner" class="banner">
            
            <div class="container">
            <div id="ghughu-banner-carousel" class="carousel slide carousel-fade" data-ride="carousel">
              
               <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#ghughu-banner-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#ghughu-banner-carousel" data-slide-to="1"></li>
                    <li data-target="#ghughu-banner-carousel" data-slide-to="2"></li>
                  </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner full-height" role="listbox">
                <div class="item active banner-item">
                        <div class="row">
                        <div class="col-sm-7">
                              <h1 class="animated fadeInUp delay-2">We Pour <br> Our Emotion & Love.</h1>
                              <p class="animated fadeInUp delay-3">We pour our every piece of emotion and love everytime we cooking, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              n                 quis nostrud exercitation ullamco.</p>
                        </div>
                        <div class="col-sm-5 text-center hidden-xs">
                            <img src="images/banner-carousel/dough.jpg" class="animated fadeInUp delay-4 img-responsive" alt="banner">
                        </div>
                        </div>
                </div>

                <div class="item banner-item">
                    <div class="row">
                        <div class="col-sm-7">
                              <h1 class="animated fadeInUp delay-2">Kids <br>Favourite</h1>
                              <p class="animated fadeInUp delay-3">Most of our consumers are kids , sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco.</p>
                        </div>
                        <div class="col-sm-5 text-center hidden-xs">
                            <img src="images/banner-carousel/dough4.jpg" class="animated fadeInUp delay-4 img-responsive" alt="banner">
                        </div>
                    </div>
                </div>

                <div class="item banner-item">
                    <div class="row">
                        <div class="col-sm-7">
                              <h1 class="animated fadeInUp delay-2">Accompany You <br> In Every Moment.</h1>
                              <p class="animated fadeInUp delay-3">We are a digital design company based in Bangladesh, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco.</p>
                        </div>
                        <div class="col-sm-5 text-center hidden-xs">
                            <img src="images/logo.png" class="animated fadeInUp delay-4 img-responsive" alt="banner">
                        </div>
                    </div>
                </div>

                </div>                
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#ghughu-banner-carousel" role="button" data-slide="prev">
                <i><img src="images/banner-carousel/arrow-left.svg" alt="icons"></i>
              </a>
              <a class="right carousel-control" href="#ghughu-banner-carousel" role="button" data-slide="next">
                <i><img src="images/banner-carousel/arrow-right.svg" alt="banner"></i>
              </a>
             </div> 
        </section>

        <section id="who-are-we" class="who-are-we page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <h1>Who Are We</h1>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <p>We are a , consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>

                    </div>
                </div>
            </div>
        </section>
        <!-- most probably like canvas -->
        <section id="services" class="services page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12 main-heading text-center">
                      <h1>Our Beloved Products</h1>  
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="service clearfix">
                                <div class="col-sm-4 col-md-5">
                                    <span class="service-number">1</span>
                                    <img src="images/logo.png" style="width:48%;" alt="">
                                </div>
                                <div class="col-sm-8 col-md-7">
                                    <h2>We craft engaging applications</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="service clearfix">
                                <div class="col-sm-4 col-md-5">
                                    <h1 class="service-number">2</h1>
                                    <img src="images/content/snack3.png" style="width:48%;" alt="">
                                </div>
                                <div class="col-sm-8 col-md-7">
                                    <h2>PSD <span class="thin">2</span> HTML conversion</h2>
                                    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="service clearfix">
                                <div class="col-sm-4 col-md-5">
                                    <span class="service-number">3</span>
                                    <img src="images/content/packing1.png" style="width:48%;" alt="">

                                </div>
                                <div class="col-sm-8 col-md-7">
                                    <h2>Wordpress theme <span class="thin">&amp;</span> plugin development</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>            
        </section>
        

        <!-- CTA section starts -->
        <section id="cta" class="cta page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Let Us Help</h1>
                    </div>
                    <div class="col-sm-6">
                    <a href="https://api.whatsapp.com/send?phone=6285331775007&text=Halo%20Bu%20Rhima%20Saya%20mau%20beli%0AStik%20Krispi%20pedas%2Foriginal%3D%0AKripik%20Daun%20Sirih%3D%0ALadrang%20Malaysia%3D%0AKuping%20Gajah%3D">
                        <button class="btn btn-block custom-button">
                            Get In Touch
                        </button>
                    </a>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- CTA section ends -->

         <!-- footer section starts -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper clearfix page wow fadeInUp">
                    <div class="col-md-6 footer-left">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="footer-link footer-link-1">
                                    <h4>Follow Us On Social Media</h4>
                                    <ul>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Facebook</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="footer-link footer-link-2">
                                    <h4>Create Free Account</h4>
                                    <ul>
                                        <li><a href="">Instagram</a></li>
                                        <li><a href="#">Discuss</a></li>
                                        <li><a href="#">Suggest course</a></li>
                                        <li><a href="#">View courses</a></li>
                                        <li><a href="#">Discuss</a></li>
                                        <li><a href="#">Suggest course</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1 footer-text">
                        <span>&copy; 2016 G&amp;G. Theme By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></span>
                    </div> 
                </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </footer>
        <!-- footer section ends -->

    </main>
<!-- DOCUMENT WRAPPER ENDS -->



<!-- SCRIPTS -->

    <!-- jQuery (necessary for all the plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
<!-- SCRIPTS ENDS -->
</body>

</html>

