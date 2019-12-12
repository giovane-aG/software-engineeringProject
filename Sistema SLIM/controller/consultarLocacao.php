<?php
//include_once '..\persistence\Connection.php';
//include_once '..\persistence\instrumentoDAO.php';
include_once 'Connection.php';
include_once 'locacaoDAO.php';
$conexao = new Connection();
$conn = $conexao->getConnection();
$locacaoDAO = new locacaoDAO();
$res = $locacaoDAO->consultarLocacao($conn);
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
            <th>ID Instrumento</th>
            <th>Dias</th>
            <th>Preco</th>
            <th>ID Locacao</th>
        </tr>";
    while($registro = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$registro['Nome'] ."</td>".
        "<td>".$registro['InstrumentoID'] ."</td>".
        "<td>".$registro['Dia'] ."</td>".
        "<td>".$registro['Preco'] ."</td>".
        "<td>".$registro['Id'] ."</td>".
        "<br>";
        echo"</tr>";
    }
    echo "</table></body></html>";
} else {
 echo' erro ';
}
?>
