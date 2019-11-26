<?php

$ptipo = $_POST['ptipo'];
$id = $_POST['pid'];
$pnome = $_POST['pnome'];
$pdesc = $_POST['pdesc'];
$pimg = $_POST['pimg'];

echo "<html><body><h1>
            ".$ptipo."    ".$id."    ".$pnome."    ".$pdesc."</h1>
            <img>".$pimg."</img> 
            </body></html>;"

$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "instrumentos";

$connection = mysqli_connect($serverName, $userName, $password, $dataBase);

if(!$connection) {
    die("Erro de conexão: ". $connection->connection_error);
}

$sql = "INSERT INTO `instrumentos`(`ptipo`, `pnome`, `pdesc`, `pimg`, `pid`) VALUES ('$ptipo','$id','$pnome','$pdesc','$pimg')"
 
 ?>
 
