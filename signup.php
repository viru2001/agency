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
    <link rel="icon" href="https://theross.ml/0:/agency/logo_small.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css1/signup1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
  <body>
      
  <?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['username'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['email'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

//  $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
 $login_button = '<button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i><a href="'.$google_client->createAuthUrl().'"> Continue with google</a></button>';
}

?>
<!-- <html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">PHP Login using Google Account</h2>
   <br />
   <div class="panel panel-default">
   <?php
//    if($login_button == '')
//    {
//     echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
//     echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
//     echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
//     echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
//     echo '<h3><a href="logout.php">Logout</h3></div>';
//    }
//    else
//    {
//     echo '<div align="center">'.$login_button . '</div>';
//    }
   ?>
   </div>
  </div>
 </body>
</html> -->







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
                    if($loginEmail == "admin@gmail.com"){
                        ?>
                        <script>
                            // alert("login Successful !!!");
                            location.replace("admin.php");
                        </script>
                    <?php 
                    }
                    else{
                    ?>
                        <script>
                            // alert("login Successful !!!");
                            location.replace("index.php");
                        </script>
                    <?php 
                    }
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
    <?php
                if($login_button == '')
                {
                    header('location:index.php');
                }
                else
                {
                    echo $login_button ;
                }
         ?>
                <!-- <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i><a href=""> Continue with google</a></button> -->
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>Continue with linkedin</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> Continue with microsoft</button>
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
                            // alert("Inserted Succesfully !!!");
                        </script>
                    <?php 
                    
                }
                else{
                    ?>
                        <script>
                            // alert("Insertion Failed !!!");
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
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> Continue With google</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> Continue With linkedin</button>
                <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> Continue With microsoft</button>
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