<?php
class ConnectionLoc{
    private $serverName = "localhost";
    private $userName = "root";
    private $password ="";
    private $dataBase = "locacao";
    private $connection = null;

    function _construct() {}
    function getConnection() {
        if($this->connection == null) {
            $this->connection = mysqli_connect($this->serverName, $this->userName, $this->password, $this->dataBase);
        }

        if(!$this->connection) {
            die("Erro de conexão: ". $connection->connection_error);
        }
        return $this->connection;
    }
}
?>
