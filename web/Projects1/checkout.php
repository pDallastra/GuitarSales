<?php
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $model = $_POST['txtModel'];
    $color = $_POST['txtColor'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CheckOut</title>
</head>
<body>
    <?php require_once('navbar.php') ?>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Guitar Model`</th>
      <th scope="col">Body Color</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><?php echo $name ?></th>
      <td><?php echo $email ?></td>
      <td><?php echo $model ?></td>
      <td><?php echo $color ?></td>
    </tr>
  </tbody>
</table>
<?php require_once('footer.php') ?>
</body>
</html>