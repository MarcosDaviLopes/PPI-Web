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
            echo "Login efetuado com sucesso";
            session_start();
            $_SESSION['login'] = $login;
            
            echo "<script>setTimeout(function() {
                window.location.href = 'listagem.php';
            }, 5000);</script>";

        } else {
            echo 'Login ou senha incorretos';
        }
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}

verificar_login();
?>
