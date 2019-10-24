<?php 

require("database.php");
$db = get_db();

$data = $_POST;

foreach($data as $values)
{
    echo $values[0];
    echo $values[1];
}

?>