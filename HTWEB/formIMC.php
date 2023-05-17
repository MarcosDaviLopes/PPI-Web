<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .box{
            align-items:center;
            justify-content: center;
            width: 50vw;
            height: 50vh;
            border: 5px solid black;
        }
        #Butao{
            margin-top: 5em;
            margin-left: 25px;
            border: 2px solid black;
            width: 80px;
            height: 25px;
            border-radius: 25px;
        }
    </style>
</head>
<body>
        <fieldset class="box">
        <form action="IMC.php" method="GET">
        <legend>Calculo do IMC</legend>
            <div>
                <p>Peso</p>
                <input type="number" name="peso" placeholder="peso">
            </div>
            <div>
                <p>Altura</p>
                <input type="number" name="altura" placeholder="altura">
            </div>
            <button id="Butao">Enviar</button>
        </fieldset>
    </form>

</body>
</html>