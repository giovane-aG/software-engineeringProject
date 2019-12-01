<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<?php
class instrumentoDAO {
    function _construct() {}
    function salvar($instrumento, $conexao) {
        $sql = "INSERT INTO instrumento(Tipo, Id, Nome, Preco, Desc) VALUES ('" .
        $instrumento->getTipo() ."','" .
        $instrumento->getId() ."','" .
        $instrumento->getNome() ."','".
        $instrumento->getPreco() ."','".
        $instrumento->getDesc() ."')";
        echo "<br>" . $sql;
        if($conexao->query($sql) == TRUE) {
            echo "Instrumento musical foi salvo no banco de dados com sucesso";
        } else {
            echo "Erro no cadastro: <br>".$conexao->error;
        }
    }
    function consultarInstrumento($conexao) {
        $sql = "SELECT Tipo, Id, Nome, Desc FROM instrumento";
        $res = $conexao->query($sql);
        return $res;
    }
}
?>
>>>>>>> b927502e32910116ae18572c99939817f4918acd
