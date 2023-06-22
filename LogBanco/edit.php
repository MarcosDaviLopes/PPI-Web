<?php
function conectaBD()
{
    $con = new PDO("mysql:host=localhost;dbname=usuarios", "root", "aluno");
    return $con;
}
function edit(){
    $con = conectaBD();
    $sql = "UPDATE Usuarios SET = ?, where id = ? ";
    $stm = $con->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>