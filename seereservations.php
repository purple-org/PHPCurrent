<?php
require('connect.php');
$phone=$_POST['phone'];
$statment=$connection->query("SELECT * FROM `reservations`where `reservations`.`workerphone`='$phone'");

$markers=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($markers);


?>