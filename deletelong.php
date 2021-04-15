<?php
require('connect.php');

$id=$_POST['id'];

$myarray=array();

$statment=$connection->query("DELETE FROM `longtimeorder` WHERE `longtimeorder`.`id` = '$id'");

echo json_encode("Delete sucsses");

?>