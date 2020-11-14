<?php
require "PJBridge.php";

$dbHost = "localhost";
$dbName = "";
$dbPort = "3306";
$dbUser = "root";
$dbPass = "root";

// $connStr = "jdbc:mysql-connector-java-8.0.22:T:${dbHost}:${dbName}:${dbPort}";
$connStr =  "jdbc:mysql://localhost:3306/root" ;
$db = new PJBridge();
$result = $db->connect($connStr, $dbUser, $dbPass);
if(!$result){

    ?>
        <script>
            alert("Connection Failed !!!");
        </script>
    <?php 
    
}
else{
    ?>
        <script>
            alert("Connection Succesful !!!");
        </script>
    <?php
}
$cursor = $db->exec("SELECT * FROM root.customer");

while($row = $db->fetch_array($cursor)){
    // print_r($row);
    // echo gettype($row);
    // print_r($row);
    // echo "$row['Customercol']";
    // foreach($row as $x => $x_value) {
    //       if($x=="idCustomer") echo $x_value;
    // }
}

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");


// echo "fetch_array done";
// $db->free_result($cursor);
?>