<?php
    include 'connector.php';
    // error_reporting(0);
    $query = "select exists(select * from agency.addtour where source ='{$_POST['source']}' and destination ='{$_POST['destination']}' ) ";
    $checkQ = $db->exec($query);
     while($row = $db->fetch_array($checkQ)){
         $check = $row["exists(select * from agency.addtour where source ='{$_POST['source']}' and destination ='{$_POST['destination']}' )"];
     }
    if($check){
         print($check);
     }
     else{
        $source = $_POST['source'];
        $destination = $_POST['destination'];
        $details = addslashes( $_POST['details']);
        $pics = $_POST['pics'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $duration = $_POST['duration'];
        $totalSeats = $_POST['seats'];
        $price = $_POST['price'];
        $type = $_POST['type'];
         $insert_data = "insert into agency.tourinfo(source,destination,details,price,totalSeats,availableSeats,pics,dates,duration,departure,type)  
        values('$source','$destination','$details','$price','$totalSeats','$totalSeats','$pics','$date','$duration','$time','$type') ";
        $insertQuery = $db->exec($insert_data);
        print($check);
        print( $_POST['source']);
        print( $_POST['destination']);
        print( $_POST['details']);
        print( $_POST['pics']);
        print( $_POST['date']);
        print( $_POST['time']);
        print( $_POST['duration']);
        print( $_POST['seats']);
        print( $_POST['price']);
        print( $_POST['type']);
     }
?>
