<?php
class instrumentoDAO {
    function _construct() {}
    function salvar($instrumento, $conexao) {
        $sql = "INSERT INTO instrumento.instrumento (Tipo, Id, Nome,Preco, Descr) VALUES ('" .
        $instrumento->getTipo() ."','".
        $instrumento->getId() ."','".
        $instrumento->getNome() ."','".
        $instrumento->getPreco() ."','".
        $instrumento->getDescr() ."')";
        echo "<br>" . $sql;
        if($conexao->query($sql) == TRUE) {
            echo "Instrumento musical foi salvo no banco de dados com sucesso";
        } else {
            echo "Erro no cadastro: <br>".$conexao->error;
        }
    }
    function consultarInstrumento($conexao) {
        $sql = "SELECT Tipo, Id, Nome, Preco, Descr FROM instrumento.instrumento";
        $res = $conexao->query($sql);
        return $res;
    }
    function consultarInstrumentoID($Id ,$conexao) {
        $sql = "SELECT Tipo, Id, Nome, Preco, Descr FROM instrumento.instrumento WHERE Id=".$Id;
        $res = $conexao->query($sql);
        return $res;
    }
    function excluirID($Id ,$conexao) {
        $sql = "DELETE FROM instrumento WHERE Id=$Id";
        $res= mysqli_query($conexao, $sql);
        echo"$sql";
        return $res;
    }

    function alterarInstrumentoID($ins ,$conexao){
        $tipo=$ins->getTipo(); $id= $ins->getId(); $nome = $ins->getNome(); $preco= $ins->getPreco(); $descr = $ins->getDescr();
        $sql= "UPDATE instrumento SET Tipo='$tipo', Id= $id, Nome ='$nome', Preco ='$preco', Descr= '$descr' WHERE Id=$id";
        $res= mysqli_query($conexao, $sql);
        return $res;
      }
  }
?>
