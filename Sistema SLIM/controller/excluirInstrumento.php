<?php
include_once '..\persistence\Connection.php';
include_once '..\persistence\instrumentoDAO.php';
$conexao = new Connection();
$conn = $conexao->getConnection();
$id = $_POST['pid'];
$instrumentoDAO = new instrumentoDAO();

$res = $instrumentoDao -> excluirID($id, $conexao)
if($res->num_rows = 1){
    $registro = $res->fetch_assoc();
}
else{
    echo "Erro ao deletar".$conexao->error;
    }
?>
