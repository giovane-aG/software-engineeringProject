<?php
//include_once '..\persistence\Connection.php';
//include_once '..\persistence\instrumentoDAO.php';
include_once 'Connection.php';
include_once 'locacaoDAO.php';
$conexao = new Connection();
$conn = $conexao->getConnection();
$id = $_POST['lid'];
$locacaoDAO = new locacaoDAO();
$res = $locacaoDAO -> consultarLocacaoID($id, $conn);
if($res->num_rows > 0) {
	$registro = $res->fetch_assoc();
	echo "<!DOCTYPE html><html lang='pt-br'><head>
<meta charset='UTF-8'/>
<link href='https:fonts.googleapis.com/css?family=Concert+One&display=swap' rel='stylesheet'>
	<title>Bem vindo!</title>
	<link rel='stylesheet' type='text/css' href='css/master.css'/>
	</head>
<body>
<div id='interface'><header id='cabecalho'><hgroup><h2>Alterar locacao</h2></hgroup>
<a href='menu_admin.html'> <img class='uicon' src='imagens/user.png'></a>
<nav id='menu'>
		<h1>Menu Principal</h1>
<ul>
		<li><a href='index.html'>Página Inicial</a></li>
		<li><a href='clientes.html'>Clientes</a></li>
		<li><a href='produtos.html'>Produtos</a></li>
		<li><a href='info.html'>Sobre-nós</a></li>
</ul>
</nav>
</header>
<br> <br>
<div id= 'cproduto'>
  <form  action='alterarLocacaoFinal.php' method='POST' enctype='multipart/form-data'>
    <fieldset>
      <legend> Nome do Cliente:</legend>
  <br>
		<input type='text' name='lnome' readonly value='$registro[Nome]'><br>
ID da locacao:
	 <input type='number' name='lid' readonly value='$registro[Id]' min='1'  max='999'>
	 <br>
</fieldset>
<br>
  <fieldset>
 <legend>Instrumento</legend>
  ID do Instrumento:<br>
   <input type='number' name='linstrumentoID' value='$registro[InstrumentoID]' min='1'  max='999'> <br>
	Dias:<br>
    <input type='number' name='ldias' value='$registro[Dias]' min='1'  max='999'>
  </fieldset> <br>
  <input type='hidden' name='lpreco' value='$registro[Preco]'>
  <input type='submit' value='Alterar'>
</form>
</div>
 <footer id='rodape'> <br> Copyright @ RPG Corp 2019</footer>
</div>
</body>
</html>";
  } else {
  echo"<br> <br> Nao existe este ID ";
}
?>
