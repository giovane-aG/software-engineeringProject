<?php
//include_once '..\Persistence\Connection.php'
//include_once '..\Persistence\instrumentoDao'
include_once 'ConnectionLOC.php';
include_once 'Locacao.php';
include_once 'LocacaoDAO.php';
include_once 'instrumentoDAO.php';
include_once 'Connection.php';

    $lnome = $_POST['lnome'];
    $lidInstrumento = $_POST['linstrumentoID'];
    $ldias = $_POST['ldias'];
    $lpreco = $_POST['lpreco'];
    $lid = $_POST['lid'];
// calc
$conexaoC = new Connection();
$connC = $conexaoC->getConnection();
$dias = $ldias;
$instrumentoDAO = new instrumentoDAO();
$calc = $instrumentoDAO -> consultarInstrumentoID($lidInstrumento, $connC);
$registro = $calc->fetch_assoc();
$result1 = $registro[Preco];
$result = $result1 * $dias;
// calc

$locacao = new Locacao($lnome, $lidInstrumento, $ldias,$result, $lid);
$conexao= new ConnectionLOC ();
$conn = $conexao->getConnection();

echo $locacao->getNome();
$down= new locacaoDao();

$res = $down -> AlterarlocacaoID($locacao,$conn);

if($res){
  echo"sucesso";
} else {echo"falha";}

?>
