ClienteDAO.php ->>

function ExcluirCPF($cpf,$conn){
    $sql = "DELETE FROM Usuarios WHERE Cpf =".$cpf;
    $res = $conn->query($sql);
    
    return $res;
}



<?php

include_once '...\Persistence\Connection.php';
include_once '...\Persistence\ClienteDAO.php';

&cpf = $_POST['ccpf'];

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$clientedao = new ClienteDAO();
$res = $clientedao->ExcluirCPF($cpf,$conexao);

if($res->num_rows = 1){
    $registro = $res->fetch_assoc();
}
else
    echo "Error at deleting things".$conexao->error;

?>

