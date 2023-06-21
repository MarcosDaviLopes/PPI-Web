<?php
    $login = $_POST['email'];
    $senha = $_POST['senha'];

    function verificar_login(){
        $con = conectaBD();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT login From usuario where login (?)";

        try{

            $stm = $con->prepare($sql);
            $stm->bindParam(1,$login);
            $stm->execute();
            $result=$stm->fetchAll(PDO::FETCH_ASSOC);
            return $resultLogin;

        }
        catch  (PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }

        $sql = "SELECT senha From usuario where senha (?)";

        try{

            $stm = $con->prepare($sql);
            $stm->bindParam(1,$senha);
            $stm->execute();
            $result=$stm->fetchAll(PDO::FETCH_ASSOC);
            return $resultSenha;

        }
        catch  (PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        

        if ($resultLogin == $login && $resultSenha == $senha) {
            echo "Login efetuado com sucesso";
            session_start();
            $_SESSION ['login'] = $login;
    
            echo "<script>setTimeout(
                function(){
                    window.location.href='listagem.php'},5000
                );
        </script>";
    }else{
        echo 'Login ou senha incorretos';
    }       
    }
?>