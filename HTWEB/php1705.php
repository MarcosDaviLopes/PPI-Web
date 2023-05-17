<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get"></form>
        <label for="">Digite o tamanho do array</label>
        <input type="number" name="valor" id="">
        <input type="submit" value="Enviar">
</body>
</html>

<?php
    function cria_array($n){
        $vetor_result=array();
        for($i=0;$i<$n;$i++){
            $vetor_result[$i]=rand();
        }
        return $vetor_result;
    }
    function soma_array($array){
        $soma=0;
        for($i=0;i<count($array);$i++){
            $soma=$soma+$array[i];
        }
        return soma;
    }
    if(isset($_GET['v'])){
        echo soma_array(cria_array($_GET['v']));
    }
    
?>