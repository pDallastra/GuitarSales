<?php 

require("database.php");
$db = get_db();
session_start();

if(isset($_POST['Stratocaster']) || isset($_POST['Telecaster']) || isset($_POST['Jaguar'])){

    if(isset($_POST['Stratocaster'])){
      array_push($_SESSION['cart'], "Stratocaster");
    }
    if(isset($_POST['Telecaster'])){
      array_push($_SESSION['cart'], "Telecaster");
    }
    if(isset($_POST['Jaguar'])){
      array_push($_SESSION['cart'], "Jaguar");
    }

    header('Location: products.php');
    exit(0);
  
  }

  for($i = 0; $i < $arrlength; $i++)
                {
                  
                  if($_SESSION['cart'][$i] == 'Stratocaster'){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Stratocaster</i></span></li>";       $totalPrice += 49;     
                  }
                  if($_SESSION['cart'][$i] == 'Telecaster'){
									echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Telecaster</i></span></li>";
                  $totalPrice += 69;
                  }
                  if($_SESSION['cart'][$i] == 'Jaguar'){
                  echo "<p><li><span class=\"fa-li\"><i class=\"fas fa-check\">Jaguar</i></span></li>"; $totalPrice += 79; 
                  }     
                }         

?>