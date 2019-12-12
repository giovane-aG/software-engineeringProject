<?php
    include_once '..\model\locacao.php';
    include_once '..\persistance\Connection.php';
    include_once '..\persistance\locacaoDAO.php';
    include_once '..\model\Instrumento.php';
    include_once '..\persistance\instrumentoDAO.php';

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
  $conexao= new Connection();
  $conn = $conexao->getConnection();

  echo $locacao->getNome();
  $down= new locacaoDao();

  $res = $down -> AlterarlocacaoID($locacao,$conn);

  if($res){
    echo"sucesso";
  } else {echo"falha";}

?>
