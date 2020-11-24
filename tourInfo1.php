<?php 
    session_start();
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>Information</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fonts.css">




  <script type='text/javascript'
    src='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/js/jquery-11.0.min.js'></script>

  <script type='text/javascript'
    src='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/js/unitegallery.min.js'></script>
  <script type="text/javascript">
    var x = $.noConflict(true);
  </script>
  <link rel='stylesheet'
    href='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/css/unite-gallery.css'
    type='text/css' />
  <script type='text/javascript'
    src='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/themes/default/ug-theme-default.js'></script>
  <link rel='stylesheet'
    href='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/themes/default/ug-theme-default.css'
    type='text/css' />
  <link rel="stylesheet" href="css1/tourinfo1.css">

  <script src="js/core.min.js"></script>




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
        <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth"
          data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
          data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px"
          data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true"
          data-xl-stick-up="true">
          <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
          <div class="rd-navbar-top-panel rd-navbar-collapse novi-background">
            <div class="rd-navbar-top-panel-inner">
              <ul class="list-inline">
                <li class="box-inline list-inline-item"><span
                    class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-phone"></span>
                  <ul class="list-comma">
                    <li><a href="tel:#">1-800-1234-567</a></li>
                    <li><a href="tel:#">1-800-6780-345</a></li>
                  </ul>
                </li>
                <li class="box-inline list-inline-item"><span
                    class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span><a href="#">2130
                    Fulton Street, San Diego, CA 94117-1080 USA</a></li>
                <li class="box-inline list-inline-item"><span
                    class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-email"></span><a
                    href="mailto:#">mail@demolink.org</a></li>
              </ul>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook"
                    href="#"></a></li>
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter"
                    href="#"></a></li>
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram"
                    href="#"></a></li>
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus"
                    href="#"></a></li>
                <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin"
                    href="#"></a></li>
              </ul>
            </div>
            <div class="rd-navbar-top-panel-inner"><a class="button button-sm button-secondary button-nina"
                href="logout.php">LOGOUT</a></div>
          </div>
          <div class="rd-navbar-inner">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img class="logo-default"
                    src="https://theross.ml/0:/agency/logo_small.jpg" alt="" width="208" height="46" /></a></div>
            </div>
            <div class="rd-navbar-aside-center">
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li><a href="index.php">Home</a>
                  </li>
                  <li><a href="about-us.php">About Us</a>
                  </li>
                  <li><a href="contacts.php">Contacts</a>
                  </li>
                  <li><a href="tours.php">Tours</a>
                  </li>
                  <li><a href="yourTours.php">Your Tours</a>
                  </li>
                  <?php
                  echo "<li><h5>&nbsp;&nbsp;&nbsp; Welcome, {$_SESSION['username']}</h5></li>";
                    ?>
                </ul>
              </div>
            </div>

            <div class="rd-navbar-aside-right"><a class="button button-sm button-secondary button-nina"
                href="logout.php">LOGOUT</a></div>
          </div>
        </nav>
      </div>


    </header>









    <section class="section section-lg bg-default">
      <div class="container container-bigger">
        <div
          class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between flex-lg-row-reverse">
          <div class="col-md-10 col-lg-6 col-xl-5">
            <h3><?php echo "{$_SESSION['destination']}" ?></h3>



            <?php
                include 'connector.php';
                // $name = "paris";
                // $image = "images/landing-private-airlines-01-570x370.jpg";
                // $price = "25000";

                
                $tourQuery = " select distinct pics,details from agency.tourInfo where destination = '{$_SESSION['destination']}' ";
                $query = $db->exec($tourQuery);
                
                while($row = $db->fetch_array($query)){
                  
                  // print_r($row);
                  foreach((array)$row as $x => $x_value) {
                    if($x=="details"){
                      $details = $x_value;
                      
                    }
        
                    else{
                      // $pic = $x_value;
                      $arr = explode(",",$x_value);
                      $pic1 =$arr[0];
                      $pic2 =$arr[1];
                      $pic3 =$arr[2];
                      // echo "$pic";
                    }
                    //  $pic = "https://theross.ml/0:/project/p4.jpg";
                    // echo "$pic";
                  }
                  

                  // error_reporting(0);

                  
                }

                // $_SESSION['destination'] = $destination;

            ?>



            
            <div class="divider divider-decorate"></div>
            <p class="heading-5"><?php echo "$details "?></p>
            <a
              class="button button-default-outline button-nina" href="details.php">BOOK TOUR</a>
          </div>

          <?php
          print'
          <div class="col-md-10 col-lg-6" id="gallery" style="display:none;">
            <!-- <img src="images/about-us-1-720x459.jpg" alt="" width="720" height="459"/> -->
            <img alt=""
              src = " '.$pic1.' "
              data-image="'.$pic1.'"
             />
            <img alt="Preview Image 2"
              src="'.$pic2.'"
              data-image="'.$pic2.'"
              />


            <img alt="Preview Image 3"
              src="'.$pic3.'"
              data-image="'.$pic3.'"
              />

          </div>';
          ?>
          <script src="js1/tourinfo.js"></script>
        </div>
    </section>






    <!-- Footer Minimal-->
    <footer class="section page-footer page-footer-minimal novi-background bg-cover text-center bg-gray-darker">
      <div class="container container-wide">
        <div class="row row-fix justify-content-sm-center align-items-md-center row-30">
          <div class="col-md-10 col-lg-7 col-xl-4 text-xl-left"><a href="index.php"><img class="inverse-logo"
                src="https://theross.ml/0:/agency/logo_small.jpg" alt="" width="208" height="46" /></a></div>
          <div class="col-md-10 col-lg-7 col-xl-4">
            <p class="right">&#169;&nbsp;<span class="copyright-year"></span> All Rights Reserved. A.V.A Tours</p>
          </div>
          <div class="col-md-10 col-lg-7 col-xl-4 text-xl-right">
            <ul class="group-xs group-middle">
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-facebook"
                  href="#"></a></li>
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-twitter"
                  href="#"></a></li>
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-instagram"
                  href="#"></a></li>
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-google"
                  href="#"></a></li>
              <li><a class="icon novi-icon icon-md-middle icon-circle icon-secondary-5-filled mdi mdi-linkedin"
                  href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"> </div>
  <!-- Javascript-->
  <!-- <script src="js/core.min.js"></script> -->
  <script src="js/script.js"></script>
</body>

</html>