<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="Nome" id="Nome" placeholder="Nome">
        <input type="text" name="Email" id="Email" placeholder="Email">
        <input type="text" name="Telefone" id="Telefone" placeholder="Telefone">
        <input type="text" name="Id" id="iduser" placeholder="Id">
        <input type="submit" name="crud" value="register">
        <input type="submit" name="crud" value="select">
        <input type="submit" name="crud" value="update">
        <input type="submit" name="crud" value="delete">
    </form>

    <?php
        $con = new PDO("mysql:host=localhost;dbname=phpcrud", "root", "");
        if(!empty($_POST['crud'])){
            if($_POST['crud'] == "register"){
                if(!empty($_POST['Nome']) && !empty($_POST['Email']) && !empty($_POST['Telefone']) && !empty($_POST['Id'])){
                    $v = [
                        'nome' => $_POST['Nome'],
                        'email' => $_POST['Email'],
                        'telefone' => $_POST['Telefone'],
                        'id' => $_POST['Id'],
                    ];

                    $i = "INSERT INTO cadastro(nome, email, telefone, id) VALUES(:nome, :email, :telefone, :id)";
                    $con->prepare($i)->execute($v);
                }
            }
            else if($_POST['crud'] == "select"){
                $s = $con->query("SELECT nome, email, telefone, id FROM cadastro");
                while($sl = $s->fetch(PDO::FETCH_OBJ)){
                    echo "Nome:" . $sl->nome . "<br>";
                    echo "Email:" . $sl->email . "<br>";
                    echo "Telefone:" . $sl->telefone . "<br>";
                    echo "Id:" . $sl->id . "<br>";
                    echo "-------------------------" . "<br>";
                }
            }
            else if($_POST['crud'] == "update"){
                if(!empty($_POST['Nome']) && !empty($_POST['Email']) && !empty($_POST['Telefone']) && !empty($_POST['Id'])){
                    $v = [
                        'nome' => $_POST['Nome'],
                        'email' => $_POST['Email'],
                        'telefone' => $_POST['Telefone'],
                        'id' => $_POST['Id'],
                    ];

                    $u = "UPDATE cadastro SET nome = :nome, email = :email, telefone = :telefone, id = :id WHERE id = :id";
                    $con->prepare($u)->execute($v);
                }
            }
            else if($_POST['crud'] == "delete"){
                if(!empty($_POST['Id'])){
                    $v = [
                        'id' => $_POST['Id'],
                    ];
                    $d = "DELETE FROM cadastro WHERE id=:id";
                    $con->prepare($d)->execute($v);
                }
            }
        }
    ?>
</body>
</html>