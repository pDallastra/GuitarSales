<?php
require "database.php";
$db = get_db();

$model;
$color;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guitar-Sales</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php require_once('navbar.php'); ?>
    <section class="pricing py-5" style="font-size: 16pt; font-family: Tahoma;">
                    <div class="container">
                      <div class="row">
    <?php
          foreach ($db->query('SELECT *
                               FROM GUITAR_BODY
                               JOIN GUITAR ON GUITAR_BODY.guitar_id = GUITAR.id
                               JOIN BODY   ON GUITAR_BODY.color_id  = BODY.id') as $row) 
          {
            $GLOBALS['model'] = ucfirst($row['name']);
            $GLOBALS['color'] = ucfirst($row['color']);

            echo '<form method="POST" action="checkout.php">
                        <div class="col-lg-4">
                          <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                        <img src="img/' . ucfirst($row['img']) . '" class="card-img-top" alt="...">
                  <h6 class="card-price text-center">$' . ($row['price']) . '</h6>
                  <hr>
                  <ul class="fa-ul" style="list-style-type:none">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Guitar Model: <strong>' . ucfirst($row['name']) . '</strong></li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Body Color: <strong>' . ucfirst($row['color']) . '</strong></li>
                  </ul>
                </div>
                
                <button type="submit" class="btn btn-block btn-primary btn-lg" style="width: 15rem;height: 4rem;border-radius: 5rem;width: 80%;height: 20%;margin-left: 10%;margin-right: 10%;margin-top: 1rem;margin-bottom: 1rem;" onclick="orderForm()"><a href="#displayForm" style="color: white;">Order This Guitar!</a></button>
                </form>
              </div>
            </div>
            </form>';
          }
          ?>

    </div>
  </div>
 
</section>
          <section id="displayForm" class="container" style="display: none;">
              <form method="POST" action="checkout.php">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Full Name</label>
                      <input type="hidden" id="txtColor" name="textModel" value="<?php echo $model ?>"/>
                      <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Full Name">
                    </div>
                    <div class="form-group col-md-6" style="">
                      <label for="inputPassword4">Email</label>
                      <input type="hidden" id="txtColor" name="txtColor" value="<?php echo $colorS ?>"/>
                      <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
                    </div>
                  </div>
                  <br><br>
                  <button type="submit" class="btn btn-dark btn-lg" style="width: 15rem;height: 4rem;border-radius: 5rem;width: 20%;height: 15%;margin-left: 40%;margin-right: 40%;margin-bottom: 1rem;">Checkout</button>
                </section>
              </form>
          
    <?php require_once('footer.php'); ?>

    <script>
        function orderForm() {
            document.getElementById("displayForm").style.display = "block"
        }
            
    </script>
</body>
</html>

