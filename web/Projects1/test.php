<?php 

require("database.php");
$db = get_db();

$data = $_POST[$row];

echo $data[0];
echo $data['name'];

?>