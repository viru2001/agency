<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Payment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://theross.ml/0:/agency/logo_small.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css1/payment1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js1/payment.js"></script>
    
    
  <div class="container">


  <?php
        include 'connector.php';
        
        if(isset($_POST['submit'])){

                $_SESSION['test'] = 1;
                // print_r($_SESSION['availableSeats']);
                $_SESSION['availableSeats'][$_SESSION['dateIndex']] = $_SESSION['availableSeats'][$_SESSION['dateIndex']] - ($_SESSION['adults']+$_SESSION['children']);
                // echo $seatsRemain;
                $finalArray = join(",",$_SESSION['availableSeats']);
                
            

            $e = "SET SQL_SAFE_UPDATES = 0";
            $insertQuery =$db->exec($e);
            $insertQ =   " update agency.tourinfo set availableSeats = '{$finalArray}'  where source = '{$_SESSION['source']}' and destination = '{$_SESSION['destination']}' ";
            $insertQuery1 =$db->exec($insertQ);
            ?>
                        <script>
                            // alert("login Successful !!!");
                            location.replace("acknowledgement.php");
                        </script>
                    <?php
        }
  ?>
  <div id="Checkout" class="inline">
      
      <h1>Pay Invoice</h1>
      <div class="card-row">
          <span class="visa"></span>
          <span class="mastercard"></span>
          <span class="amex"></span>
          <span class="discover"></span>
      </div>
      <form action="" method="POST">
          <div class="form-group">
              <label for="PaymentAmount">Payment amount</label>
              <div class="amount-placeholder">
                  <?php
                    // echo "₹".($_SESSION['amount'] + $_SESSION['amount']*0.18);
                    echo "<span>₹</span>
                            <span>".($_SESSION['amount'])." + 18% GST</span>" ;
                  ?>
              </div>
          </div>
          <div class="form-group">
              <label or="NameOnCard">Name on card</label>
              <input id="NameOnCard" class="form-control" type="text" maxlength="255"></input>
          </div>
          <div class="form-group">
              <label for="CreditCardNumber">Card number</label>
              <input id="CreditCardNumber" class="null card-image form-control" type="text"></input>
          </div>
          <div class="expiry-date-group form-group">
              <label for="ExpiryDate">Expiry date</label>
              <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7"></input>
          </div>
          <div class="security-code-group form-group">
              <label for="SecurityCode">Security code</label>
              <div class="input-container" >
                  <input id="SecurityCode" class="form-control" type="text" ></input>
                  <i id="cvc" class="fa fa-question-circle"></i>
              </div>
              <div class="cvc-preview-container two-card hide">
                  <div class="amex-cvc-preview"></div>
                  <div class="visa-mc-dis-cvc-preview"></div>
              </div>
          </div>
          <div class="zip-code-group form-group">
              <label for="ZIPCode">ZIP/Postal code</label>
              <div class="input-container">
                  <input id="ZIPCode" class="form-control" type="text" maxlength="10"></input>
                  <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
              </div>
          </div>
          
          <button class="btn btn-block btn-success " id="PayButton" name="submit" type="submit" style="background-color: #ffa900 ;">
              <span class="submit-button-lock"></span>
              <span class="align-middle"> <?php echo "Pay  ₹".($_SESSION['amount'] + $_SESSION['amount']*0.18);?></span>
          </button>
      </form>
  </div>
</div>

    
</body>
  
</html>






