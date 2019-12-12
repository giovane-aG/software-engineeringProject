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
echo '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
<title>Bem vindo!</title>
<link rel="stylesheet" type="text/css" href="css/master.css"/>
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
<div id="interface">
	<header id="cabecalho">
	<hgroup>
		<h1>Bem vindo ao SLIM</h1>
		<h2>Busque seu Instrumento dos sonhos!</h2>
	</hgroup>
<a href="menu_admin.html"> <img class="uicon" src="imagens/user.png" alt=""></a>
<nav id="menu">
		<h1>Menu Principal</h1>
<ul>
		<li><a href="index.html">Página Inicial</a></li>
		<li><a href="clientes.html">Clientes</a></li>
		<li><a href="produtos.html">Produtos</a></li>
		<li><a href="info.html">Sobre-nós</a></li>
</ul>
</nav>
</header>
<br> <br>
<table>
		<tr>
				<th>Nome</th>
				<th>ID Instrumento</th>
				<th>Dias</th>
				<th>Preco</th>
				<th>ID Locacao</th>
		</tr>';
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
      echo '</table><footer id="rodape"> <br> Copyright @ RPG Corp 2019</footer></body></html>';
} else {
 echo' erro ';
}
?>
