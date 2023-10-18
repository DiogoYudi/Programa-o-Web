<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Clientes</title>
</head>
<body>
    <h1>CRUD de Clientes</h1>
    <br><br>

    <?php
        require_once("ConexaoBD.php");
        $ConBD = new ConexaoBD();
        $clientes = $ConBD->executaSQL("Select * from clientes");

        echo "<h2>Clientes</h2>";
        foreach($clientes as $cli){
            echo $cli['codigo']."-".$cli['nome']."-".$cli['telefone']."<a href='editarCliente.php?id=".$cli['codigo']."'>[alterar]</a>"."<a href='excluirCliente.php?id=".$cli['codigo']."'>[excluir]</a>"."<br>";
        }
    ?>
    <form action="adicionarcliente.php" method="POST">
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo" required><br>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" required><br>
        <input type="submit" value="Adicionar" name="adicionar">
    </form>
</body>
</html>