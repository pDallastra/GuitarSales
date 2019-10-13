<?php
session_start();
$arrlength = count($_SESSION['cart']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Shop!</title>
</head>
<?php require_once("nav.php"); ?>
<section class="pricing py-5">
  <div class="container">
      <!-- Logitech G502 -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h6 class="card-price text-center">Your Purchase Was Requested Successfuly!</h6>
            <hr>
            <ul class="fa-ul">
            <?php 
              for($i = 0; $i < $arrlength; $i++)
                {
                  
                  if($_SESSION['cart'][$i] == 'g502'){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Logitech G502 Hero - Mouse</i></span></li>";       $totalPrice += 49;     
                  }
                  if($_SESSION['cart'][$i] == 'k65'){
									echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Corsair K65 - Wireless Keyboard</i></span></li>";
                  $totalPrice += 69;
                  }
                  if($_SESSION['cart'][$i] == 'g933'){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Logitech G933 - Wireless Headset</i></span></li>"; $totalPrice += 79; 
                  }
                  if($_SESSION['cart'][$i] == 'rMouse'){
									echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Razer DeathAdder - Wired Mouse</i></span></li>";
                  $totalPrice += 59;
                  }
                  if($_SESSION['cart'][$i] == 'rKeyboard'){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Razer BlackWidow - Wired Keyboard</i></span></li>";
                  $totalPrice += 79;
                  }
                  if($_SESSION['cart'][$i] == 'rHeadset'){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Razer Kraken - Wired Headset</i></span></li>"; 
                  $totalPrice += 89;
                  }            
                }          

            echo "<br>";
            echo "<p type=\"submit\" class=\"btn btn-block btn-primary text-uppercase\" name=\"g502\">Total = $";
            echo $totalPrice;
            echo "</p>";
  ?>
          </div>
        </div>
      </div>
  </div>
</section>
            
<section class="pricing py-5">
  <div class="container">
      <!-- Logitech G502 -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h6 class="card-price text-center">The Address We Will Send Your Products</h6>
            <hr>
            <ul class="fa-ul">
            <?php 
              for($i = 0; $i < $arrlength; $i++)
                {
                  
                  if($_SESSION['infoUser'][$i] == $inFirstName){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Name: ";
                  echo $infoUser[$i];
                  echo "</i></span></li>";
                  }
                  if($_SESSION['infoUser'][$i] == $inAddress){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Address: ";
                  echo $infoUser[$i];
                  echo "</i></span></li>";
                  }
                  if($_SESSION['infoUser'][$i] == $inCity){
									echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">City: ";
                  echo $infoUser[$i];
                  echo "</i></span></li>";
                  }
                  if($_SESSION['infoUser'][$i] == $inState){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">State: ";
                  echo $infoUser[$i];
                  echo "</i></span></li>";
                  }
                  if($_SESSION['infoUser'][$i] == $inZip){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Zip Code: ";
                  echo $infoUser[$i];
                  echo "</i></span></li>"; 
                  }            
                }          
            echo "<a href=\"products.php\" class=\"btn btn-block btn-primary text-uppercase\">Back Shopping!</a>";
            echo $inFirstName;
            ?>
          </div>
        </div>
      </div>
  </div>
</section>
<?php require_once('footer.php') ?>
