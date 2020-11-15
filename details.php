<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- Site Title-->
    <title>Details</title>
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


<?php


    include 'connector.php';
    if(isset($_POST['submit1'])){
        // echo "Done";
        echo "done";
        // header('location : index.php');

    

?>
    <script>
        alert("booked Successful !!!");
        // location.replace("index.php");
    </script>
<?php 
    }

?>
        
    <div class="container container-bigger form-request-wrap form-request-wrap-modern">
                <div class="row row-fix justify-content-md-center ">
                <div class="col-lg-6 col-xxl-5">
                    <div class="form-request form-request-modern bg-gray-lighter novi-background">
                    <h4>Book Your Tour</h4>
                    <!-- RD Mailform-->
                    <form class="form-fix"  action="payment.php" method="POST">
                        <div class="row row-20 row-fix">
                        <div class="col-sm-12">
                            <label class="form-label-outside">From</label>
                            <div class="form-wrap form-wrap-inline">
                            <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                <option value="1">New York</option>
                                <option value="2">Lisbon</option>
                                <option value="3">Stockholm</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label-outside">To</label>
                            <div class="form-wrap form-wrap-inline">
                            <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                <option value="1">Chicago</option>
                                <option value="2">Madrid</option>
                                <option value="3">Paris</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label class="form-label-outside">Depart Date</label>
                            <div class="form-wrap form-wrap-validation">
                            <!-- Select -->
                            <input class="form-input" id="dateForm" name="date" type="text" data-time-picker="date">
                            <label class="form-label" for="dateForm">Choose the date</label>
                            <!--select.form-input.select-filter(data-placeholder="All", data-minimum-results-for-search="Infinity",  name='city')-->
                            <!--  option(value="1") Choose the date-->
                            <!--  option(value="2") Primary-->
                            <!--  option(value="3") Middle-->
                            </div>
                        </div>

                        <!-- Time -->

                        <div class="col-sm-12 col-lg-6">
                            <label class="form-label-outside">Depart Time</label>
                            <div class="form-wrap form-wrap-validation">
                            <input class="form-input" id="dateForm" name="date" type="text" data-time-picker="time">
                            <label class="form-label" for="dateForm">Choose the time</label>
                            </div>
                        </div>

                        <!-- time -->
                        <div class="col-sm-12 col-lg-6">
                            <label class="form-label-outside">Duration</label>
                            <div class="form-wrap form-wrap-validation">
                            <!-- Select 2-->
                            <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                <option value="1">Any length</option>
                                <option value="2">2 days</option>
                                <option value="3">3 days</option>
                                <option value="4">4 days</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label-outside">Adults</label>
                            <div class="form-wrap form-wrap-modern">
                            <input class="form-input input-append" id="form-element-stepper" type="number" min="0" max="300" value="2">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label-outside">Children</label>
                            <div class="form-wrap form-wrap-modern">
                            <input class="form-input input-append" id="form-element-stepper-1" type="number" min="0" max="300" value="0">
                            </div>
                        </div>
                        </div>
                        <div class="form-wrap form-button">
                        <!-- <button class="button button-block button-secondary" name="submit1" type="submit">BOOK TOUR</button> -->
                        <button type="submit" name="submit1" class="button button-block button-secondary">BOOK TOUR</button>
                        <!-- <a class="" href="payment.php">
                                <input type="submit"/>
                                <input class="button button-block button-secondary"  name="submit1" type="submit">BOOK TOUR</input>
                        </a> -->
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
    </div>


    <script src="js/core.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/script.js"></script>
    
</body>
</html>
