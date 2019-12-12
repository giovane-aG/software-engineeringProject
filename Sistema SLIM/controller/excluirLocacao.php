<?php
//include_once '..\persistence\Connection.php';
//include_once '..\persistence\instrumentoDAO.php';
include_once 'Connection.php';
include_once 'locacaoDAO.php';
$conexao = new Connection();
$conn = $conexao->getConnection();
$id = $_POST['lid'];
$dao = new locacaoDAO();
$res = $dao -> excluirID($id, $conn);

if($res){
    echo"Deleou aew";
}
else{
    echo "Erro ao deletar".$conexao->error;
    }
?>
