<?php 

    include_once '../persistence/Connection.php';

    // A sessão é iniciada
    session_start();
    
    // $login e $senha recebem os dados dos campos do arquivo html
    $login = $_POST['ccpf'];
    $senha = $_POST['csenha'];
    
    // aqui é feita a conexão com o banco de dados
    $conexao = new Connection();
    $conn = $conexao->getConnection();

    // Aqui é construida a query para     
    $result = $conn->query("SELECT * FROM `cliente` WHERE `Cpf` = '$login' AND `Senha` = '$senha'");
    
    // Depois que a consulta é feita existe um if/else para verificar se há algum dado identico ao que foi solicitado
    // Caso não seja encontrado o usuário é redirecinado para digitar novamente
    if (mysql_num_rows($result) > 0){
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:../view/profile.html');
    }
    else{
        unset ($_SESSION['login']);// caso nao encontre os dados ele deleta os dados da sessão e redireciona para serem digitados novamente
        unset ($_SESSION['senha']);
        header('location:login.php');  
    }
?>
