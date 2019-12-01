<?php

    include_once '..\model\Instrumento.php';
    include_once '..\persistence\Connection.php';
    include_once '..\persistence\instrumentoDAO.php';

    $tipo = $_POST['ptipo'];
    $id = $_POST['pid'];
    $nome = $_POST['pnome'];
    $preco = $_POST['ppreco'];
    $desc = $_POST['psenha'];

    $instrumento = new Instrumento($tipo, $id, $nome,$preco, $desc);

    $conexao = new Connection();
    $conn = $conexao->getConnection();

    $instrumentoDAO = new instrumentoDAO();
    $instrumentoDAO->salvar($instrumento,$conn);

?>
