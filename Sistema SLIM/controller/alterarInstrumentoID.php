<?php
//include_once '..\persistence\Connection.php';
//include_once '..\persistence\instrumentoDAO.php';
include_once 'Connection.php';
include_once 'instrumentoDAO.php';
$conexao = new Connection();
$conn = $conexao->getConnection();
$id = $_POST['pid'];
$instrumentoDAO = new instrumentoDAO();
$res = $instrumentoDAO -> consultarInstrumentoID($id, $conn);
if($res->num_rows > 0) {
	$registro = $res->fetch_assoc();
	echo "<!DOCTYPE html><html lang='pt-br'><head>
<meta charset='UTF-8'/>
<link href='https:fonts.googleapis.com/css?family=Concert+One&display=swap' rel='stylesheet'>
	<title>Bem vindo!</title>
	<link rel='stylesheet' type='text/css' href='css/master.css'/>
	</head>
<body>
<div id='interface'><header id='cabecalho'><hgroup><h2>Alterar produtos</h2></hgroup>
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
  <form  action='alterarInstrumentoFinal.php' method='POST' enctype='multipart/form-data'>
    <fieldset>
      <legend> Tipo do Instrumento:</legend>
  <br>
  <input type='radio' name='ptipo' value='cordas'> Cordas<br>
  <input type='radio' name='ptipo' value='teclas'> Teclas<br>
  <input type='radio' name='ptipo' value='sopro'> Sopro<br>
  <input type='radio' name='ptipo' value='outro'> Outro<br><br>
ID:
	 <input type='number' name='pid' readonly value='$registro[Id]' min='1'  max='999'>
	 <br>
</fieldset>
<br>
  <fieldset>
 <legend>Informações tecnicas</legend>
  Modelo do Instrumento:<br>
  <input type='text' name='pnome' value='$registro[Nome]'><br>
  Preço do Instrumento: <br>
  <input type='text' name='ppreco' value='$registro[Preco]'><br>
  Descrição do Produto:<br>
   <textarea name='pdescr' cols='110' rows='5' placeholder='$registro[Descr]'></textarea> <br>
  </fieldset> <br>
  <input type='submit' value='Alterar'>
</form>

</script>
</div>
 <footer id='rodape'> <br> Copyright @ RPG Corp 2019</footer>
</div>
</body>
</html>";
  } else {

  echo"<br> <br> Nao existe este ID ";
}
?>
