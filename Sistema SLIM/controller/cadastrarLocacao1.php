<?php
    //include_once '..\model\Instrumento.php';
    //include_once '..\persistence\Connection.php';
    //include_once '..\persistence\instrumentoDAO.php';
    include_once 'Locacao.php';
    include_once 'Connection.php';
    include_once 'LocacaoDAO.php';
    include_once 'Instrumento.php';
    include_once 'instrumentoDAO.php';


    $conexao = new Connection();
    $conn = $conexao->getConnection();
    $id = $_POST['lid'];
    $dias = $_POST['ldia'];
    $instrumentoDAO = new instrumentoDAO();
    $res = $instrumentoDAO -> consultarInstrumentoID($id, $conn);
    $registro = $res->fetch_assoc();
    $result1 = $registro[Preco];
    $result = $result1 * $dias;
    if($res->num_rows > 0) {
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

Info do Instrumento selecionado: <h3> ID: '$registro[Id]' &nbsp &nbsp </h3>
<h3>Nome: '$registro[Nome]'&nbsp &nbsp </h3>
<h3>Preco: '$registro[Preco]'&nbsp &nbsp </h3>
<br>
<br>
<form  action='cadastrarLocacao.php' method='POST' enctype='multipart/form-data'>

      <fieldset>
      <legend>Continue o Cadastro: </legend>
      <form  action='cadastrarLocacao2.php' method='POST' enctype='multipart/form-data'>
      ID da locacao: <br>
      <input type='number' name='lid' value='0' min='1'  max='999'> <br>
      Preco da Locacao:<br>
      <input type='text' name='lpreco' readonly value='$result'><br>
      <br>
      Nome do Cliente (temporario ate alguem arrumar):
      <input type='text' name='lnome' placeholder='Digite o nome do cliente'><br>
      </fieldset>
--------------------------------------------------------------------------------- <br>
    	 <input type='hidden' name='ldia' value='$dias'>
       <input type='hidden' name='linstrumentoID' value='$id'>

    <br>

      <input type='submit' value='Continuar'>
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
