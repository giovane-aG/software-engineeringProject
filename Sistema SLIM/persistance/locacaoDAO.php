<?php
class locacaoDAO {
    function _construct() {}
    function salvar($instrumento, $conexao) {
        $sql = "INSERT INTO locacao.locacao (Nome, InstrumentoID ,Dia ,Preco, Id) VALUES ('" .
        $instrumento->getNome() ."','".
        $instrumento->getInstrumentoID() ."','".
        $instrumento->getDia() ."','".
        $instrumento->getPreco() ."','".
        $instrumento->getID() ."')";
        echo "<br>" . $sql;
        if($conexao->query($sql) == TRUE) {
            echo "A locação foi salva";
        } else {
            echo "Erro no cadastro: <br>".$conexao->error;
        }
    }
    function consultarLocacao($conexao) {
        $sql = "SELECT Nome, InstrumentoID, Dia, Preco, Id FROM locacao.locacao";
        $res = $conexao->query($sql);
        return $res;
    }
    function consultarLocacaoID($Id ,$conexao) {
        $sql = "SELECT Nome, InstrumentoID, Dia, Preco, Id FROM locacao.locacao WHERE Id=".$Id;
        $res = $conexao->query($sql);
        return $res;
    }
    function excluirID($Id ,$conexao) {
        $sql = "DELETE FROM locacao.locacao WHERE Id=$Id";
        $res= mysqli_query($conexao, $sql);
        echo"$sql";
        return $res;
    }
    function alterarLocacaoID($ins ,$conexao){
        $nome=$ins->getNome(); $instrumentoID= $ins->getInstrumentoID(); $dia = $ins->getDia(); $preco= $ins->getPreco(); $id = $ins->getId();
        $sql= "UPDATE locacao.locacao SET Nome='$nome', InstrumentoID= $instrumentoID, Dia =$dia, Preco =$preco, Id= $id WHERE Id=$id";
        echo "$sql";
        $res= mysqli_query($conexao, $sql);
        return $res;
      }
  }
?>
