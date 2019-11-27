<?php
class Instrumento {
    private $tipo;
    private $id;
    private $nome;
    private $desc;

    function _construct($vtipo, $vid, $vnome, $vdesc) {
        $this->tipo = $vtipo;
        $this->id = $vid;
        $this->nome = $vnome;
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
    function getDesc() {
        return $this->desc;
    }
}
?>
