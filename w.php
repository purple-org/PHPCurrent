<?php


require('connect.php');

$work = $_POST['work'];
//$phone=$_POST['phone'];
//echo($work);

$statment1 = $connection->query("SELECT * FROM `worker` WHERE  `worker`.`work` = '$work' ");
$worker = $statment1->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($worker);



