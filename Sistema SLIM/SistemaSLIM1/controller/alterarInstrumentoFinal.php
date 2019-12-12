<?php
include_once '..\persistance\Connection.php';
include_once '..\persistance\instrumentoDAO.php';
include_once '..\model\Instrumento.php';


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
