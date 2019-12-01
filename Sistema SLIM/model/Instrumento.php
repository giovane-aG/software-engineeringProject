<?php
class Instrumento {
    private $tipo;
    private $id;
    private $nome;
    private $preco;
    private $desc;

    function _construct($vtipo, $vid, $vnome, $vpreco, $vdesc) {
        $this->tipo = $vtipo;
        $this->id = $vid;
        $this->nome = $vnome;
        $this->preco = $vpreco;
        $this->desc = $vdesc;
    }

    function getTipo() {
        return $this->tipo;
    }
    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }
    function getPreco(){
        return $this->preco;
    }
    function getDesc() {
        return $this->desc;
    }
}
?>
