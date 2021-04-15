<?php
require('connect.php');
$work = $_POST['work'];
$statment=$connection->query("SELECT * FROM `marker` where `marker`.`work` = '$work'");

$markers=$statment->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($markers);


?>