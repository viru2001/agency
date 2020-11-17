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

    }

?>
<?php  
    
    
    $tourQuery = " select source,price,availableSeats,dates,duration,departure from agency.tourInfo where destination = '{$_SESSION['destination']}' ";
    $query = $db->exec($tourQuery);
    $sources = array();
    $prices = array();
    $availableSeats = array();
    $dates = array();
    $duration = array();
    $departure = array();

    while($row = $db->fetch_array($query)){
      // print_r($row);
      foreach((array)$row as $x => $x_value) {
        if($x=="source"){
          array_push($sources, $x_value);
        }
        elseif($x=="price"){
            array_push($prices, $x_value);
        }
        elseif($x=="availableSeats"){
            array_push($availableSeats, $x_value);
        }
        elseif($x=="dates"){
            array_push($dates, $x_value);
        }
        elseif($x=="duration"){
            array_push($duration, $x_value);
        }
        else{
            array_push($departure, $x_value);
        }
      }

    }

    print_r($sources);
    print_r($prices);
    print_r($availableSeats);
    print_r($dates);
    print_r($duration);
    print_r($departure);
?>

<script>
    
</script>
    

    
    <div class="container container-bigger form-request-wrap form-request-wrap-modern">
                <div class="row row-fix justify-content-md-center ">
                <div class="col-lg-6 col-xxl-5">
                    <div class="form-request form-request-modern bg-gray-lighter novi-background">
                    <h4>Book Your Tour</h4>
                    <!-- RD Mailform-->
                    <form class="form-fix"  action="" method="POST">
                        <div class="row row-20 row-fix">
                        <div class="col-sm-12 ">
                            <label class="form-label-outside">From</label>
                            <div  class="form-wrap form-wrap-inline">
                            <select  id="source123" onchange="getDates()"  class="form-input select-filter"  data-minimum-results-for-search="Infinity" name="source">';
                            
                             <option value="all">Choose Source</option> 
                             <!-- <option value="" selected disabled >Choose Source</option> -->
                            
                        
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label-outside">To</label>
                            <div class="form-wrap form-wrap-inline">
                            <select  class="form-input select-filter"  data-minimum-results-for-search="Infinity" name="city" disabled>
                                
                                
                                <option value="3"><?php echo "{$_SESSION['destination']}"; ?></option>
                            </select>
                            </div>
                        </div>
                        <!-- <div class="col-sm-12 col-lg-6 re-render"> -->
                        <div class="col-sm-12 col-lg-6">
                            <label class="form-label-outside">Depart Date</label>
                            <div class="form-wrap form-wrap-validation">
                            <!-- Select -->
                            <!-- <input class="form-input" id="dateForm" name="date" type="text" > -->
                            <!-- <label class="form-label" for="dateForm">Choose the date</label> -->
                            <select id="dates" onchange="getTime()" class="form-input select-filter"  data-minimum-results-for-search="Infinity" name="city">
                                
                                <!-- <option value="4">4 days</option> -->
                                <option value="all" >Choose Date</option>
                                <!-- <option value="" selected disabled hidden>Choose Dates</option> -->
                            </select>
                            
                            </div>
                        </div>

                        <!-- Time -->

                        <div class="col-sm-12 col-lg-6">
                            <label class="form-label-outside">Depart Time</label>
                            <div class="form-wrap form-wrap-validation">
                            <select id="time" class="form-input select-filter"  data-minimum-results-for-search="Infinity" name="city" >
                                
                                <!-- <option value="4">Choose time</option> -->
                                <option value="all" >Choose Time</option>
                                <!-- <option value="" selected disabled hidden>Choose Time</option> -->
                            </select>
                            <!-- <label class="form-label" for="dateForm">Choose the time</label> -->
                            </div>
                        </div>

                        <!-- time -->
                        <div class="col-sm-12 col-lg-6">
                            <label class="form-label-outside">Duration</label>
                            <div class="form-wrap form-wrap-validation">
                            <!-- Select 2-->
                            <select   id="duration" class="form-input select-filter"  data-minimum-results-for-search="Infinity" name="city">
                            <option value="all">Choose Duration</option>
                                <!-- <option value="4">4 days</option> -->
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label-outside">Adults</label>
                            <div class="form-wrap form-wrap-modern">
                            <input onchange="getAmount()"  class="form-input input-append passangers" id="form-element-stepper" type="number" min="1" max="100" value="1">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label-outside">Children</label>
                            <div class="form-wrap form-wrap-modern">
                            <input onchange="getAmount()" class="form-input input-append passangers" id="form-element-stepper-1" type="number" min="0" max="100" value="0">
                            </div>
                        </div>
                        </div>

                        <div class="col-sm-12 ">
                            <label class="form-label-outside">Amount</label>
                            <div class="form-wrap form-wrap-validation">
                            <h3 id="amount" class="form-input "   name="city" >
                                    ₹0
                            </h3>
                            <!-- <label class="form-label" for="dateForm">Choose the time</label> -->
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
    <script>
        var sources = <?php echo json_encode($sources); ?>;
        var prices = <?php echo json_encode($prices); ?>;
        var availableSeats = <?php echo json_encode($availableSeats); ?>;
        var dates = <?php echo json_encode($dates); ?>;
        var duration = <?php echo json_encode($duration); ?>;
        var departure = <?php echo json_encode($departure); ?>;



        for(i=0;i<sources.length;i++){
        
        var sel = document.getElementById('source123');
        
        var opt = document.createElement('option');

       
        opt.appendChild( document.createTextNode(sources[i]) );
        opt.value = i; 
        sel.appendChild(opt);
        }
        
        // document.getElementById("source123").value = 0;


        // datesIndex = document.getElementById("source123").value;
        //         if(datesIndex == null){
        //             datesIndex = 0;
        //         }
        //         // console.log(datesIndex);
        //         // console.log(dates[datesIndex]);
        //         var finalDates = dates[datesIndex].split(",");

        //         for(i=0;i<finalDates.length;i++){
                
        //         var sel = document.getElementById('dates');
                
        //         var opt = document.createElement('option');

            
        //         opt.appendChild( document.createTextNode(finalDates[i]) );
        //         opt.value = i; 
        //         sel.appendChild(opt);
        //         }

               

        

                
                
                
                
                
                
                
                

                function getDates(){

                    
                                // document.getElementById("dates").
                                $('#dates')
                                    .find('option')
                                    .remove()
                                    .end()
                                    
                                ;
                                var sel = document.getElementById('dates');

                                var opt = document.createElement('option');
                                // document.getElementsByClassName('re-render')[0].style.display=  "none";
                                // document.getElementById('dates').style.display='none';


                                opt.appendChild( document.createTextNode("Choose Date") );
                                opt.value = "all"; 
                                opt.selected = true;
                                sel.appendChild(opt);

                                // console.log(document.getElementById('dates').value);
                                // console.log(document.getElementById('dates').selectedIndex);
                                document.getElementById('dates').selectedIndex = 0;

                                datesIndex = document.getElementById("source123").value;
                                if(datesIndex == null){
                                    datesIndex = 0;
                                }
                                // console.log(datesIndex);
                                // console.log(dates[datesIndex]);
                                var finalDates = dates[datesIndex].split(",");

                                for(i=0;i<finalDates.length;i++){

                                var sel = document.getElementById('dates');

                                var opt = document.createElement('option');


                                opt.appendChild( document.createTextNode(finalDates[i]) );
                                opt.value = i; 
                                sel.appendChild(opt);
                                }
                                
                                // document.getElementsByClassName('re-render')[0].style.display=  "";
                                getDuration();
                                getAmount();

                }


                
                // timeIndex = document.getElementById("time").getAttribute('value');
                // timeIndex = document.getElementById("dates").value;
                // if(timeIndex == null){
                //     timeIndex = 0;
                // }
                // // console.log(datesIndex);
                // // console.log(dates[datesIndex]);
                // var finalTime = departure[datesIndex].split(",");
                // console.log("hi",finalTime);
                // // for(i=0;i<finalTime.length;i++){
                
                // var sel = document.getElementById('time');
                
                // var opt = document.createElement('option');

            
                // opt.appendChild( document.createTextNode(finalTime[timeIndex]) );
                // opt.value =timeIndex ; 
                // sel.appendChild(opt);
                // }
                function getTime(){             

                        // document.getElementById("dates").
                        $('#time')
                            .find('option')
                            .remove()
                            .end()
                            
                        ;
                        var sel = document.getElementById('time');

                                var opt = document.createElement('option');


                                opt.appendChild( document.createTextNode("Choose Time") );
                                opt.value = "all"; 
                                sel.appendChild(opt);
                        timeIndex = document.getElementById("dates").value;
                        if(timeIndex == null){
                            timeIndex = 0;
                        }
                        // console.log("timeIndex",timeIndex);
                        // console.log("times",departure[datesIndex]);
                        var finalTime = departure[datesIndex].split(",");
                        // console.log("hiiii",finalTime);
                        // for(i=0;i<finalTime.length;i++){
                        
                        var sel = document.getElementById('time');
                        
                        var opt = document.createElement('option');

                    
                        opt.appendChild( document.createTextNode(finalTime[timeIndex]) );
                        opt.value = timeIndex; 
                        sel.appendChild(opt);
                        // }
                        getAmount();

                
                }


                function getDuration(){             


                            $('#duration')
                                .find('option')
                                .remove()
                                .end()
                                
                            ;
                            var sel = document.getElementById('duration');

                                    var opt = document.createElement('option');


                                    opt.appendChild( document.createTextNode("Choose Duration") );
                                    opt.value = "all"; 
                                    sel.appendChild(opt);
                            timeIndex = document.getElementById("dates").value;
                            if(timeIndex == null){
                                timeIndex = 0;
                            }
                            // console.log("timeIndex",timeIndex);
                            // console.log("times",duration[datesIndex]);
                            var Duration = duration[datesIndex].split(",");
                            // console.log("Duration",Duration);
                            // for(i=0;i<finalTime.length;i++){

                            var sel = document.getElementById('duration');

                            var opt = document.createElement('option');


                            opt.appendChild( document.createTextNode(duration[datesIndex]) );
                            opt.value = datesIndex; 
                            sel.appendChild(opt);
                            // }


                            }

                            

                            function getAmount(){             


                                    timeIndex = document.getElementById("dates").value;
                                    if(timeIndex == null){
                                        timeIndex = 0;
                                    }
                                    datesIndex = document.getElementById("source123").value;
                                if(datesIndex == null){
                                    datesIndex = 0;
                                }
                                console.log(availableSeats);
                                var seats1 = availableSeats[datesIndex].split(",");
                                console.log(seats1);
                                var seats = parseInt(seats1[timeIndex]);
                                
                                console.log("seats" +seats);
                                   
                                    var adults = document.getElementsByClassName('passangers')[0].value ; 
                                    var children = document.getElementsByClassName('passangers')[1].value ;

                                    

                                    var passangers = parseInt( adults) + parseInt(children ); 

                                    // document.getElementsByClassName('passangers')[0].max = (seats - adults ).toString(); 
                                    // document.getElementsByClassName('passangers')[1].max = (seats - children).toString() ;
                                    // console.log(document.getElementsByClassName('passangers')[0].max,document.getElementsByClassName('passangers')[1].max);
                                    // console.log(adults,children,passangers,prices[datesIndex]);
                                    var x = document.getElementById("form-element-stepper").max = seats - children ;
                                    var y = document.getElementById("form-element-stepper-1").max = seats - adults;
                                    console.log(document.getElementById("form-element-stepper").max,document.getElementById("form-element-stepper-1").max)
                                    document.getElementById('amount').innerHTML = "₹"+prices[datesIndex] * passangers;
                                    
                                    
                                    
                                   


                            }
            
                

    </script>

    <script src="js/core.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/script.js"></script>
    
</body>
</html>
