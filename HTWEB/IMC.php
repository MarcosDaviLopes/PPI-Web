<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #resultado{
            font-size:2rem;
            font-weight: bold;
            border-radius: 1rem;
            padding:1rem;
            border:1px solid black;
        }
    </style>
</head>
<?php
    session_start();
    function calcIMC($peso,$altura){
        $imc=$peso/($altura*$altura);
        return $imc;
    }
    if(!isset($_GET['peso']) || !isset($_GET['altura'])){
        header('location: formIMC.php');
    }
?>
<body>
    <div>
        <p id="resultado"><?php $imc=calcIMC($_GET['peso'],$_GET['altura']);
        $_SESSION['imc']=$imc;
        echo $imc;
        ?>
        </p>
    </div>
    <form action="resultado.php" method="post">
        <label for="Nome">Nome</label>
        <input type="text" name="nome">
        <label for="email">Email</label>
        <input type="text" name="email">
        <input type="submit" value="enviar">
    </form>
</body>
</html>