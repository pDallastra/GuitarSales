<?php
session_start();
$arrlength = count($_SESSION['cart']);

if (!isset($_SESSION['infoUser'])) 
{
  $_SESSION['infoUser'] = [];
}
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
                  echo "<td><a href=\"logic.php?remove=g502\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a></td><p>";
                  
                  }
                  if($_SESSION['cart'][$i] == 'k65'){
                  $totalPrice += 69;
									echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Corsair K65 - Wireless Keyboard</i></span></li>";
                  echo "<td><a href=\"logic.php?remove=k65\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a></td><p>";
                  }
                  if($_SESSION['cart'][$i] == 'g933'){
                  $totalPrice += 79;
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Logitech G933 - Wireless Headset</i></span></li>";  
									echo "<td><a href=\"logic.php?remove=g933\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a></td><p>";
                  }
                  if($_SESSION['cart'][$i] == 'rMouse'){
                  $totalPrice += 59;
									echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Razer DeathAdder - Wired Mouse</i></span></li>";
                  echo "<td><a href=\"logic.php?remove=rMouse\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a></td><p>";
                  }
                  if($_SESSION['cart'][$i] == 'rKeyboard'){
                  $totalPrice += 79;
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Razer BlackWidow - Wired Keyboard</i></span></li>";
									echo "<td><a href=\"logic.php?remove=rKeyboard\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a></td><p>";
                  }
                  if($_SESSION['cart'][$i] == 'rHeadset'){
                  $totalPrice += 89;
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Razer Kraken - Wired Headset</i></span></li>"; 
                  echo "<td><a href=\"logic.php?remove=rHeadset\"><span class=\"btn btn-sm btn-danger\">Remove Item</span></a></td><p>";
                  }            
                }          

            echo "<br>";
            echo "<p type=\"submit\" class=\"btn btn-block btn-primary text-uppercase\" name=\"g502\">Total = $";
            echo $totalPrice;
            echo "</p>";        
            ?>

            
<form class="needs-validation" novalidate method"post" action="logic.php">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First Name</label>
      <input name="inFirstName" type="text" class="form-control" id="validationCustom01" placeholder="Name" required>
      <div class="valid-feedback">
        Looks Good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Last Name</label>
      <input name="inLasttName" type="text" class="form-control" id="validationCustom02" placeholder="Last Name" required>
      <div class="valid-feedback">
        Looks Good!
      </div>
    </div>
  </div>
  <div class="form-row">
   <div class="col-md-6 mb-3">
     <label for="validationCustom03">Address</label>
     <input name="inAddress" type="text" class="form-control" id="validationCustom03" placeholder="City" required>
     <div class="invalid-feedback">
       Please, Provide a Valid Address!
     </div>
    </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input name="inCity" type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please, Provide a Valid City!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input name="inState" type="text" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please, Provide a Valid State!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip Code</label>
      <input name="inZip" type="text" class="form-control" id="validationCustom05" placeholder="Zip" required method="post" name="">
      <div class="invalid-feedback">
        Please, Provide a Valid Zip Code;
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        I Checked and Want to Procede With The Purchase! 
      </label>
      <div class="invalid-feedback">
        You Must Agree Before Confirming!
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Confirm!</button>
  
</form>

          </div>
        </div>
      </div>
    </div>  
    <br><br>
    <a href="cart.php"><p class="btn btn-block btn-primary text-uppercase">Back to Cart</p></a>
  </section>

  <script>
// Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
    var forms = document.getElementsByClassName('needs-validation');
    // Faz um loop neles e evita o envio
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script> 

<?php require_once('footer.php') ?>