<?php
    include_once '..\model\Instrumento.php';
    include_once '..\persistance\Connection.php';
    include_once '..\persistance\instrumentoDAO.php';

    $tipo = $_POST['ptipo'];
    $id = $_POST['pid'];
    $nome = $_POST['pnome'];
    $preco = $_POST['ppreco'];
    $descr = $_POST['pdescr'];
    $instrumento = new Instrumento($tipo, $id, $nome,$preco, $descr);
    $conexao = new Connection();
    $conn = $conexao->getConnection();
    $instrumentoDAO = new instrumentoDAO();
    $instrumentoDAO->salvar($instrumento,$conn);
?>
