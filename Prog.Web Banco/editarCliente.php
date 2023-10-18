<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de alteração de Clientes</title>
</head>
<body>
    <h1>Alterar Clientes</h1>
    <?php
        require_once("ConexaoBD.php");
        if(isset($_GET["id"]) && is_numeric($_GET["id"])){
            $id = $_GET["id"];

            $conBD = new ConexaoBD();
            $usuario = $conBD->executaSQL("select * from clientes where codigo = $id");
            if($usuario){
                $codigo = $usuario[0]['codigo'];
                $nome = $usuario[0]['nome'];
                $telefone = $usuario[0]['telefone'];
            ?>
                <form action="atualizaCliente.php" method="POST">
                    <label for="inputcodigo">Código: <?php echo $codigo ?></label>
                    <input type="hidden" id="inputcodigo" name="inputcodigo" value="<?php echo $codigo ?>">
                    <label for="inputnome">Nome</label>
                    <input type="text" id="inputnome" name="inputnome" value="<?php echo $nome ?>">
                    <label for="inputtelefone">Telefone</label>
                    <input type="text" id="inputtelefone" name="inputtelefone" value="<?php echo $telefone ?>">
                    <button type="submit">Atualizar cliente</button>
                </form>
            <?php

            }
            else{
                echo "Usuário não foi encontrado!";
            }
        }
        else{
            echo "O id do cliente está incorreto.";
        }
    ?>
</body>
</html>