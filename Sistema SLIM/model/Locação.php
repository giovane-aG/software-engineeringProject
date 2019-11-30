<?php

class Locacao{

    private $cliente;
    private $instrumento;
    private $id;

    function __construct($cliente, $instrumento) {
        $this->cliente = $cliente;
        $this->instrumento = $instrumento;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getInstrumento() {
        return $this->instrumento;
    }

    function getId() {
        return $this->id;
    }
    
}


?>