<?php 

session_start();

if (!isset($_SESSION['cart'])) 
{
  $_SESSION['cart'] = [];
}

?>
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
    <div class="row">
      <!-- Logitech G502 -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Logitech G502 Hero - Mouse</h5>
            <h6 class="card-price text-center">$49</h6>
            <hr>
            <ul class="fa-ul">
              <center><p><span class="fa-li"><i class="fas fa-check"></i></span>Pro References:</p></center>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>brTT - Flamengo(BR)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>DoubleLift - Team Liquid(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sneaky - Cloud9(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Micao - INTZ(BR)</li>
            </ul>
            <form action="logic.php" method="post">
            <button type="submit" class="btn btn-block btn-primary text-uppercase" name="g502">Choose This!</button>
            </form>         
          </div>
        </div>
      </div>                                    
      <!-- Corsair K65 Wireless 1ms -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Corsair K65 - Keyboard</h5>
            <h6 class="card-price text-center">$69</h6>
            <hr>
            <ul class="fa-ul">
              <center><p><span class="fa-li"><i class="fas fa-check"></i></span>Pro References:</p></center>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>brTT - Flamengo(BR)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>DoubleLift - Team Liquid(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sneaky - Cloud9(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Micao - INTZ(BR)</li>
            </ul>
            <form action="logic.php" method="post">
            <button type="submit" class="btn btn-block btn-primary text-uppercase" name="k65">Choose This!</button>
            </form>         
          </div>
        </div>
      </div>
      <!-- Corsair K65 Wireless 1ms -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Logitech G933 - Headset</h5>
            <h6 class="card-price text-center">$79</h6>
            <hr>
            <ul class="fa-ul">
              <center><p><span class="fa-li"><i class="fas fa-check"></i></span>Pro References:</p></center>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>brTT - Flamengo(BR)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>DoubleLift - Team Liquid(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sneaky - Cloud9(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Micao - INTZ(BR)</li>
            </ul>
            <form action="logic.php" method="post">
            <button type="submit" class="btn btn-block btn-primary text-uppercase" name="g933">Choose This!</button>
            </form>         
          </div>
        </div>
      </div>
     <!-- Razer DeathAdder -->      
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Razer DeathAdder - Mouse</h5>
            <h6 class="card-price text-center">$59</h6>
            <hr>
            <ul class="fa-ul">
              <center><p><span class="fa-li"><i class="fas fa-check"></i></span>Pro References:</p></center>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>brTT - Flamengo(BR)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>DoubleLift - Team Liquid(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sneaky - Cloud9(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Micao - INTZ(BR)</li>
            </ul>
            <form action="logic.php" method="post">
            <button type="submit" class="btn btn-block btn-primary text-uppercase" name="rMouse">Choose This!</button>
            </form>         
          </div>
        </div>
      </div>
     <!-- Razer BlackWidow -->      
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Razer BlackWidow - Keyboard</h5>
            <h6 class="card-price text-center">$79</h6>
            <hr>
            <ul class="fa-ul">
              <center><p><span class="fa-li"><i class="fas fa-check"></i></span>Pro References:</p></center>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>brTT - Flamengo(BR)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>DoubleLift - Team Liquid(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sneaky - Cloud9(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Micao - INTZ(BR)</li>
            </ul>
            <form action="logic.php" method="post">
            <button type="submit" class="btn btn-block btn-primary text-uppercase" name="rKeyboard">Choose This!</button>
            </form>         
          </div>
        </div>
      </div>
     <!-- Razer Kraken -->      
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Razer Kraken - Headset</h5>
            <h6 class="card-price text-center">$89</h6>
            <hr>
            <ul class="fa-ul">
              <center><p><span class="fa-li"><i class="fas fa-check"></i></span>Pro References:</p></center>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>brTT - Flamengo(BR)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>DoubleLift - Team Liquid(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Sneaky - Cloud9(NA)</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Micao - INTZ(BR)</li>
            </ul>
            <form action="logic.php" method="post">
            <button type="submit" class="btn btn-block btn-primary text-uppercase" name="rHeadset">Choose This!</button>
            </form>         
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <a href="cart.php"><p class="btn btn-block btn-primary text-uppercase">Go to the Cart</p></a>
</section>
<?php require_once("footer.php"); ?>