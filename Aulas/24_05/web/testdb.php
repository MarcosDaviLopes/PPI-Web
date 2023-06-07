<?php

    include_once "db.php";

    if(conectaBD()){
        echo "Conectado com sucesso";

        inserUsuario("Enzo","enzo@enzo.com","1234");
        echo "<br><pre>";
        print_r(recuperaALL());
        echo "</pre>";


    }else{
        echo "Erro ao conectar";
    }

?>