<?php
session_start();
$arrlength = count($_SESSION['cart']);
$totalPrice = 0;
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
            <h6 class="card-price text-center">Your Item(s)</h6>
            <hr>
            <ul class="fa-ul">
            <?php 
              for($i = 0; $i < $arrlength; $i++)
                {
                  
                  if($_SESSION['cart'][$i] == 'g502'){
                  $totalPrice += 49;
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Logitech G502 Hero - Mouse</i></span></li>";
                  echo "<a href=\"logic.php?remove=g502\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a></td><p>";
                  
                  }
                  if($_SESSION['cart'][$i] == 'k65'){
                  $totalPrice += 69;
									echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Corsair K65 - Wireless Keyboard</i></span></li>";
                  echo "<span><a href=\"logic.php?remove=k65\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a>";
                  }
                  if($_SESSION['cart'][$i] == 'g933'){
                  $totalPrice += 79;
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Logitech G933 - Wireless Headset</i></span></li>";  
									echo "<a href=\"logic.php?remove=g933\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a><p>";
                  }
                  if($_SESSION['cart'][$i] == 'rMouse'){
                  $totalPrice += 59;
									echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Razer DeathAdder - Wired Mouse</i></span></li>";
                  echo "<a href=\"logic.php?remove=rMouse\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a><p>";
                  }
                  if($_SESSION['cart'][$i] == 'rKeyboard'){
                  $totalPrice += 79;
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Razer BlackWidow - Wired Keyboard</i></span></li>";
									echo "<a href=\"logic.php?remove=rKeyboard\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a><p>";
                  }
                  if($_SESSION['cart'][$i] == 'rHeadset'){
                  $totalPrice += 89;
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Razer Kraken - Wired Headset</i></span></li>"; 
                  echo "<span><a href=\"logic.php?remove=rHeadset\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a><p>";
                  }            
                }          

            echo "<br>";
            echo "<form logic=\"checkout.php\" method=\"post\">";
            echo "<button type=\"submit\" class=\"btn btn-block btn-primary text-uppercase\" name=\"g502\">Total = $";
            echo $totalPrice;
            echo "</button>";
            echo "</form>";         
            ?>
            <br><form action="checkout.php" method="post">
            <button type="submit" class="btn btn-block btn-primary text-uppercase">Check Out</button>
            <br>
            <a href="products.php"><p class="btn btn-block btn-primary text-uppercase">Keep Shopping</p></a>
          </div>
        </div>
      </div>
    </div>  
  </section>

  <?php require_once('footer.php') ?>