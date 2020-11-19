<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>A.V.A. Tours - Signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css1/signup1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
  <body>
      
<?php
    include 'connector.php';

    if(isset($_POST['loginSubmit'])){
        $loginEmail = $_POST['loginEmail'];

        $_SESSION['email'] = $loginEmail;
        $loginPassword = $_POST['loginPassword'];

        $email_search = "select * from agency.signup where email = '$loginEmail' ";
        $loginQuery = $db->exec($email_search);
        // echo $loginQuery;
        $loginEmailCount =0;
        while($row = $db->fetch_array($loginQuery)){
                $loginEmailCount += 1;
                // print_r($row);
         }
        //  echo $loginEmailCount;
      $db_pass = 12;
    //   $email_pass = $db->fetch_array($loginQuery);
        //  echo $email_pass;
         if($loginEmailCount){
                $loginQuery = $db->exec($email_search);
                 $row = $db->fetch_array($loginQuery);
                //  print_r($row);
                // $db_pass = $email_pass['password'];
                foreach((array)$row as $x => $x_value) {
                    if($x=="password"){
                    //  echo 'value'.$x_value;
                    $db_pass = $x_value;
                    }
                    if($x == "name"){
                        $username = $x_value;
                    }
                        
              }

                $_SESSION['username'] = $username;

                $pass_decode = password_verify($loginPassword,$db_pass);

             if($pass_decode){
                // if($db_pass){
                    ?>
                        <script>
                            // alert("login Successful !!!");
                            location.replace("index.php");
                        </script>
                    <?php 
                    
                }
                else{
                    ?>
                        <script>
                            alert("password incorrect !!!");
                        </script>
                    <?php
                }
         }
         else{
            ?>
            <script>
                alert("invalid email !!!");
            </script>
        <?php
         }


    }


?>


    <div class="form-modal">
    
        <div class="form-toggle">
            <button id="login-toggle" onclick="toggleLogin()" >log in</button>
            <button id="signup-toggle" onclick="toggleSignup()" >sign up</button>
        </div>
    
        <div id="login-form">
            <form action="" method="POST">
                <input type="text" name="loginEmail" placeholder="Enter email "/>
                <input type="password" name="loginPassword" placeholder="Enter password"/>
                <button type="submit" name="loginSubmit" class="btn login">login</button>
                <!-- <p><a href="javascript:void(0)">Forgotten account</a></p> -->
                <hr/>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign in with google</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign in with linkedin</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign in with microsoft</button>
            </form>
        </div>
    
<?php

// include 'connector.php';

    if(isset($_POST['submit'])){
        // $username = mysqli_real_escape_string($result,$_POST['name']);
        // $email = mysqli_real_escape_string($result,$_POST['email']);
        // $mobile = mysqli_real_escape_string($result,$_POST['mobile']);
        // $password = mysqli_real_escape_string($result,$_POST['password']);
        // $cpassword = mysqli_real_escape_string($result,$_POST['cpasswrod']);
        $username = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        // $id = 2;


        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
        // echo "$username";
        
        // echo "$mobile";
        // echo "$password";
        $emailquery = " select * from agency.signup where email= '$email' ";
        $query = $db->exec($emailquery);
        $emailcount =0;
        while($row = $db->fetch_array($query)){
                $emailcount += 1;
         }
        if($emailcount>0){
            ?>
                        <script>
                            alert("Email Already exists");
                        </script>
                    <?php
        }
        else{
            if($password === $cpassword){
                // echo "pass matched";
                $insertquery = " INSERT INTO agency.signup ( name, email, mobile, 
                password, cpassword) VALUES ('$username', '$email', '$mobile', '$pass', '$cpass')" ;

                $iquery =$db->exec($insertquery);

                if($iquery){

                    ?>
                        <script>
                            alert("Inserted Succesfully !!!");
                        </script>
                    <?php 
                    
                }
                else{
                    ?>
                        <script>
                            alert("Insertion Failed !!!");
                        </script>
                    <?php
                }
            }
            else{
                ?>
                <script>
                    alert("Password are not matching");
                </script>
            <?php
            }
        }

   
    }

?>



        <div id="signup-form">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <input type="text" name = "name" placeholder="Enter your Name" required/>
                <input type="email" name= "email" placeholder="Enter your Email Address" required/>
                <input type="text" name="mobile" placeholder="Enter your Phone Number" required/>
                <input type="password" name="password" placeholder="Create password" required/>
                <input type="password" name="cpassword" placeholder="Confirm password" required/>
                <button type="submit" name="submit" class="btn signup">create account</button>
                <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
                <hr/>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign up with google</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign up with linkedin</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign up with microsoft</button>
            </form>
        </div>
        <script src="js1/signup1.js"></script>
    
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>