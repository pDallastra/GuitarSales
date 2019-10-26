<?php
// get the data from the POST
$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$model = $_POST['txtModel'];
$color = $_POST['txtColor'];

if($model == 'Stratocaster')
{
    $price = 399;
}
else if($model == 'Telecaster')
{
    $price = 349;
}
else if($model == 'Jaguar')
{
    $price = 299;
}

require("database.php");
$db = get_db();

try
{
   $query = 'INSERT INTO product_order(name, email, model, color, price) VALUES(:name, :email, :model, :color, :price)';
   $statement = $db->prepare($query);
   $statement->bindValue(':name', $name);
   $statement->bindValue(':title', $title);
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

          foreach ($db->query('SELECT *
                               FROM PRODUCT_ORDER
                               ') as $row) 
          {

            echo '
                        <div class="col-lg-4">
                          <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                  <h6 class="card-price text-center">Order Successfully Done!</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Name: <strong>' . ucfirst($row['name']) . '</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Email: <strong>' . ucfirst($row['email']) . '</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Model: <strong>' . ucfirst($row['model']) . '</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Color: <strong>' . ucfirst($row['color']) . '</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Price: $ <strong>' . ucfirst($row['price']) . '</strong></li>                     
                    </ul>
                </div>
              </div>
            </div>
            ';
          }
?>