<?php

require("connect.php");
$workerphone = $_POST['workerphone'];
$phoneuser = $_POST['phoneuser'];
$namelast = $_POST['namelast'];
$namefirst = $_POST['namefirst'];
$nameofwork = $_POST['nameofwork'];

$Todate = $_POST['Todate'];
$Fromdate = $_POST['Fromdate'];
///$id=$_POST['id'];
 $id =rand(0,2000000);

$login = '';

$statment = $connection->query("INSERT INTO `reservations` (`namefirst`, `namelast`, `phoneuser`, `workerphone`, `nameofwork`,`id`, `Todate`,`Fromdate`) VALUES ('$namefirst','$namelast' ,'$phoneuser','$workerphone','$nameofwork','$id','$Todate','$Fromdate')");
//$statment1= $connection->query(" UPDATE `longtimeorder`SET `accept`='yes' WHERE  ");
$count = $statment->rowCount();
if ($count > 0) {

    echo json_encode("sucsses add");
}

