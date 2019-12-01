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
