<?php
class Instrumento {
    private $tipo;
    private $id;
    private $nome;
    private $preco;
    private $descr;

    public function __construct($vtipo, $vid, $vnome, $vpreco, $vdescr) {
        $this->tipo = $vtipo;
        $this->id = $vid;
        $this->nome = $vnome;
        $this->preco = $vpreco;
        $this->descr = $vdescr;
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
    function getPreco() {
        return $this->preco;
    }
    function getDescr() {
        return $this->descr;
    }
}
?>
