<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="verifica.css">
    <title>Document</title>
</head>
<body>
    <?php
function conectaBD()
{
    $con = new PDO("mysql:host=localhost;dbname=usuarios", "root", "aluno");
    return $con;
}

$login = $_POST['email'];
$senha = $_POST['senha'];

function verificar_login(){
    
    global $login, $senha;
    
    $con = conectaBD();
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
    
    try {
        $stm = $con->prepare($sql);
        $stm->bindParam(1, $login);
        $stm->bindParam(2, $senha);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        
        if ($result) {
            echo '<p class="success-message">Login efetuado com sucesso</p>';
            session_start();
            $_SESSION['login'] = $login;
            
            echo "<script>setTimeout(function() {
                window.location.href = 'listagem.php';
            }, 5000);</script>";

        } else {
            echo '<p class="error-message">Login ou senha incorretos</p>';
        }
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

verificar_login();
?>
</body>
</html>
