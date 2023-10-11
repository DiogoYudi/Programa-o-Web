<?php
    require_once("ConexaoBD.php");
    if(isset($_POST['adicionar'])){
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];

        $conBD = new ConexaoBD();
        $comandoInsert = "Insert into clientes values($codigo, '$nome', '$telefone')";

        if($conBD->executaComando($comandoInsert))
            echo "Cliente inserido com sucesso!!";
        else
            echo "Erro ao adicionar cliente.";
    }
?>

<a href="indexCliente.php"> Voltar </a>