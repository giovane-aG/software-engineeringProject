<?php

class Cliente {
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $endereco;
    private $cidade;
    private $estado;
    private $telefone;

    function _construct($vnome, $vcpf, $vemail, $vsenha, $vendereco, $vcidade, $vestado, $vtelefone) {
        $this->nome = $vnome;
        $this->cpf = $vcpf;
        $this->email = $vemail;
        $this->senha = $vsenha;
        $this->endereco = $vendereco;
        $this->cidade = $vcidade;
        $this->estado = $vestado;
        $this->telefone = $vtelefone;
    }
    
    function getNome() {
        return $this->nome;
    }
    function getCpf() {
        return $this->cpf;
    }
    function getEmail() {
        return $this->email;
    }
    function getSenha() {
        return $this->senha;
    }
    function getEndereco() {
        return $this->endereco;
    }
    function getCidade() {
        return $this->cidade;
    }
    function getEstado() {
        return $this->estado;
    }
    function getTelefone() {
        return $this->telefone;
    }

}

?>