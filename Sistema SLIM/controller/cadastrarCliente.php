<?php

include_once '..\model\Cliente.php';
include_once '..\persistence\Connection.php';
include_once '..\persistence\ClienteDAO.php';

$nome = $_POST['cnome'];
$cpf = $_POST['ccpf'];
$email = $_POST['cemail'];
$senha = $_POST['csenha'];
$endereco = $_POST['cendereco'];
$cidade = $_POST['ccidade'];
$estado = $_POST['cestado'];
$telefone = $_POST['ctel'];

$cliente = new Cliente($nome, $cpf, $email, $senha, $endereco, $cidade, $estado, $telefone);

$cliente->getNome();

$conexao = new Connection();
$conn = $conexao->getConnection();

$clienteDAO = new ClienteDAO();
$clienteDAO->salvar($cliente,$conn);



?>