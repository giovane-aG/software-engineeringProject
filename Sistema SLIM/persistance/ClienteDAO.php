<?php

class ClienteDAO {

    function _construct() {}

    function salvar($cliente, $conexao) {

        $sql = "INSERT INTO cliente(Nome, Cpf, Email, Senha, Endereço, Cidade, Estado, Telefone) VALUES ('" .
        $cliente->getNome() ."','" .
        $cliente->getCpf() ."','" .
        $cliente->getEmail() ."','" .
        $cliente->getSenha() ."','" .
        $cliente->getEndereco() ."','" .
        $cliente->getCidade() ."','" .
        $cliente->getEstado() ."','".
        $cliente->getTelefone() ."')";

        echo "<br>" . $sql;

        if($conexao->query($sql) == TRUE) {
            echo "Cliente salvo";
        } else {
            echo "Erro ao cadastrar: <br>".$conexao->error;
        }

    }

    function consultarClientes($conexao) {
        $sql = "SELECT Nome, Cpf, Email, Senha, Endereço, Cidade, Estado, Telefone FROM cliente";
        $res = $conexao->query($sql);
        return $res;
    }

}

?>