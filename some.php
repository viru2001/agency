<?php
    

    // function execQuery($destination){
        include 'connector.php';
        $e = "SET SQL_SAFE_UPDATES = 0";
        $DQ =$db->exec($e);
        $deleteQ =   " update agency.tourinfo set type = 'normal'  where  destination = '{$_POST['destination']}' ";
        $DQuery1 =$db->exec($deleteQ);
        
        // header('location:adminBestTours.php');
                    
    // }
    ?>

    
    