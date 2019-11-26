<?php

include_once '..\persistence\Connection.php';
include_once '..\persistence\ClienteDAO.php';

$conexao = new Connection();
$conn = $conexao->getConnection();

$clienteDAO = new ClienteDAO();
$res = $clienteDAO->ConsultarClientes($conn);

if($res->num_rows > 0) {

echo "<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
        </tr>";

    while($registro = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$registro['Nome'] ."</td>".
        "<td>".$registro['Cpf'] ."</td>".
        "<td>".$registro['Email'] ."</td>".
        "<td>".$registro['Senha'] ."</td>".
        "<td>".$registro['Endereço'] ."</td>".
        "<td>".$registro['Cidade'] ."</td>".
        "<td>".$registro['Estado'] ."</td>".
        "<td>".$registro['Telefone'] ."</td>".
        "<br>";
        echo"</tr>";
    }
    echo "</table></body></html>";
}

?>