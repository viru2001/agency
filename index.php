<?php
    session_start();

    if(!isset($_SESSION['username'])){
      header('location:signup.php');
    }

?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="https://theross.ml/0:/agency/logo_small.jpg" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"> </script>
    <![endif]--> 
    <style>
        @media (min-width: 576px) {
              #logo img{
                width: 80;
                height: 20;
              }
         }


        @media (min-width: 768px) { 

         }


        @media (min-width: 992px) { 

         }


        @media (min-width: 1200px) { 

         } 
    </style>
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
    <!-- Page-->
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
              <div class="rd-navbar-top-panel-inner">
                
                <!-- <div class="rd-navbar-aside-right"> -->
                  <a class="button button-sm button-secondary button-nina" href="logout.php">LOGOUT</a>
                <!-- </div> -->
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a  class="brand-name" href="index.php"><img id="logo" class="logo-default" src="https://theross.ml/0:/agency/logo_small.jpg" alt="" width="208" height="46"/></a></div>
              </div>
              <div class="rd-navbar-aside-center">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li><a href="about-us.php">About Us</a>
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
      </header>
      <section class="section">
        <div class="swiper-form-wrap">
          <!-- Swiper-->
          <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-slide-bg="https://theross.ml/0:/agency/home/1590824508_fMBWcG_unwto_travel.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                        <h3>Hundreds of Amazing Destinations</h3>
                        <div class="divider divider-decorate"></div>
                        <p class="text-spacing-sm">We offer a variety of destinations to travel to, ranging from exotic to some extreme ones. They include very popular countries and cities like Paris, Rio de Janeiro, Cairo and a lot of others.</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-slide-bg="https://theross.ml/0:/agency/home/201612711253290.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                        <h3>The Trip of Your Dream</h3>
                        <div class="divider divider-decorate"></div>
                        <p class="text-spacing-sm">Our travel agency is ready to offer you an exciting vacation that is designed to fit your own needs and wishes. Whether it’s an exotic cruise or a trip to your favorite resort, you will surely have the best experience.</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-slide-bg="https://theross.ml/0:/agency/home/280d6187a916255757daaf67dd3cdc2f.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                        <h3>unique Travel Insights</h3>
                        <div class="divider divider-decorate"></div>
                        <p class="text-spacing-sm">Our team is ready to provide you with unique weekly travel insights that include photos, videos, and articles about untravelled tourist paths. We know everything about the places you’ve never been to!</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper controls-->
            <div class="swiper-pagination-wrap">
              <div class="container container-bigger">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
      </section>

      <section class="section section-variant-1 bg-default novi-background bg-cover"> 
        <div class="container container-wide">
          <div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
            <div class="col-xl-8">
              <div class="parallax-text-wrap">
                <h3>Our Best Tours</h3>
                <!-- <span class="parallax-text">Hot tours</span> -->
              </div>
              <hr class="divider divider-decorate">
            </div>
            <div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="tours.php">view all tours</a></div>
          </div>
          <div class="row row-50">
            <?php
                include 'connector.php';
                // $name = "paris";
                // $image = "images/landing-private-airlines-01-570x370.jpg";
                // $price = "25000";


                $tourQuery = " select distinct destination,price,pics from agency.tourInfo where type = 'best' ";
                $query = $db->exec($tourQuery);
                // $allData = array();
                $unique = array();
                while($row = $db->fetch_array($query)){
                  // print_r($row);
                  // print '\n';
                  // array_push($allData,$row);
                //  if($row['destination'] )
                // echo $row['destination'].'\n';
                // echo in_array($row['destination'],$unique).'\n';
                if (in_array($row['destination'],$unique) == 1){
                }
                else{
                  foreach((array)$row as $x => $x_value) {
                    
                    if($x=="destination" ){
                      $destination = $x_value;
                      array_push($unique,$destination);
                      // print_r($unique);
                    }
                    elseif($x == "price"){
                        $price = $x_value;
                    }
                    else{
                      // $pic = $x_value;
                      $arr = explode(",",$x_value);
                      $pic =$arr[0];
                      // echo "$pic";
                    }
                    //  $pic = "https://theross.ml/0:/project/p4.jpg";
                    // echo "$pic";
                  }
                
                  // print_r($allData);
                  error_reporting(0);

                  print '<div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                      <div class="event-default">
                        <figure class="event-default-image"><img src="'.$pic.'" alt="" width="570" height="370"/>
                        </figure>
                        <div class="event-default-caption"><a onclick="getDestination()" id="'.$destination.'"  class="button button-xs button-secondary button-nina" href="tourInfo1.php">learn more</a ></div>
                      </div>
                      <div class="event-default-inner">
                        <h5 class="event-default-title"> ' . $destination . ' </h5>
                        <span class="heading-5">₹' .$price . '</span>
                      </div>
                    </article>
                  </div>';
                }
              }
                // $_SESSION['destination'] = $destination;

            ?>
            <script>
              // jQuery(document).ready(function(){ 
              //   jQuery.post("index.php", {"destination": ""}); 
			        // }); 
              
              function getDestination(){
                  // alert("called");
                  // var name = document.getElementsByTagName('a')[0].id;
                  // document.cookie="destination=name";

                  $(document).on('click', 'a', function () {
                    // var destination = this.id;
                    // alert(this.id);
                    $.post("index.php", {"destination": this.id});
                  });
                }

            </script>

            <?php
                // $_SESSION['destination'] = "";
                // $_POST['destination'] = "";

                  $_SESSION['destination']  = $_POST['destination'];
            ?>

