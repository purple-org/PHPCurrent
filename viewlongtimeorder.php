<?php
require('connect.php');
$phoneuser=$_POST['phoneuser'];
$statment=$connection->query("SELECT * FROM `longtimeorder`where `longtimeorder`.`phoneuser`='$phoneuser'");

$markers=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($markers);


?>