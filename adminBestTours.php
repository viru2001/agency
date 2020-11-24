
<?php

    session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Portal</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <link rel="icon" href="https://theross.ml/0:/agency/logo_small.jpg" type="image/x-icon">
  <meta name="author" content=""><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
<link rel="stylesheet" href="css1/admin.css">
  <link rel="stylesheet" href="css1/style1.css">    
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/fonts.css"> -->

    

</head>
<body>

<!-- partial:index.partial.html -->
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="admin.php">A.V.A. Tours</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="admin.php">
          <i class="fas fa-tachometer-alt"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tours">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fas fa-umbrella-beach"></i>
            <span class="nav-link-text">Tours</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="adminBestTours.php">Best Tours</a>
            </li>
            <li>
              <a href="adminAllTours.php">All Tours</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Hotels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
          <i class="fas fa-hotel"></i>
            <span class="nav-link-text">Hotels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="#">Most Visited Hotels</a>
            </li>
            <li>
              <a href="#">All Hotels</a>
            </li>
            <!-- <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li> -->
          </ul>
        </li>
<!--         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li> 
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li> -->
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Admin</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-sign-out-alt"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
 
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Tours</a>
        </li>
        <li class="breadcrumb-item active">Best Tours</li>
      </ol>
      <section class="section section-variant-1 bg-default novi-background bg-cover"> 
        <div class="container container-wide">
          <div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
            <div class="col-xl-8">
              <!-- <div class="parallax-text-wrap">
                <h3>Our Best Tours</h3>
                <span class="parallax-text">Hot tours</span>
              </div> -->
              <!-- <hr class="divider divider-decorate"> -->
            </div>
            <div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="adminAddBestTour.php">Add Best Tour</a></div>
          </div>
          <!-- <div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="tours.php">view all tours</a></div> -->
          <div class="row row-50">
          <?php
    //   print($_SESSION['destinationAdmin']);
  ?>
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
                //   error_reporting(0);
                  
                  print '<div class="col-md-6 col-xl-4">
                    <article class="event-default-wrap">
                      <div class="event-default">
                        <figure class="event-default-image"><img src="'.$pic.'" alt="" width="570" height="370"/>
                        </figure>
                        <div class="event-default-caption">
                        <a onclick="getDestinationPreview()" id="'.$destination.'"  class="button button-xs button-secondary button-nina " href="adminPreview.php " >Preview</a >
                        &nbsp;&nbsp;
                        
                        <a type="submit" onclick="getDestination()" id="'.$destination.'" class="button button-xs button-secondary button-nina deleteButton" style="color:#fff;">Remove From Best</a >
                       
                        </div>
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
                function getDestination(){
                        $(document).on('click', 'a', function () {
                            // var name = document.getElementsByClassName('deleteButton')[0].id;

                            var name = this.id;
                            console.log(name);
                            $.post("deleteBest.php", {"destination": name});
                            $.ajax({
                                type: "POST",
                                url: "deleteBest.php",
                                // data: { destination: name }
                            }).done(function( msg ) {
                                // alert( "Data Saved: " + msg );
                            });
                            });
                            setTimeout(getDestination1, 3000);
                            // $.post("some.php", {"destination": name});
                            // });
                            // const getTodo = callback => {
                            //             setTimeout(() => {
                            //             callback ({ text: 'Complete Code Example' 
                            //             })
                            //             }, 2000)
                            //         }
                            //         getTodo(todo => {
                            //             console.log(todo.text)
                            //         })
                            // location.replace("adminBestTours.php");
                            

                }
                
                function getDestination1(){
                        
                        location.replace("adminBestTours.php");
                }
                function getDestinationPreview(){
              $(document).on('click', 'a', function () {
                    // var destination = this.id;
                    // alert(this.id);
                    $.post("adminBestTours.php", {"destination": this.id});
                  });
            } 
            </script>

          

        <?php
          error_reporting(0);
              $_SESSION['destination'] = $_POST['destination'];
        ?>
           

            
          
                    
            


            
          </div>
        </div>
      </section>
        
    </div>
  </div>

  


  <footer class="sticky-footer">
    <div class="container">
      <div class="text-center">
        <small>All Rights Reserved. A.V.A Tours</small>
      </div>
    </div>
  </footer>
      
      
      
      
  </div>
</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>


<script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script  src="js1/adminTour.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>




