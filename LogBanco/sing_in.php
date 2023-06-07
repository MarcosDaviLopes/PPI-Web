<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <?php
        function conectaBD(){
            $con=new PDO("mysql:host=localhost;dbname=web","root","aluno");
            return  $con;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["nome"]))
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        function inserUser($nome,$email,$senha){
            try{
            $con = conectaBD();
            $con->setAttibute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO usuario (nome,login,senha)VALUE(?,?,?)";
            $stm = $con->prepare($sql);

            $stm->bindParam(1,$nome);
            $stm->bindParam(2,$email);
            $stm->bindParam(3,$senha);
            $stm->execute();
            }catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
            }
            return $con->lastInsertId();
        }

        inserUser($nome,$email,$senha);
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