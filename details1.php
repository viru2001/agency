<?php
    session_start();
?>

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
        location.replace("payment.php");
        // location.replace("index.php");
    </script>
<?php 
    }

?>
    <?php  
    
    
                $tourQuery = " select source from agency.tourInfo where destination = '{$_SESSION['destination']}' ";
                $query = $db->exec($tourQuery);
                $sources = array();
                while($row = $db->fetch_array($query)){
                  // print_r($row);
                  foreach((array)$row as $x => $x_value) {
                    if($x=="source"){
                      array_push($sources, $x_value);
                    }
                  }

                }
                // print_r($sources);


    print '<div class="container container-bigger form-request-wrap form-request-wrap-modern">
                <div class="row row-fix justify-content-md-center ">
                <div class="col-lg-6 col-xxl-5">
                    <div class="form-request form-request-modern bg-gray-lighter novi-background">
                    <h4>Book Your Tour</h4>
                    <!-- RD Mailform-->
                    <form class="form-fix"  action="" method="POST">
                        <div class="row row-20 row-fix">
                        <div class="col-sm-12">
                            <label class="form-label-outside">From</label>
                            <div class="form-wrap form-wrap-inline">
                            <select  id="source" class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="source">';
                            
                            
                            
                            foreach((array)$sources as $x => $x_value){
                                print '<option value="'.$x_value .'">'.$x_value .'</option>';
                            }
                          ?> 
                            <script>

                                
                            // jQuery(document).ready(function(){ 
                            //   jQuery.post("index.php", {"destination": ""}); 
                                  // }); 
                            
                            function getSource(){
                                // alert("called");
                                // var name = document.getElementsByTagName('a')[0].id;
                                // document.cookie="destination=name";
              
                                // $(document).on('change', 'option', function () {
                                  // var destination = this.id;
                                //    alert(this.id);
                                //    $.post("details.php", {"source": this.val()});
                                // });
                                var selected_source_value=$("#source option:selected").val();
                                // window.location.href="details.php?source= pune";
                                // $_GET['selected_source_value'] ;
                                // alert($_GET['source']);
                                // alert(selected_source_value);
                                // $(document).ready(function(){

                                    $.post("details.php", {"source": $("#source option:selected").val() });
                                    // alert();

                                        // });
                              }
                              window.setInterval(function(){
                                    getSource();
                                         
                                }, 5000);
                                
                          </script>
                          <?php
                        //   $source1 = $_GET["source"];
                        //   echo $source1 ;
                        //   $_SESSION['source']  = $_POST['source'];
                        //    echo " hello ".$_SESSION['source'] ;
                            print '
                        
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label-outside">To</label>
                            <div class="form-wrap form-wrap-inline">
                            <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                
                                
                                <option value="3">'.$_SESSION['destination'].'</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label class="form-label-outside">Depart Date</label>
                            <div class="form-wrap form-wrap-validation">
                            <!-- Select -->
                            <!-- <input class="form-input" id="dateForm" name="date" type="text" > -->
                            <!-- <label class="form-label" for="dateForm">Choose the date</label> -->
                            <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                
                                <option value="4">4 days</option>
                            </select>
                            
                            </div>
                        </div>

                        <!-- Time -->

                        <div class="col-sm-12 col-lg-6">
                            <label class="form-label-outside">Depart Time</label>
                            <div class="form-wrap form-wrap-validation">
                            <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                
                                <option value="4">4 days</option>
                            </select>
                            <!-- <label class="form-label" for="dateForm">Choose the time</label> -->
                            </div>
                        </div>

                        <!-- time -->
                        <div class="col-sm-12 col-lg-6">
                            <label class="form-label-outside">Duration</label>
                            <div class="form-wrap form-wrap-validation">
                            <!-- Select 2-->
                            <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="city">
                                
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
    </div>';
    ?>

    <script src="js/core.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/script.js"></script>
    
</body>
</html>
