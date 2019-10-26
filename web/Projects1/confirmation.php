<?php
require("database.php");
$db = get_db();
// get the data from the POST
$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$model = $_POST['txtModel'];
$color = $_POST['txtColor'];
$price = $_POST['txtPrice'];

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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Out</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php require_once('navbar.php'); ?>
    <section class="pricing py-5">
                    <div class="container">
                      <div class="row">
    <?php
          foreach ($db->query('SELECT TOP 1 * FROM PRODUCT_ORDER BY id DESC') as $row) 
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
    </div>
  </div>
</section>
</body>
</html>