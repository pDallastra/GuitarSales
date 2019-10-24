<?php 

require("database.php");
$db = get_db();

$data = $_POST;

echo $data;

echo "line 7<br/>";

$data = $_POST['name'];

echo $data;
echo $data['name'];

echo "line 11<br/>";

?>