<?php

class instrumentoDAO {

    function __construct(){}

    function salvar($instrumento, $conexao) {
        $sql = "INSERT INTO instrumento(Nome, Id, ValorLoc) VALUES ('".
        $instrumento->getNome() . "','" .
        $instrumento->getId() . "'," .
        $instrumento->getValorLoc() .")";

        echo "<br>" . $sql;
        if($conexao->query($sql) == TRUE) {
            echo "Instrumento salvo";
        } else {
            echo "Erro ao cadastrar: <br>".$conexao->error;
        }

    }

    function consultarInstrumentos($conexao) {
        $sql = "SELECT Nome, Id, ValorLoc FROM Instrumento";
        $res = $conexao->query($sql);
        return $res;
    }

    function excluirInstrumento($id, $conexao) {
        $sql = "DELETE FROM instrumento WHERE Id =".$cpf;
        $res = $conexao->query($sql);
        return $res;
    }
}

?>