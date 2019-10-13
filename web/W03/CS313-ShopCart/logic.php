<?php 

session_start();

if(isset($_POST['g502']) || isset($_POST['k65']) || isset($_POST['g933']) || isset($_POST['rMouse']) || isset($_POST['rKeyboard']) || isset($_POST['rHeadset'])) {

  if(isset($_POST['g502'])){
    array_push($_SESSION['cart'], "g502");
  }
  if(isset($_POST['k65'])){
    array_push($_SESSION['cart'], "k65");
  }
  if(isset($_POST['g933'])){
    array_push($_SESSION['cart'], "g933");
  }
  if(isset($_POST['rMouse'])){
    array_push($_SESSION['cart'], "rMouse");
  }
  if(isset($_POST['rKeyboard'])){
    array_push($_SESSION['cart'], "rKeyboard");
  }
  if(isset($_POST['rHeadset'])){
    array_push($_SESSION['cart'], "rHeadset");
  }

  header('Location: products.php');
  exit(0);

}

if(isset($_GET['inFirstName']) || isset($_GET['inLastName']) ||	isset($_GET['inAddress']) ||	isset($_GET['inCity']) ||
	isset($_GET['inState']) ||	isset($_GET['inZip'])) {
  
if(isset($inFirstName))
{
  $GLOBAL['inFirstName'] = $_GET('inFirstName');
  array_push($_SESSION['infoUser'], $inFirstName);
}
if(isset($inLastName))
{
  $inLastName = $_GET('inLastName');
  array_push($_SESSION['infoUser'], $inLastName);
}
if(isset($inAddress))
{
  $inAddress = $_GET('inAddress'); 
  array_push($_SESSION['infoUser'], $inAddress);
}
if(isset($inCity))
{
  $inCity = $_GET('inCity');
  array_push($_SESSION['infoUser'], $inCity);
}
if(isset($inState))
{
  $inState = $_GET('inState');
  array_push($_SESSION['infoUser'], $inState);
}
if(isset($inZip))
{
  $inZip = $_GET('inZip');
  array_push($_SESSION['infoUser'], $inZip);
}

header('Location: confirmation.php');
exit(0);
}

if (isset($_GET['remove'])) {
	$cart = $_SESSION['cart'];
	
	if ($_GET['remove'] == 'g502') {
		$key = array_search("g502", $cart); 
		if($key)
			array_splice($cart, $key, 1);
	}
	if ($_GET['remove'] == 'k65') {
		$key = array_search("k65", $cart);
		if($key)
			array_splice($cart, $key, 1);
	}
	if ($_GET['remove'] == 'g933') {
		$key = array_search("g933", $cart);
		if($key)
			array_splice($cart, $key, 1);
	}
  if ($_GET['remove'] == 'rMouse') {
		$key = array_search("rMouse", $cart);
		if($key)
			array_splice($cart, $key, 1);
	}
  if ($_GET['remove'] == 'rKeyboard') {
		$key = array_search("rKeyboard", $cart);
		if($key)
			array_splice($cart, $key, 1);
	}
  if ($_GET['remove'] == 'rHeadset') {
		$key = array_search("rHeadset", $cart);
		if($key)
			array_splice($cart, $key, 1);
	}
  if($_GET['remove'] == $_SESSION['cart'][0])
  {
    array_shift($cart);
  }
	$_SESSION['cart'] = $cart;
	header('Location: cart.php');
	exit(0);
}

?>