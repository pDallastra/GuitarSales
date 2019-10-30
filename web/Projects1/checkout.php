<?php

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
  <?php require_once('navbar.php') ?>
  <section class="pricing py-5">
    <div class="container">
      <div class="card mb-5 mb-lg-0">
        <div class="card-body">
          <h6 class="card-price text-center">Chosen Item:</h6>
          <hr>
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Guitar Model: <strong><?php echo $model ?></strong></li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Body Color: <strong><?php echo $color ?></strong></li>
            <li><span class="fa-li"><i class="fas fa-check"></i></span>Price: <strong>$<?php echo $price ?></strong></li>                 
          </ul>
        </div>
      </div>
    </div>
  </section>
  <form  method="POST" action="insert.php">
    <section class="pricing py-5">
        <div class="container">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h6 class="card-price text-center">Your Information:</h6>
              <hr>
              <ul class="fa-ul">
                <li>
                  <div class="form-group col-md-6">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Full Name">
                  </div>
                </li>
                <li>
                  <div class="form-group col-md-6" style="">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
                  </div>
                </li>                
              </ul>
            </div>
          </div>
        </div>
      </section>
      <input type="hidden" id="txtColor" name="txtModel" value="<?php echo $model ?>"/>
      <input type="hidden" id="txtColor" name="txtColor" value="<?php echo $color ?>"/>
      <input type="hidden" id="txtColor" name="txtPrice" value="<?php echo $price ?>"/>
      <div class="text-center">
        <button type="submit" class="btn btn-danger btn-lg" style="width: 10rem;height: 4rem;border-radius: 5rem;"><a href="products.php" style="color: white;">Cancel</a></button>
        <button type="submit" class="btn btn-success btn-lg" style="width: 10rem;height: 4rem;border-radius: 5rem;">Confirm</button></p>
      </div>
  </form>
<?php require_once('footer.php') ?>
</body>
</html>