<!-- <script>
                $(document).on('click', 'a', function () {
                      alert(this.id);
                  });
            </script>
            <a id="hii" href="#">test</a> -->
            
            <!-- <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="images/landing-private-airlines-01-570x370.jpg" alt="" width="570" height="370"/>
                  </figure>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="tourInfo1.php">learn more</a></div>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="#">France, Paris</a></h5><span class="heading-5">from $280</span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="images/landing-private-airlines-02-570x370.jpg" alt="" width="570" height="370"/>
                  </figure>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="#">USA, Boston</a></h5><span class="heading-5">from $480</span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="images/landing-private-airlines-03-570x370.jpg" alt="" width="570" height="370"/>
                  </figure>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">learn more</a></div>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="#">Italy, Venice</a></h5><span class="heading-5">from $350</span>
                </div>
              </article>
            </div> -->
            
          </div>
        </div>
      </section>

      <!-- our advantages-->
      <section class="section section-lg bg-gray-lighter novi-background bg-cover text-center">
        <div class="container container-wide">
          <h3>our services</h3>
          <div class="divider divider-decorate"></div>
          <div class="row row-50 justify-content-sm-center text-left">
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-airplane"></div>
                <p class="big box-minimal-title">Air Tickets</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">At our travel agency, you can book air tickets to any world destination. We also provide online ticket booking via our website in just a couple of steps.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-map"></div>
                <p class="big box-minimal-title">Voyages & Cruises</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Besides regular tours and excursions, we also offer a variety of cruises & sea voyages for different customers looking for awesome experiences.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-city"></div>
                <p class="big box-minimal-title">Hotel Bookings</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">We offer a wide selection of hotel ranging from 5-star ones to small properties located worldwide so that you could book a hotel you like.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-beach"></div>
                <p class="big box-minimal-title">Tailored Summer Tours</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Our agency provides varied tours including tailored summer tours for clients who are searching for an exclusive and memorable vacation.</div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Tips & tricks-->
      <section class="section section-lg novi-background bg-cover bg-default text-center">
        <div class="container-wide">
          <div class="row row-50">
            <div class="col-sm-12">
              <h3>Latest News</h3>
              <div class="divider divider-decorate"></div>
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-carousel-team owl-carousel-inset" data-items="1" data-md-items="2" data-xl-items="3" data-stage-padding="15" data-loop="true" data-margin="30" data-mouse-drag="false" data-dots="true" data-autoplay="true">
                <article class="post-blog"><a class="post-blog-image" href="https://theluxurytravelexpert.com/2018/02/26/top-10-best-luxury-hotels-germany/" target="_blank"><img src="https://theross.ml/0:/agency/home/hotel.jpg" alt="" width="570" height="415"/></a>
                  <div class="post-blog-caption">
                    <div class="post-blog-caption-header">
                      <ul class="post-blog-tags">
                        <li><a class="button-tags" href="#">Hotels</a></li>
                      </ul>
                      <ul class="post-blog-meta">
                        <li><span>by</span>&nbsp;<a href="#">Vinayak Patil</a></li>
                      </ul>
                    </div>
                    <div class="post-blog-caption-body">
                      <h5><a class="post-blog-title" href="#">Top 10 Hotels to Stay At Germany: Exclusive Rating by A.V.A. Travel Experts</a></h5>
                    </div>
                    <div class="post-blog-caption-footer">
                      <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                    </div>
                  </div>
                </article>
                <article class="post-blog"><a class="post-blog-image" href="https://practicalwanderlust.com/how-to-plan-a-trip-travel-planning-tips/" target="_blank"><img src="https://theross.ml/0:/agency/home/tour_guide.jpg" alt="" width="570" height="415"/></a>
                  <div class="post-blog-caption">
                    <div class="post-blog-caption-header">
                      <ul class="post-blog-tags">
                        <li><a class="button-tags" href="#">Tips</a></li>
                      </ul>
                      <ul class="post-blog-meta">
                        <li><span>by</span>&nbsp;<a href="#">Vinayak Patil</a></li>
                      </ul>
                    </div>
                    <div class="post-blog-caption-body">
                      <h5><a class="post-blog-title" href="#">HOW TO PLAN A TRIP: THE ULTIMATE PRACTICAL TRAVEL PLANNING GUIDE</a></h5>
                    </div>
                    <div class="post-blog-caption-footer">
                      <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                    </div>
                  </div>
                </article>
                <article class="post-blog"><a class="post-blog-image" href="https://www.tripstodiscover.com/top-ten-must-visit-places-before-you-die/" target="_blank"><img src="https://theross.ml/0:/agency/home/santorini.jpg" alt="" width="570" height="415"/></a>
                  <div class="post-blog-caption">
                    <div class="post-blog-caption-header">
                      <ul class="post-blog-tags">
                        <li><a class="button-tags" href="#">Traveling</a></li>
                      </ul>
                      <ul class="post-blog-meta">
                        <li><span>by</span>&nbsp;<a href="#">Vinayak Patil</a></li>
                      </ul>
                    </div>
                    <div class="post-blog-caption-body">
                      <h5><a class="post-blog-title" href="#" >10 Places You Must Visit Before You Die</a></h5>
                    </div>
                    <div class="post-blog-caption-footer">
                      <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"><span class="icon novi-icon icon-md-middle icon-gray-1 mdi mdi-comment"></span><span>12</span></a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <!-- <div class="col-12"><a class="button button-secondary button-nina button-offset-lg" href="#">view all blog posts</a></div> -->
          </div>
        </div>
      </section>

      <section class="section section-lg text-center bg-gray-lighter novi-background bg-cover">
        <div class="container container-bigger">
          <h3>testimonials</h3>
          <div class="divider divider-decorate"></div>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-layout-1" data-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="true">
            <article class="quote-boxed">
              <div class="quote-boxed-aside"><img class="quote-boxed-image" src="https://i.ibb.co/G2CBWvb/person1.jpg" alt="" width="210" height="210"/>
              </div>
              <div class="quote-boxed-main">
                <div class="quote-boxed-text">
                  <p>The holiday of a life time - our gulet adventure in the Dodecanese Greek Islands was without a doubt our favourite family trip. The comfort and beauty of the gulet, the incredibly caring crew, the delicious food, the history we learned from our competent and friendly leader, along with the stunning beauty of the islands. Swimming in the most gorgeous coves, kayaking on crystal blue waters, hiking around ruins and into small remote villages and relaxing on the boat... it was the best trip ever. </p>
                </div>
                <div class="quote-boxed-meta">
                  <p class="quote-boxed-cite">Omkar Jadhav</p>
                  <p class="quote-boxed-small">Regular Customer</p>
                </div>
              </div>
            </article>
            <article class="quote-boxed">
              <div class="quote-boxed-aside"><img class="quote-boxed-image" src="https://i.ibb.co/nbpNr4r/person2.jpg" alt="" width="210" height="210"/>
              </div>
              <div class="quote-boxed-main">
                <div class="quote-boxed-text">
                  <p>Peter Sommer runs a a highly professional organization. From his brochure to drop off at the airport to fly home his attention to detail and his consideration for his clients is superb. The archaeologists he uses as guides are erudite but highly personable and have an ability to turn a pile of stones into a recreation of the lives of the people who lived there over two millennia ago. Excellent.</p>
                </div>
                <div class="quote-boxed-meta">
                  <p class="quote-boxed-cite">Aniket Desai</p>
                  <p class="quote-boxed-small">Regular Customer</p>
                </div>
              </div>
            </article>
            <article class="quote-boxed">
              <div class="quote-boxed-aside"><img class="quote-boxed-image" src="https://i.ibb.co/w0ynr2Q/person4.jpg" alt="" width="210" height="210"/>
              </div>
              <div class="quote-boxed-main">
                <div class="quote-boxed-text">
                  <p>This was our fourth trip with Peter Sommer Travels and it lived up to our very high expectations. It was a wonderfully organized trip with beautiful cruising and swimming spots, great hikes, and fascinating lectures on the region and history. The ship was beautiful, comfortable, and excellently crewed. The guide was wonderfully informed and participated enthusiastically in all the activities. A shout-out also to the local guides who each brought their own perspective. Excellent</p>
                </div>
                <div class="quote-boxed-meta">
                  <p class="quote-boxed-cite">Sairaj Patel</p>
                  <p class="quote-boxed-small">Regular Customer</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="section section-md text-center text-md-left bg-gray-700 novi-background bg-cover">
        <div class="container container-wide">
          <div class="row row-fix row-50 justify-content-sm-center">
            <div class="col-xxl-8">
              <div class="box-cta box-cta-inline">
                <div class="box-cta-inner">
                  <h3 class="box-cta-title">Buy a tour without leaving your home</h3>
                  <p>Using our website, you can book any tour just in a couple of clicks.</p>
                </div>
                <div class="box-cta-inner"><a class="button button-secondary button-nina" href="tours.php">Book Now</a></div>
              </div>
            </div>
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
    <!-- coded by barber-->
  </body>
</html>