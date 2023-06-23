<?php
function conectaBD()
{
    $con = new PDO("mysql:host=localhost;dbname=Usuarios", "root", "aluno");
    return $con;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["Email"];
    $senha = $_POST["senha"];
    $senhaCon = $_POST["confirmaSenha"];

    if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($senhaCon)) {
        inserUser($nome, $telefone, $email, $senha, $senhaCon);
        echo '<script src="Jscript.js"></script>';
        echo 'Usuario cadastrado com sucesso';
    } else {
        echo 'Algum dos campos não foi preenchido';
    }
}

function inserUser($nome, $telefone, $email, $senha, $senhaCon)
{
    if ($senha == $senhaCon) {
        try {
            $con = conectaBD();
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO usuario (nome, telefone, email, senha) VALUES (?, ?, ?, ?)";
            $stm = $con->prepare($sql);

            $stm->bindParam(1, $nome);
            $stm->bindParam(2, $telefone);
            $stm->bindParam(3, $email);
            $stm->bindParam(4, $senha);
            $stm->execute();

            return $con->lastInsertId();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    } else {
        echo 'As senhas não coincidem';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sing.css">
  <title>Cadastrar</title>
</head>
<body>
  <div class="container">
    <h1>Cadastre-se</h1>
    <form method="POST">
      <label>Nome:</label>
      <input type="text" name="nome" placeholder="Nome">
      <br><br>

      <label>Telefone</label>
      <input type="number_format" name="telefone" placeholder="Telefone">
      <br><br>

      <label>Email:</label>
      <input type="text" name="Email" placeholder="Email"><br><br>

      <label>Senha:</label>
      <input type="password" name="senha" placeholder="Senha"><br><br>

      <label>Confirmar Senha:</label>
      <input type="password" name="confirmaSenha" placeholder="Repita senha"> <br><br>

      <input type="submit" name="submit" value="Cadastrar">
    </form>
  </div>
</body>
</html>