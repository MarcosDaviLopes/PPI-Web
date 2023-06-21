<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="sing.css">
    <title>Cadastrar</title>
</head>
<body>

<?php
function conectaBD()
{
    $con = new PDO("mysql:host=localhost;dbname=Usuarios", "root", "aluno");
    return $con;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (!empty($nome) && !empty($email) && !empty($senha)) {
        inserUser($nome, $email, $senha);
        echo '<script src="Jscript.js"></script>';
    } else {
        echo 'Algum dos campos não foi preenchido';
    }    
}

function inserUser($nome, $email, $senha)
{
    try {
        $con = conectaBD();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO usuario (nome, login, senha) VALUES (?, ?, ?)";
        $stm = $con->prepare($sql); 

        $stm->bindParam(1, $nome);
        $stm->bindParam(2, $email);
        $stm->bindParam(3, $senha);
        $stm->execute();

        return $con->lastInsertId();
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}
?>

        <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="Nome">
       <br><br>

        <label>Email:</label>
        <input type="text" name="email" value="Email"><br><br>

        <label>Senha:</label>
        <input type="password" name="senha"><br><br>

        <label>Confirmar Senha:</label>
        <input type="password" name="confirmaSenha"> <br><br>

        <input type="submit" name="submit" value="Cadastrar">
    </form>
</body>
</html>