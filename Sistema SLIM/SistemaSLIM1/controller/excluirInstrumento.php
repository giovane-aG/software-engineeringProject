<?php
include_once '..\persistance\Connection.php';
include_once '..\persistance\instrumentoDAO.php';

$conexao = new Connection();
$conn = $conexao->getConnection();
$id = $_POST['pid'];
$dao = new instrumentoDAO();
$res = $dao -> excluirID($id, $conn);

if($res){
    echo"Instrumento excluído com sucesso";
}
else{
    echo "Erro ao deletar".$conexao->error;
    }
?>
