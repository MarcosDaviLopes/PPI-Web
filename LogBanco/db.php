<?php

    function conectaBD(){
        $con=new PDO("mysql:host=localhost;dbname=usuarios","root","aluno");
        return  $con;
    }
    function inserUsuario($nome,$email,$senha){
        try{
        $con=conectaBD();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO usuario (nome,login,senha)VALUE(?,?,?)";
        $stm = $con->prepare($sql);

        $stm->bindParam(1,$nome);
        $stm->bindParam(2,$email);
        $stm->bindParam(3,$senha);
        $stm->execute();

        
        }catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
       return $con->lastInsertId();
    }
    function deleteUsuario(){
        $con=conectaBD();
        $sql = "DELETE FROM usuario WHERE id = ?";
        try{
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $con->prepare($sql);
            $stm->bindParam(1,$id);
            $stm->execute();
        }catch (PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    function recuperaUsuario($id){
        $con=conectaBD();
        $sql = "SELECT * FROM usuario";
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }  
    function recuperaALL(){
        $con=conectaBD();
        $sql = "SELECT * FROM usuario";
        $stm=$con->prepare($sql);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>