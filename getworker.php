<?php

require('connect.php');

$name = $_POST['name'];

$statment1 = $connection->query("SELECT * FROM `worker` WHERE `worker`.`name` = '$name'");
$worker=$statment1->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($worker);

?>
