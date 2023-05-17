<?php
    if(!$_POST['email'] || !$_POST['password']){
        header('Location: login.php');
        exit;
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == 'rbenica@gmail.com' && $password == '123456'){
        session_start();
        $_SESSION['email'] = email;
    }
?>

