<?php
//include_once '..\persistence\Connection.php';
//include_once '..\persistence\instrumentoDAO.php';
include_once 'Connection.php';
include_once 'instrumentoDAO.php';
$conexao = new Connection();
$conn = $conexao->getConnection();
$instrumentoDAO = new instrumentoDAO();
$res = $instrumentoDAO->consultarInstrumento($conn);
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
            <th>Tipo</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Preco</th>
            <th>Desc</th>
        </tr>";
    while($registro = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$registro['Tipo'] ."</td>".
        "<td>".$registro['Id'] ."</td>".
        "<td>".$registro['Nome'] ."</td>".
        "<td>".$registro['Preco'] ."</td>".
        "<td>".$registro['Descr'] ."</td>".
        "<br>";
        echo"</tr>";
    }
    echo "</table></body></html>";
} else {
 echo' erro ';
}
?>
