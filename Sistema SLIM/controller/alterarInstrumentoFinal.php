<?php
//include_once '..\Persistence\Connection.php'
//include_once '..\Persistence\instrumentoDao'
include_once 'Connection.php';
include_once 'Instrumento.php';
include_once 'instrumentoDAO.php';

    $vtipo = $_POST['ptipo'];
    $vid = $_POST['pid'];
    $vnome = $_POST['pnome'];
    $vpreco = $_POST['ppreco'];
    $vdescr = $_POST['pdescr'];

$instrumento = new Instrumento($vtipo, $vid, $vnome,$vpreco, $vdescr);
$conexao= new Connection ();
$conn = $conexao->getConnection();

echo $instrumento->getNome();
$down= new instrumentoDao();

$res = $down -> AlterarInstrumentoID($instrumento,$conn);

if($res){
  echo"sucesso";
} else {echo"falha";}

?>
