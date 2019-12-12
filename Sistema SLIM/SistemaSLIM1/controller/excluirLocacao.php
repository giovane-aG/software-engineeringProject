<?php
    include_once '..\model\Locacao.php';
    include_once '..\persistance\Connection.php';
    include_once '..\persistance\locacaoDAO.php';
    include_once '..\model\Instrumento.php';
    include_once '..\persistance\instrumentoDAO.php';
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
