<?PHP

$nome = $_POST('cnome');
$cpf = $_POST('ccpf');
$email = $_POST('cemail');
$senha = $_POST('csenha')
$endereco = $_POST('cendereco');
$cidade = $_POST('ccidade');
$estado = $_POST('cestado');
$telefone = $_POST('ctel');

echo "<html><body>
        <h1> ".$nome." ".$cpf." ".$email." ".$senha." ".$endereco." ".$cidade." ".$estado." ".$telefone."
    </body>
</html>;"

$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase =

$connection = mysqli_connect($serverName, $userName, $password, $dataBase);

if(!$connection) {
    die("Erro de conexão: ". $connection->connection_error);
}

$sql = "INSERT INTO cliente(Nome, Cpf, Email, Senha, Endereço, Cidade, Estado, Telefone) VALUES ('$nome','$cpf','$email','$senha','$endereco','$cidade','$estado','$telefone')"

?>