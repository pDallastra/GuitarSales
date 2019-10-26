<?php
require("database.php");
$db = get_db();
// get the data from the POST
$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$model = $_POST['txtModel'];
$color = $_POST['txtColor'];
$price = $_POST['txtPrice']

try
{
   $query = 'INSERT INTO product_order(name, email, model, color, price) VALUES(:name, :email, :model, :color, :price)';
   $statement = $db->prepare($query);
   $statement->bindValue(':name', $name);
   $statement->bindValue(':email', $email);
   $statement->bindValue(':model', $model);
   $statement->bindValue(':color', $color);
   $statement->bindValue(':price', $price);
   $statement->execute();

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: notes.php?courseId=$course");

die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.

       echo "Working!"
?>