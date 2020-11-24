<?php
    session_start();
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- Site Title-->
    <title>About Us</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"> </script>
		<![endif]--> 
  </head>
  <body>
    <!-- Page preloader-->
    <div class="page-loader"> 
      <div class="page-loader-body"> 
        <div class="preloader-wrapper big active"> 
          <div class="spinner-layer spinner-blue"> 
            <div class="circle-clipper left">
              <div class="circle"> </div>
            </div>
            <div class="gap-patch">
              <div class="circle"> </div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"> </div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-yellow"> 
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"> </div>
            </div>
          </div>
          <div class="spinner-layer spinner-green"> 
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-corporate">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
            <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-top-panel rd-navbar-collapse novi-background">
              <div class="rd-navbar-top-panel-inner">
                <ul class="list-inline">
                  <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-phone"></span>
                    <ul class="list-comma">
                      <li><a href="tel:#">1-800-1234-567</a></li>
                      <li><a href="tel:#">1-800-6780-345</a></li>
                    </ul>
                  </li>
                  <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span><a href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a></li>
                  <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-email"></span><a href="mailto:#">mail@demolink.org</a></li>
                </ul>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                </ul>
              </div>
              <div class="rd-navbar-top-panel-inner"><a class="button button-sm button-secondary button-nina" href="logout.php" >LOGOUT</a></div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img class="logo-default" src="https://theross.ml/0:/agency/logo_small.jpg" alt="" width="208" height="46"/></a></div>
              </div>
              <div class="rd-navbar-aside-center">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li ><a href="index.php">Home</a>
                    </li>
                    <li class="active"><a href="about-us.php">About Us</a>
                    </li>
                    <li><a href="contacts.php">Contacts</a>
                    </li>
                    <li><a href="tours.php">Tours</a>
                    </li>
                    <li ><a href="yourTours.php">Your Tours</a>
                    </li>
                    <?php
                  echo "<li><h5>&nbsp;&nbsp;&nbsp; Welcome, {$_SESSION['username']}</h5></li>";
                    ?>
                  </ul>
                </div>
              </div>
              
              <div class="rd-navbar-aside-right"><a class="button button-sm button-secondary button-nina" href="logout.php">LOGOUT</a></div>
            </div>
          </nav>
        </div>

        <!-- Breadcrumbs-->
        <section class="breadcrumbs-custom" style="background: url(&quot;https://theross.ml/0:/agency/sea-wallpaper-32.jpg&quot;); background-size: cover;">
          <div class="container">
            <p class="breadcrumbs-custom-subtitle">Who We Are</p>
            <p class="heading-1 breadcrumbs-custom-title">About Us</p>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">About Us</li>
            </ul>
          </div>
        </section>
      </header>
      <!-- hi, we are brave-->
      <section class="section section-lg bg-default">
        <div class="container container-bigger">
          <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3>hi, we are A.V.A.</h3>
              <div class="divider divider-decorate"></div>
              <p class="heading-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              <p class="text-spacing-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in </p><a class="button button-default-outline button-nina" href="#">learn more</a>
            </div>
            <div class="col-md-10 col-lg-6"><img src="https://theross.ml/0:/agency/aboutus.jpg" alt="" width="720" height="459"/>
            </div>
          </div>
        </div>
      </section>

      <!-- Small Features-->
      <section class="section section-lg section-lg-alternative bg-gray-lighter novi-background bg-cover">
        <div class="container container-wide">
          <div class="row row-50 justify-content-sm-center text-gray-light">
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi mdi-airplane"></div>
                  <h6 class="box-minimal-title">Air Tickets</h6>
                </div>
                <p>At our travel agency, you can book air tickets to any world destination. We also provide online ticket booking via our website in just a couple of steps.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-map"></div>
                  <h6 class="box-minimal-title">Voyages & Cruises</h6>
                </div>
                <p>Besides regular tours and excursions, we also offer a variety of cruises & sea voyages for different customers  looking for awesome experiences.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-city"></div>
                  <h6 class="box-minimal-title">Hotel Bookings</h6>
                </div>
                <p>We offer a wide selection of hotel ranging from 5-star ones to small properties located worldwide so that you could book a hotel you like.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-beach"></div>
                  <h6 class="box-minimal-title">Tailored Summer Tours</h6>
                </div>
                <p>Our agency provides varied tours including tailored summer tours for clients who are searching for an exclusive and memorable vacation.</p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- our team-->
      <section class="section section-lg text-center novi-background bg-cover">
        <div class="container container-wide">
          <h3>MEET OUR TEAM</h3>
          <div class="divider divider-decorate"></div>
          <div class="row row-50 row-xxl-90 justify-content-sm-center offset-custom-2">
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-07-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Arjun Singh</a></h5>
                  <p class="team-classic-job-position">Founder, Director</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-08-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Kalyani Ingale</a></h5>
                  <p class="team-classic-job-position">Tour Manager</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-09-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Neeraj Singh</a></h5>
                  <p class="team-classic-job-position">Travel Agent</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-10-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Shreyas Dube</a></h5>
                  <p class="team-classic-job-position">Reservations Coordinator</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-12-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Anushka Kate</a></h5>
                  <p class="team-classic-job-position">PR Manager</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-13-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Neha Katkar</a></h5>
                  <p class="team-classic-job-position">Marketing Manager</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-14-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Prashant Rane </a></h5>
                  <p class="team-classic-job-position">Travel Consultant</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="team-classic team-classic-circle">
                <figure><img class="rounded-circle" src="images/team-15-300x300.jpg" alt="" width="300" height="300"/>
                </figure>
                <div class="team-classic-caption">
                  <h5><a class="team-classic-title" href="#">Dinesh Kamble</a></h5>
                  <p class="team-classic-job-position">Office Manager</p>
                  <ul class="list-inline list-team">
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      

      

      <!-- CTA Gradient-->
      <section class="section section-xs text-center bg-gray-700 novi-background bg-cover">
        <div class="container container-wide">
          <div class="box-cta-thin">
            <p class="big"><strong>The most affordable prices!  </strong>&nbsp;<span>Choose your favorite destination!</span>&nbsp;<a class="link-bold" href="tours.php">Order a tour! </a></p>
          </div>
        </div>
      </section>

      <!-- Footer Minimal-->
      <footer class="section page-footer page-footer-minimal novi-background bg-cover text-center bg-gray-darker">
        <div class="container container-wide">
          <div class="row row-fix justify-content-sm-center align-items-md-center row-30">
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-left"><a href="index.php"><img class="inverse-logo" src="https://theross.ml/0:/agency/logo_small.jpg" alt="" width="208" height="46"/></a></div>
            <div class="col-md-10 col-lg-7 col-xl-4">
              <p class="right">&#169;&nbsp;<span class="copyright-year"></span> All Rights Reserved. A.V.A Tours</p>
            </div>
            <div class="col-md-10 col-lg-7 col-xl-4 text-xl-right">
              <ul class="group-xs group-middle"> 
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-instagram" href="#"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-google" href="#"></a></li>
                <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-linkedin" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>