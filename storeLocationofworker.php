<?php
try{
    $connection = new PDO('mysql:host=localhost;dbname=sanaye','root','');
    $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $exc){
    echo $exc ->getMassage();
    echo "NO connection";
}
$name=$_POST['name'];
$workerType=$_POST['workerType'];
$lat=floatval($_POST['lat']);//$_POST['lat'];
$lng=floatval($_POST['lng']);

$statment=$connection->query("INSERT INTO `locationofworkers` (`lng`, `lat` , `name`, `type` ) VALUES ('$lng', '$lat','$name','$workerType')");

$count=$statment -> rowCount();

if($count>0){
   echo"added succesfully";

}
    echo json_encode("sucsses add");
