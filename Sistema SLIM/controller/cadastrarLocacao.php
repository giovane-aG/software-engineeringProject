<?php
    //include_once '..\model\Instrumento.php';
    //include_once '..\persistence\Connection.php';
    //include_once '..\persistence\instrumentoDAO.php';
    include_once 'Locacao.php';
    include_once 'Connection.php';
    include_once 'LocacaoDAO.php';

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
