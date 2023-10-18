<?php
    require_once("ConexaoBD.php");
    if(isset($_GET['id'])){
        $codigo = $_GET['id'];
        $conBD = new ConexaoBD();
        if($conBD->executaComando("DELETE from clientes where codigo=$codigo") != null){
            echo "Cliente excluído com sucesso!!";
        }
        else
            echo "Erro ao excluir cliente ...";
    }
    else
        echo "ID do usuário incorreto";
?>
<a href="indexCliente.php">Voltar</a>