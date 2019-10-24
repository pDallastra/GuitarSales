<?php 

require("database.php");
$db = get_db();

$data = $_POST;

echo $data;
echo $data[0];
echo $data[1];

require_once('footer.php');
?>