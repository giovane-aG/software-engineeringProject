<?php
class locacao {
    private $nome;
    private $instrumentoID;
    private $dia;
    private $preco;
    private $id;

    public function __construct($snome, $sinstrumentoID, $sdia, $spreco, $sid) {
        $this->nome = $snome;
        $this->instrumentoID = $sinstrumentoID;
        $this->dia = $sdia;
        $this->preco = $spreco;
        $this->id= $sid;
    }

    function getNome() {
        return $this->nome;
    }
    function getInstrumentoID() {
        return $this->instrumentoID;
    }
    function getDia() {
        return $this->dia;
    }
    function getPreco() {
        return $this->preco;
    }
    function getID(){
        return $this->id;
    }

}
?>
