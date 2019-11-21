<?php 
// A sessão é iniciada
session_start();

// $login e $senha recebem os dados dos campos do arquivo html

$login = $_POST['cnome'];
$senha = $_POST['csenha'];

// aqui é feita a conexão com o banco de dados
$con = mysql_connect("127.0.0.1", "root", "passwordDB") or die("SEM CONEXÃO COM O SERVIDOR");
$select = mysql_select_db("server") or die("Sem acesso ao DB");
// Aqui é construida a query para 
$result = mysql_query("SELECT * FROM `USUARIO` WHERE `LOGIN` = '$login' AND `SENHA` = '$senha'");

// Depois que a consulta é feita existe um if/else para verificar se há algum dado identico ao que foi solicitado
// Caso não seja encontrado o usuário é redirecinado para digitar novamente
if(mysql_num_rows ($result) > 0 ){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:principal.php');
}
else{
    unset ($_SESSION['login']);// caso nao encontre os dados ele deleta os dados da sessão e redireciona para serem digitados novamente
    unset ($_SESSION['senha']);
    header('location:login.php');  
}
?>