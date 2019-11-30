<?php

    include_once '..\persistence\Connection.php';
    include_once '..\persistence\ClienteDAO.php';

    $cpf = $_POST['ccpf'];
    $conexao = new Connection();
    $conexao = $conexao->getConnection();
    $clienteDAO = new ClienteDAO();
    $res = $clienteDAO->excluirCliente($cpf,$conexao);

    if($res) {
        echo "Cliente excluído";
    } else {
        echo "Erro ao excluir";
    }

    // if($res->num_rows == 1){
    //     $registro = $res->fetch_assoc();
    // }
    // else
    // echo "Error at deleting things".$conexao->error;
?>
