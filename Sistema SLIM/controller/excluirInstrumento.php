<?php
include_once '..\persistence\Connection.php';
include_once '..\persistence\instrumentoDAO.php';

$conexao = new Connection();
$conn = $conexao->getConnection();
$id = $_POST['pid'];
$dao = new instrumentoDAO();
$res = $dao -> excluirID($id, $conn);

if($res){
    echo"Deleou aew";
}
else{
    echo "Erro ao deletar".$conexao->error;
    }
?>
