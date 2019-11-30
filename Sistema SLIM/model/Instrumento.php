<?php

class Instrumento {
    private $nome;
    private $id;
    private $valorLoc;

    function __construct($cnome, $cid, $cvalor) {
        $this->nome = $cnome;
        $this->id = $cid;
        $this->valorLoc = $cvalor;
    }

    function getNome() {
        return $this->nome;
    }
    function getId() {
        return $this->id;
    }
    function getValorLoc() {
        return $this->valorLoc;
    }

}

?>