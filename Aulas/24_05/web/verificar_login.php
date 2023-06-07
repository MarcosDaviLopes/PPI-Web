<?php 
    $login = $_POST['email'];
    $senha = $_POST ['senha'];

    if ($login == "rbeninca@gmail.com" && $senha == '1234'){
        echo "login efetuado";
        session_start();
        $_SESSION ['login'] = $login;

    
    echo "<script>setTimeout(
                function(){
                    window.location.href='home.php'},5000
                );
        </script>";
    }else{
        echo 'Login ou senha incorretos';
    }
?>