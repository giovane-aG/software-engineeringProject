<?php

    
    include_once '..\model\Locacao.php';
    include_once '..\persistance\Connection.php';
    include_once '..\persistance\locacaoDAO.php';
    include_once '..\model\Instrumento.php';
    include_once '..\persistance\instrumentoDAO.php';

    $nome = $_POST['lnome'];
    $instrumentoID = $_POST['linstrumentoID'];
    $dia = $_POST['ldia'];
    $preco = $_POST['lpreco'];
    $id = $_POST['lid'];

    $Locacao = new locacao($nome, $instrumentoID, $dia ,$preco,$id);
    
    $conexao = new Connection();
    $conn = $conexao->getConnection();

    $locacaoDAO = new locacaoDAO();
    $locacaoDAO->salvar($Locacao,$conn);
    
?>
