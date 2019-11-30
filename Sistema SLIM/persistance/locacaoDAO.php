<?php

class locacaoDAO {

    function __construct(){}

    function salvar($locacao, $conexao) {
        $sql = "INSERT INTO locacao(idLoc, idCliente, idInstrumento) VALUES ('" .
        $locacao->getId() ."','" . 
        $locacao->getCliente()->getCpf() . "','" .
        $locacao->getInstrumento()->getId() ."')";
        
        echo "<br>" .$sql;
    
        if($conexao -> query($sql) == TRUE){
            echo "Locação realizada"
        }
        else {
            echo "Erro ao realizar locação"; $conexao->error;
        }
    }


    function consultarLocacao($)
}


?>