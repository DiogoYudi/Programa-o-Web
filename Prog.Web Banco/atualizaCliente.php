<?php
    require_once("ConexaoBD.php");
    if(isset($_POST["inputcodigo"])){
        $id = $_POST["inputcodigo"];
        $nome = $_POST["inputnome"];
        $telefone = $_POST["inputtelefone"];

        $conBD = new ConexaoBD();
        $comandoSQL = "UPDATE clientes SET nome='$nome', telefone='$telefone' where codigo='$id'";
        if($conBD->executaSQL($comandoSQL) != null){
            echo "Cliente alterado com sucesso !!!";
        }
        else
            echo "Erro ao alterar cliente ...";
    }
?>
<a href="indexCliente.php">Voltar</a>