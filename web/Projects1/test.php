<?php 

require("database.php");
$db = get_db();

$data = $_POST;

foreach($data as $values)
{
    echo $values['name<br/>'];
    echo $values['price<br/ß>'];
}

?>