<?php
require "database.php";
$db = get_db();

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
    <section class="pricing py-5">
                    <div class="container">
                      <div class="row">
    <?php
          foreach ($db->query('SELECT *
                               FROM GUITAR_BODY
                               JOIN GUITAR ON GUITAR_BODY.guitar_id = GUITAR.id
                               JOIN BODY   ON GUITAR_BODY.color_id  = BODY.id') as $row) 
          {

            echo '
                        <div class="col-lg-4">
                          <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                        <img src="img/' . ucfirst($row['img']) . '" class="card-img-top" alt="...">
                  <h6 class="card-price text-center">$' . ucfirst($row['price']) . '</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Guitar Model: <strong>' . ucfirst($row['name']) . '</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Body Color: <strong>' . ucfirst($row['color']) . '</strong></li>
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
          <button type="submit" class="btn btn-block btn-primary" onclick="orderForm()">I want to order a Guitar!</button>
          <section id="displayForm" style="display: none;">
              <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
          </section>
    <?php require_once('footer.php'); ?>

    <script>
        function orderForm() {
            document.getElementById("displayForm").style.display = "flex"
            document.getElementById("displayForm").style.justify-content = "center"
            
        }
            
    </script>
</body>
</html>

